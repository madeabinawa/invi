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

Route::get('/template1', function () {
    return view('template1');
});

Route::get('/template2', function () {
    return view('template2');
});
Route::get('/template3', function () {
    return view('template3');
});

Route::get('/iwan-emi', function () {
    return view('iwanemi');
});
