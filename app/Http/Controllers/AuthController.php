<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function login()
    {
        return view('login.login');
    }

    public function loginSubmit(Request $request)
    {



        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            dd($user);
        }


        $email = $request['email'];
        $password = $request['password'];

    }

    public function register()
    {
        return view('login.login');
    }

    public function registerSubmit(Request $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            dd($user);
        }


        $email = $request['email'];
        $password = $request['password'];

    }
}
