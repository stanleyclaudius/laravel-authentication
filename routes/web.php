<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AuthController@login')->name('login');
Route::post('/', 'AuthController@postLogin');

Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@postRegister');

Route::get('/verify/{email}', 'AuthController@verify');
Route::post('/verify/{email}', 'AuthController@postVerify');
Route::get('/verify/resend/{email}', 'AuthController@resendVerify');


Route::group(['middleware' => 'auth'], function() {
	Route::get('/main', 'MainController@index');
	Route::get('/logout', 'AuthController@logout');
});