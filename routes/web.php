<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AuthController@login')->name('login');
Route::post('/', 'AuthController@postLogin');

Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@postRegister');

Route::get('/verify/{email}', 'AuthController@verify');
Route::post('/verify/{email}', 'AuthController@postVerify');
Route::get('/verify/resend/{email}', 'AuthController@resendVerify');

Route::get('/forget', 'AuthController@forgetPassword');
Route::post('/forget', 'AuthController@postForgetPassword');
Route::get('/reset/{email}/{token}', 'AuthController@resetPassword');
Route::post('/reset/{email}/{token}', 'AuthController@postResetPassword');

Route::group(['middleware' => 'auth'], function() {
	Route::get('/logout', 'AuthController@logout');
	Route::get('/main', 'MainController@index');
});