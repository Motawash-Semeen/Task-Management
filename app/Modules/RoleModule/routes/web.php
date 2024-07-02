<?php

use App\Modules\RoleModule\Http\Controllers\RoleModuleController;
use Illuminate\Support\Facades\Route;


Route::group(['module' => 'RoleModule', 'middleware' => ['auth']], function() {

  Route::get('/roles', [RoleModuleController::class, 'index']);
  Route::post('/roles/store', [RoleModuleController::class, 'store']);

});