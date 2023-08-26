<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginFormRequest;
use App\Http\Requests\Auth\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_form()
    {
        return view('auth.login');
    }
    public function register_form()
    {
        return view('auth.register');
    }
    public function login(LoginFormRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/profile');
        } else {
            return redirect('/login')->with([
                "error" => "these information do not match any one of our records"
            ]);
        }
    }

    public function register(RegisterFormRequest $request)
    {
        $user = User::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ])->assignRole($request->role);
        Auth::login($user);
        // $user->notify(new WelcomeEmail());
        return redirect()->intended('/profile')->with([
            "success" => __("Registration successful. You can now log-in.")
        ]);
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
