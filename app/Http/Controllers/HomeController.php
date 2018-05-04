<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summary;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function show()
    {
        $recentSummaries = Summary::orderBy('id', 'desc')->take(4)->get();
        return view('home', [
            'recentSummaries' => $recentSummaries
        ]);
    }
}
