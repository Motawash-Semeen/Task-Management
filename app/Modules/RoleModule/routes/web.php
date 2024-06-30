<?php

use App\Modules\RoleModule\Http\Controllers\RoleModuleController;
use Illuminate\Support\Facades\Route;


Route::group(['module' => 'RoleModule', 'middleware' => ['auth']], function() {

  Route::get('/all-roles', [RoleModuleController::class, 'index']);

});