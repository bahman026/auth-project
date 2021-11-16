<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{



    public function register(Request $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $user->token = $user->createToken('MyApp')->plainTextToken;

        return response(['message' => 'User registered successfully.', 'user' => $user]);
    }
    /**
     * Login api
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $user->token = $user->createToken('MyApp')->plainTextToken;

            return response(['message' => 'User logged in successfully.', 'user' => $user]);
        }
        else{
            return response(['message' => 'These credentials do not match our records.'], 422);
        }
    }
}

