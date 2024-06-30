<?php

namespace App\Modules\RoleModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleModuleController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("RoleModule::index");
    }
}
