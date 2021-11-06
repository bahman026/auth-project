<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.login');
    }
    public function login(Request $request){
        $request->validate([
           'email'=>'required',
           'password'=>'required|string|min:8',
        ]);
        $email = $request['email'];
        $password = $request['password'];

        dd("tset");
    }
}
