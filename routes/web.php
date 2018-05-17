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

Route::get('/', 'SummariesController@search')
    ->name('home');

Route::name('summaries.')->prefix('/summaries')->group(function () {

    Route::get('create', 'SummariesController@create')
        ->name('create');

    Route::post('create', 'SummariesController@store')
        ->name('store');

    Route::get('search', 'SummariesController@search')
        ->name('search');

    Route::get('summaries', 'SummariesController@summaries')
        ->name('summaries');
});

Route::get('/summary/{id}', function ($id) {
    return view('summary');
});

Route::get('/course/{id}', function ($id) {
    return view('course');
});

Route::get('/login', function () {
    return view('login');
})->name('user.login');

Route::get('/logout', function () {
    // logout code
    // ...
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
