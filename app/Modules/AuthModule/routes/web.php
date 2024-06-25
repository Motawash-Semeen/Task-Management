<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'AuthModuleController@showLoginForm')->name('login');
Route::get('register', 'AuthModuleController@showRegistrationForm')->name('register');

