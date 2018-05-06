<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summary;
use App\School;
use App\Education;
use App\Course;
use Session;

class SummariesController extends Controller
{
    public function search()
    {
        return view('summaries.search');
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
