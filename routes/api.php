<?php

use Illuminate\Http\Request;
use App\Education;
use App\Course;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/educations-for-school/{id}', function (Request $request) {
    $educations = Education::where('school_id', $request->id)->pluck('name', 'id')->toArray();
    return response($educations, 200);
});

Route::get('/courses-for-education/{id}', function (Request $request) {
    $courses = Course::where('education_id', $request->id)->pluck('name', 'id')->toArray();
    return response($courses, 200);
});
