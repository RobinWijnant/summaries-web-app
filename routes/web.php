<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', 'HomeController@home')
    ->name('home');

// Summaries
Route::middleware('auth')->group(function () {
    Route::resource('summaries', 'SummaryController', ['except' => ['show']]);
});

Route::get('summaries/{id}', 'SummaryController@show')
    ->name('summaries.show');

Route::get('search', 'SummaryController@search')
    ->name('summaries.search');

// Other
// Route::resource('courses', 'CourseController')->only([
//     'show'
// ]);
// Route::resource('school', 'SchoolController')->only([
//     'show'
// ]);
// Route::resource('tags', 'TagController')->only([
//     'show'
// ]);

Auth::routes();