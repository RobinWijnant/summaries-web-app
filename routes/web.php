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

Route::get('/', 'HomeController@home')
    ->name('home');

Route::get('search', 'SummaryController@search')
    ->name('summaries.search');

Route::resource('summaries', 'SummaryController');
Route::resource('courses', 'CourseController')->only([
    'show'
]);
Route::resource('school', 'SchoolController')->only([
    'show'
]);
Route::resource('tags', 'TagController')->only([
    'show'
]);

Auth::routes();