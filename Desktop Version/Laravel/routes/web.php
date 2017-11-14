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

Route::get('/',[
	'as' => 'home',
	'uses'=>'pagesController@home'
]);

Route::get('/login',[
	'as' => 'login',
	'uses'=>'pagesController@login'
]);

Route::post('register', [ 
	'as' => 'register', 
	'uses' => 'Auth\RegisterController@store'
]);

Route::post('login', [ 
	'as' => 'login', 
	'uses' => 'Auth\LoginController@loginn'
]);

$s='social.';
Route::get('/social/redirect/{provider}',
[
	'as'=> $s.'redirect',
	'uses'=>'Auth\SocialController@getSocialRedirect'

]); 

Route::get('/social/handle/{provider}',
[
	'as'=> $s.'handle',
	'uses'=>'Auth\SocialController@getSocialHandle'

]); 

