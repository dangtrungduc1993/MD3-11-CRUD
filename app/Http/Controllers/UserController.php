<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->get();
//        dd($users);
        return view('user.list',compact('users'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {


    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
