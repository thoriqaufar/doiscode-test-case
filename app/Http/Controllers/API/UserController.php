<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email',
            'password'=>'required',
        ]);

        $user = User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);

        $response = [
            'user' => $user,
        ];

        return response()->json($response,201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json($response,201);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        $response = [
            'message'=>'logged out',
        ];

        return response($response);
    }
}
