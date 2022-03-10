<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showForm()
    {
        $roles = DB::table('roles')->get();
        return view("auth.register",compact('roles'));


    }

    public function register(Request $request)
    {
        $roles = DB::table('roles')->get();

        $user = $request->only('name','email','password','role_id');
        $user["password"]= Hash::make($user["password"]);

        DB::table('users')->insert($user);
        return redirect()->route('showFormLogin');
    }

    public function showFormLogin()
    {
        $roles = DB::table('roles')->get();
        return view("auth.register",compact('roles'));


    }

    public function login(Request $request)
    {
        $user = $request->only('email','password');
        if (Auth::attempt($user)){
            return redirect()->route('user.index');
        }else{
            \Illuminate\Support\Facades\Session::flash("error","Tai khoan khong dung");
            return redirect()->back();

        };
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.register');

    }
}
