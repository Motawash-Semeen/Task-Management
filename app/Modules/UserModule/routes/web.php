<?php

use App\Modules\UserModule\Http\Controllers\UserModuleController;
use Illuminate\Support\Facades\Route;


Route::group(['module' => 'UserModule', 'middleware' => ['auth']], function() {

  Route::get('/users', [UserModuleController::class, 'index']);
  Route::get('/users/profile', [UserModuleController::class, 'profile']);
  Route::post('/users/create', [UserModuleController::class, 'store']);

});