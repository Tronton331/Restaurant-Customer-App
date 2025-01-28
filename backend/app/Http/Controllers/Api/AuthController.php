<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if(Auth::attempt($request->only('username', 'password'))) // check username and password
        {
            // Create token
            $user = Auth::user();
            $token = $user->createToken("accessToken")->plainTextToken;

            // Response
            return response()->json([
                'message' => 'Login success',
                'access' => [
                    'user' => [
                        'username' => $user->username,
                        'fullname' => $user->fullname,
                        'email' => $user->email
                    ],
                    'token' => $token
                ]
            ], 200);
        }
        else
        {
            return response()->json(['message' => 'Username or Password is incorrect'], 401);
        }
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        return response()->json(['message' => 'Logout success'], 200);
    }
}
