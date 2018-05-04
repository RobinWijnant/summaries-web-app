<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summary;

class SummariesController extends Controller
{
    public function search()
    {
        return view('summaries.search');
    }

    public function create()
    {
        $schools = [];
        $educations = [];
        $courses = [];

        return view('summaries.create', [
            'schools' => $schools,
            'educations' => $educations,
            'courses' => $courses,
        ]);
    }

    public function store(StoreSummary $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'school' => 'required',
            'education' => 'required',
            'course' => 'required'
        ]);

        $summary = new Summary;
        $summary->name = $request->name;
        

        // $summary->save();   
        $msg = 'De nieuwe samenvatting ' . $request->name . ' werd succesvol opgeslaan';
        return view('summaries.summaries', ['msg' => $msg]);
    }
}
