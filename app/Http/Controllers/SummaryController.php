<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        //
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

        return view('summaries.create', [
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
        ]);

        $summary = new Summary;
        $summary->user_id = 1;
        $summary->name = $request->name;
        $summary->course_id = $request->course;
        $summary->save();

        $msg = 'De nieuwe samenvatting \'' . $request->name . '\' werd succesvol opgeslaan';
        return redirect()->route('summaries.summaries')->with('success', $msg);
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
        //
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
        $summaries = DB::table('summaries')
            ->join('courses', 'summaries.course_id', '=', 'courses.id')
            ->join('educations', 'courses.education_id', '=', 'educations.id')
            ->join('schools', 'educations.school_id', '=', 'schools.id')
            ->select('summaries.*', 'summaries.course_id', 'courses.education_id', 'educations.school_id')
            ->get();

        if ($request->q) {
            $summaries = $summaries->where('name', 'like', '%'.$request->q.'%');
        }

        if ($request->course) {
            $summaries = $summaries->where('course_id', $request->course);
        }

        if ($request->education) {
            $summaries = $summaries->where('education_id', $request->education);
        }

        if ($request->school) {
            $summaries = $summaries->where('school_id', $request->school);
        }

        $placeholder = ['' => null];
        $schools = School::pluck('name', 'id')->toArray() + $placeholder;
        $educations = Education::pluck('name', 'id')->toArray() + $placeholder;
        $courses = Course::pluck('name', 'id')->toArray() + $placeholder;
        $summaries = $summaries->toArray();

        //dd($summaries);

        return view('summaries.search', [
            'summaries' => $summaries,
            'schools' => $schools,
            'educations' => $educations,
            'courses' => $courses
        ]);
    }
}
