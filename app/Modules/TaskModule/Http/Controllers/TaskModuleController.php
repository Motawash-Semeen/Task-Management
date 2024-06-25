<?php

namespace App\Modules\TaskModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskModuleController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("TaskModule::tasks");
    }
}
