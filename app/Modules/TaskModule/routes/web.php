<?php

use Illuminate\Support\Facades\Route;

Route::get('/tasks', 'TaskModuleController@index');