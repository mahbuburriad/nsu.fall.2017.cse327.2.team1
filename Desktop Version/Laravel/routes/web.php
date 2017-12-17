<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('index');
});


Route::get('index', 'linkcontroller@index');
Route::get('login', 'linkcontroller@login');
Route::get('buy', 'linkcontroller@buy');
Route::get('rent', 'linkcontroller@rent');
Route::get('app_page', 'linkcontroller@app_page');
Route::get('pricing', 'linkcontroller@pricing');
Route::get('team', 'linkcontroller@team');
Route::get('about', 'linkcontroller@about');
Route::get('account', 'linkcontroller@account');
Route::get('editprofile', 'linkcontroller@editprofile');
Route::get('admin', 'linkcontroller@admin');
Route::get('image-upload',['as'=>'image.upload','uses'=>'ImageUploadController@imageUpload']);
Route::post('image-upload',['as'=>'image.upload.post','uses'=>'ImageUploadController@imageUploadPost']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact','linkcontroller@contact');
Route::get('buypage','linkcontroller@buypage');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('logout', '\App\Http\Controllers\linkcontroller@logout');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::resource('buy_house','PostadController');
Route::resource('buy', 'PostadController');
//Route::resource('buy_shop', 'PostadController');

Route::get('rent', 'PostadController@rent');