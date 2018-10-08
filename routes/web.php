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
	return view('landingpage');
});

Route::get('uuid', 'UserController@devuelve_uuid');
Route::get('step2/{uuid}', 'UserController@step2')->name('step2');
//Route::get('uuid', function () { echo Uuid::generate()->string; });
Auth::routes();
Route::get('signup', 'UserController@signup')->name('signup');
Route::get('forgot', 'UserController@forgot')->name('forgot');
Route::post('register', 'UserController@register')->name('register');