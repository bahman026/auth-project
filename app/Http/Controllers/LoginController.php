<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {

//        dd("tset");

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            dd($user);
        }


        $email = $request['email'];
        $password = $request['password'];

    }
}
