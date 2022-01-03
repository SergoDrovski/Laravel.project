<?php

use Illuminate\Support\Facades\Route;

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
    return view('info');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/hello/{name}', function ($name) {
    return "welcome $name";
});

//Следующие маршруты

Route::get('/welcome', function () {
    return view('info');
});

Route::get('/categories', function () {
    return view('info');
});

Route::get('/news/{categories}', function () {
    return view('info');
});

Route::get('/news/{id}', function () {
    return view('info');
});

Route::get('/auth', function () {
    return view('info');
});

Route::get('/cabinet', function () {
    return view('info');
});
