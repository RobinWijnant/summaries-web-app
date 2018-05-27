<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summary;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $recentSummaries = Summary::orderBy('id', 'desc')->take(3)->get();

        return view('home', [
            'summaries' => $recentSummaries
        ]);
    }
}
