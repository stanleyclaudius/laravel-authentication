<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AuthController@login');
Route::post('/', 'AuthController@postLogin');

Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@postRegister');

Route::get('/logout', 'AuthController@logout');