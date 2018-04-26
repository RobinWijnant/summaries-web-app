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

Route::get('/', function () {
    return view('home');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/summary/{id}', function ($id) {
    return view('summary');
});

Route::get('/course/{id}', function ($id) {
    return view('course');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    // logout code
    // ...
    return view('login');
});
