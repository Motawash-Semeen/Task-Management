<?php

namespace App\Modules\RoleModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleModuleController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view("RoleModule::index", compact('roles', 'permissions'));
    }
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:roles,name'
    ]);

    // Check if all permissions in $request->permissions exist
    $existingPermissions = Permission::whereIn('id', $request->permissions)->pluck('id');
    if (count($existingPermissions) !== count($request->permissions)) {
        // Handle case where non-existent permissions were provided
        return redirect()->back()->withErrors(['permissions' => 'One or more permissions do not exist.'])->withInput();
    }

    // Create the role
    $role = Role::create(['name' => $request->name]);

    // Sync only the existing permissions
    $role->syncPermissions($existingPermissions);

    session()->flash('success', 'Role Created!');
    return redirect('/roles');
}

    

}
