<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    function getUser(){
        $users = User::where('id','>',1)
        ->orWhere('username','ahmed')
        ->get();
    return view('user' , ['user' => $users]);

    }

    function delete($id){
        $user= User::find($id);
        $user->delete();
        return redirect()->route('users.index');


    }

    function update($id){
        $user =User::find($id);
        return view('update',['user'=>$user]);

    }


    function edit($id , Request $request){
        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index');


    }


    function create(){
        return view('create');
    }

    
    function store(Request $request){
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('users.index');
    }

}
