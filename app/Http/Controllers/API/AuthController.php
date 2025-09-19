<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Usermobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'last_name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',
            'gender' => 'required'
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $user = Usermobile::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['user' => auth()->user(), 'access_token' => $accessToken]);
    }

    public function profile()
    {
        $user_data = auth()->user();

        return response()->json([
            'status' => true,
            'message' => 'User data',
            'data' => $user_data,
        ], 200);
    }

    public function logout(Request $request)
    {

        Auth::guard('api')->user()->token()->revoke();
        return response()->json([
            "status" => true,
            "message" => "User logged out successfully"
        ]);
    }
}
