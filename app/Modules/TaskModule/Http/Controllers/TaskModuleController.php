<?php

namespace App\Modules\TaskModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Modules\ProjectModule\Models\Category;
use App\Modules\ProjectModule\Models\Projects;
use App\Modules\TaskModule\Models\Tasks;

class TaskModuleController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = User::all();
        $categories = Category::all();
        $projects = Projects::all();
        $tasks = Tasks::all();
        return view("TaskModule::tasks", compact('members', 'categories', 'projects','tasks'));
    }
    public function store(Request $request){
        $request->validate([
            'task_name' => 'required',
            'member' => 'required',
            'category' => 'required',
            'project' => 'required',
        ]);
        $task = new Tasks();
        $task->name = $request->task_name;
        $task->user_ids = $request->member;
        $task->project_id = $request->project;
        $task->category_id = $request->category;
        $task->due_date = $request->due_date;
        $task->description = $request->desc ? $request->desc : '';
        if($request->hasFile('attachment')){
            $file = $request->file('attachment');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $task->attachment = $filename;
        }
        $task->save();
        return redirect('/tasks');
    }
}
