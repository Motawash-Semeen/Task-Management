<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'AuthModuleController@showLoginForm')->name('login');
Route::get('register', 'AuthModuleController@showRegistrationForm')->name('register');

Route::post('register', 'AuthModuleController@register');
Route::post('login', 'AuthModuleController@login');
Route::get('logout', 'AuthModuleController@logout')->name('logout')->middleware('auth');
