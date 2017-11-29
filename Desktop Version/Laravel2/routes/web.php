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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('buy_house', function () {
    return view('buy_house');
});

Route::get('buy_shop', function () {
    return view('buy_shop');
});

Route::get('buy_appartment', function () {
    return view('buy_appartment');
});

Route::get('buy_openfloor', function () {
    return view('buy_openfloor');
});

Route::get('rent_house', function () {
    return view('rent_house');
});

Route::get('rent_shop', function () {
    return view('rent_shop');
});

Route::get('rent_appartment', function () {
    return view('rent_appartment');
});

Route::get('rent_openfloor', function () {
    return view('rent_openfloor');
});