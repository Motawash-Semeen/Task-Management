<?php

use App\Modules\UserModule\Http\Controllers\UserModuleController;
use Illuminate\Support\Facades\Route;


Route::group(['module' => 'UserModule', 'middleware' => ['auth']], function() {

  Route::get('/all-users', [UserModuleController::class, 'index']);
  Route::get('/user-profile', [UserModuleController::class, 'profile']);

});