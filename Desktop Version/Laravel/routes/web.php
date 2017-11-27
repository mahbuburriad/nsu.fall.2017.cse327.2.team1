<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
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

Route::get('/home',[
	'as' => 'home',
	'uses'=>'pagesController@home'
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

Route::get('/contact',[
	'as' => 'contact',
	'uses'=>'pagesController@contact'
]);

Route::get('/about',[
	'as' => 'about',
	'uses'=>'pagesController@about'
]);

Route::get('/gallery',[
	'as' => 'gallery',
	'uses'=>'pagesController@gallery'
]);

Route::get('/account',[
	'as' => 'account',
	'uses'=>'pagesController@account'
]);

Route::get('/editprofile',[
	'as' => 'editprofile',
	'uses'=>'pagesController@editprofile'
]);

Route::get('/logout',function() {
	Auth::logout();
	return Redirect::to('/');
})->middleware('auth');