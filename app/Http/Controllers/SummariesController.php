<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummariesController extends Controller
{
    public function show()
    {
        return view('summaries');
    }

    public function create()
    {
        return view('createSummary');
    }
}
