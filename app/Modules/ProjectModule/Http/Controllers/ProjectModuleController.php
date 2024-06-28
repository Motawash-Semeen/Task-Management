<?php

namespace App\Modules\ProjectModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\ProjectModule\Models\Category;
use App\Modules\ProjectModule\Models\Projects;
use Illuminate\Support\Facades\Validator;

class ProjectModuleController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all(); // Fetch all categories
        return view("ProjectModule::projects", compact('categories'));
    }
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|unique:projects,name',
            'code' => 'required|unique:projects,code',
            'category' => 'required',
            'status' => 'required',
        ]);

        if ($validatedData->fails()) {
            return redirect('/projects')->withErrors($validatedData->errors());
        }
        $project = new Projects();
        $project->name = $request->name;
        $project->code = $request->code;
        $project->description = $request->description;
        $project->category = $request->category;
        $project->status = $request->status;
        $project->members = $request->members;
        $project->due_date = $request->due_date;
        $project->save();

        return redirect()->back()->with('success', 'Project created successfully');
    }
}
