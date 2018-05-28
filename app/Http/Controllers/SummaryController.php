<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Summary;
use App\School;
use App\Education;
use App\Course;

class SummaryController extends Controller
{
    /**
     * Display a listing of the summary.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $summariesFromUser = Summary::where('user_id', Auth::id())->get();

        return view('summaries.index', [
            'summaries' => $summariesFromUser
        ]);
    }

    /**
     * Show the form for creating a new summary.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Get select box data and add an empty value on top (for the placeholder)
        $placeholder = ['' => null];
        $schools = School::pluck('name', 'id')->toArray() + $placeholder;
        $educations = Education::pluck('name', 'id')->toArray() + $placeholder;
        $courses = Course::pluck('name', 'id')->toArray() + $placeholder;

        return view('summaries.edit', [
            'schools' => $schools,
            'educations' => $educations,
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created summary in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'school' => 'required|exists:schools,id',
            'education' => 'required|exists:educations,id',
            'course' => 'required|exists:courses,id',
            'pdf' => 'required|file|mimetypes:application/pdf|max:20000'
        ]);

        //File upload
        $filename = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $request->name) . '.pdf';
        Storage::delete($filename);
        $path = Storage::putFileAs('summaries/'.Auth::id(), $request->file('pdf'), $filename);

        // Create summary
        $summary = new Summary;
        $summary->user_id = 1;
        $summary->name = $request->name;
        $summary->course_id = $request->course;
        $summary->save();

        $msg = 'De nieuwe samenvatting \'' . $request->name . '\' werd succesvol opgeslaan';
        return redirect()->route('summaries.index')->with('success', $msg);
    }

    /**
     * Display the specified summary.
     *
     * @param  \App\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function show(Summary $summary)
    {
        //
    }

    /**
     * Show the form for editing the specified summary.
     *
     * @param  \App\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function edit(Summary $summary)
    {
        //Get select box data and add an empty value on top (for the placeholder)
        $placeholder = ['' => null];
        $schools = School::pluck('name', 'id')->toArray() + $placeholder;
        $educations = Education::pluck('name', 'id')->toArray() + $placeholder;
        $courses = Course::pluck('name', 'id')->toArray() + $placeholder;

        $summary = Summary::find($summary->id);

        return view('summaries.edit', [
            'schools' => $schools,
            'educations' => $educations,
            'courses' => $courses,
            'summary' => $summary
        ]);
    }

    /**
     * Update the specified summary in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Summary $summary)
    {
        //
    }

    /**
     * Remove the specified summary from storage.
     *
     * @param  \App\Summary  $summary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Summary $summary)
    {
        //
    }

    public function search(Request $request)
    {
        $summaries = Summary::query();

        if ($request->q) {
            $summaries->where('name', 'like', '%'.$request->q.'%');
        }

        if ($request->course) {
            $summaries->where('course_id', $request->course);
        }

        if ($request->education) {
            $education_id = $request->education;
            $summaries->whereHas('course', function ($q) use($education_id){
                $q->where('education_id', $education_id);
            });
        }

        if ($request->school) {
            $school_id = $request->school;
            $summaries->whereHas('course', function ($q) use($school_id){
                $q->whereHas('education', function ($q2) use($school_id) {
                    $q2->where('school_id', $school_id);
                });
            });
        }

        $placeholder = ['' => null];
        $schools = School::pluck('name', 'id')->toArray() + $placeholder;
        $educations = Education::pluck('name', 'id')->toArray() + $placeholder;
        $courses = Course::pluck('name', 'id')->toArray() + $placeholder;
        $summaries = $summaries->get();

        return view('summaries.search', [
            'summaries' => $summaries,
            'schools' => $schools,
            'educations' => $educations,
            'courses' => $courses
        ]);
    }
}
