<?php

use App\Modules\TaskModule\Http\Controllers\TaskModuleController;
use Illuminate\Support\Facades\Route;

Route::group(['module' => 'TaskModule', 'middleware' => ['auth']], function() {

  Route::get('/tasks', [TaskModuleController::class, 'index']);

});