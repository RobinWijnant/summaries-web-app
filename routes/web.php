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

Route::get('/', 'HomeController@index')
    ->name('home');

Route::name('me.')->prefix('me')->group(function () {

    Route::get('create', 'MeController@create')
        ->name('create');

    Route::post('create', 'MeController@store')
        ->name('store');

    Route::get('', 'MeController@summaries')
        ->name('summaries');

    Route::get('/', 'MeController@summaries')
        ->name('overview');
});

Route::name('summaries.')->group(function () {

    Route::get('summaries/search', 'Summaries@search')
    ->name('search');

    Route::get('summary/{id}', 'Summaries@summary')
    ->name('summary');

    Route::get('course/{id}', 'Summaries@course')
    ->name('course');

    Route::get('school/{id}', 'Summaries@school')
    ->name('school');

    Route::get('tag/{id}', 'Summaries@tag')
    ->name('tag');
});

Auth::routes();