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
    return redirect('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/news', function () {
    return view('category');
});
Route::get('/sport', function () {
    return view('category');
});
Route::get('/action', function () {
    return view('category');
});
Route::get('/kids', function () {
    return view('category');
});
Route::get('/index/{id}', function () {
    return view('sub.play');
});
