<?php

namespace App\Modules\AuthModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthModuleController extends Controller
{
    public function showLoginForm()
    {
        return view('AuthModule::signin');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function showRegistrationForm()
    {
        return view('AuthModule::register');
    }

    public function register(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors());
            }
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $user = User::create($input);
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;
            return response()->json(['success'=>$success], 200);
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()], 401);
        }
       
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
