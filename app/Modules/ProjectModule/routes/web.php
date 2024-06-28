<?php

use App\Modules\ProjectModule\Http\Controllers\ProjectModuleController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

Route::group(['module' => 'ProjectModule', 'middleware' => ['auth']], function() {

    Route::get('/projects', [ProjectModuleController::class, 'index']);
    Route::post('/project-store', [ProjectModuleController::class, 'store']);

});
