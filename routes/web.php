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
    return view('home');
});

Route::get('/ocd', function () {
    return view('ocd');
});

Route::get('/bipolar', function () {
    return view('bipolar');
});

Route::get('/depression', function () {
    return view('depression');
});

Route::get('/anxiety', function () {
    return view('anxiety');
});

Route::get('/skizofrenia', function () {
    return view('skizofrenia');
});

Route::get('/icad', function () {
    return view('icad');
});

Route::get('/ptsd', function () {
    return view('ptsd');
});

Route::get('/sgd', function () {
    return view('sgd');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('home');
});

