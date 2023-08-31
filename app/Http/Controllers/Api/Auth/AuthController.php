<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email|max:220",
            "password" => "required|max:220"
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return response()->json([
                    "message" => "Connected successfully"
                ]);
                // $token = $user->createToken("auth-token");
                // return response()->json([
                //     "message" => "user exist",
                //     "token" => $token->plainTextToken
                // ]);
            } else {
                return response()->json([
                    "message" => "password is wrong"
                ]);
            }
        } else {
            return response()->json([
                "message" => "invalid credentials"
            ]);
        }
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" =>Hash::make($request->password)
        ]);
        return response()->json([
            "message" => "account created successfly",
            "user" => $user
        ]);
    }
}
