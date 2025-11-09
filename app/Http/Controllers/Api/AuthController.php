<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException; 

use Illuminate\Support\Facades\Hash;


class AuthController extends Controller

{
    // Login
    public function login(Request $request)
    {
        //validation
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //search the exsting user

        $user = User::where('email', $request->email)->first();
        //if the user not pass a
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        //if the user pass then give token
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'user'  => $user,
            'token' => $token,
        ]);
    }
    public function logout(Request $request){

        $request->user()->currentAccessToken()->delete();


        return response()->json([   
            'message'=> 'Logged Out Successfully'
            ]); 

    }
}
