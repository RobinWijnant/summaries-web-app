<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Summary;
use App\School;
use App\Education;
use App\Course;
use Session;

class SummariesController extends Controller
{
    public function search(Request $request)
    {
        $summaries = DB::table('summaries')
            ->join('courses', 'summaries.course_id', '=', 'courses.id')
            ->join('educations', 'courses.education_id', '=', 'educations.id')
            ->join('schools', 'educations.school_id', '=', 'schools.id')
            ->select('summaries.*', 'summaries.course_id', 'courses.education_id', 'educations.school_id')
            ->get();

        if ($request->search) {
            $summaries = $summaries->where('name', 'like', '%'.$request->search.'%');
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

    public function summaries()
    {
        return view('summaries.summaries');
    }

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
}
