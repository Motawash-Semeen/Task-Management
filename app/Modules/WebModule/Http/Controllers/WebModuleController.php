<?php

namespace App\Modules\WebModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebModuleController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("WebModule::welcome");
    }
}
