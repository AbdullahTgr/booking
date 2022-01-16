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


Route::get('/search', function () {
    return view('trips.search');
});
Route::get('/book_trip', function () {
    return view('trips.book_trip');
});

Route::get('/check', function () {
    return view('check');
});
