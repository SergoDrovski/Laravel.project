<?php

use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\NewsAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
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

// Добавлены все шаблоны согласно 3 заданию и роуты

Route::get('/', function () {
    return view('info');
});

// Admin Rout
Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){
    Route::view('/','admin.index')
        ->name('index');
    Route::resource('/news', NewsAdminController::class);
    Route::resource('/categories', CategoryAdminController::class);
});


// Client Rout
Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('index.show');

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])
    ->where('id', '\d+')
    ->name('categories.show');
