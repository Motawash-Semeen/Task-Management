<?php

namespace App\Modules\UserModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserModuleController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $users = User::all();
        return view("UserModule::users", compact('roles', 'users'));
    }

    public function profile()
    {
        return view("UserModule::user-profile");
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'password' => 'required|same:confirm_password',
            'role' => 'required',
            'pro_pic' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();


        $user->name =  $request->name;
        $user->number = $request->number;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($request->hasFile('pro_pic')) {
            $image = $request->file('pro_pic');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $user->pro_pic = $name;
        }

        $user->assignRole($request->role);
        $user->save();


        return redirect()->back()->with('success', 'User created successfully');
    }
}
