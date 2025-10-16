<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public  function login(Request $request) {
        try {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $user = User::where('email',$credentials['email'])->first();
                if ($user && Hash::check($credentials['password'], $user->password)) {
                    $user = Auth::user();
                    $token = User::where('email', $credentials['email'])->first()->createToken('api-token')->plainTextToken;
                    $response = [
                        'user' => $user,
                        'token' => $token,
                    ];
                    return response()->json($response, 201);
                }
            }
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 401);
        }

    }

    public function user(Request $request) {
        return $request->user();
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'You have been logged out']);
    }
}
