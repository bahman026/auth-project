<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('login.register');
    }

    public function registerSubmit(Request $request)
    {

        $user['name'] = $request['name'];
        $user['email'] = $request['email'];
        $user['password'] = bcrypt($request['password']);
        $user = User::create($user);
        $token = $user->createToken('MyTokenName');
        dd($token->plainTextToken);


        $email = $request['email'];
        $password = $request['password'];

    }
}
