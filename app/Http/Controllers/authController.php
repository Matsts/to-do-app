<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class authController
{
    public function showRegister()
    {
        return view("auth.register");
    }

    public function showLogin()
    {
        return view("auth.login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }

    //Registering users and validating required info
    public function register(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:6|confirmed",
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route("dashboard");
    }


    public function login(Request $request)
    {
        $creds = $request->only("email", "password");

        if (Auth::attempt($creds)) {
            return redirect()->route("dashboard");
        }
        //if creds are invalid go back with errors
        return back()->withErrors(["email" => "Invalid credentials"]);
    }
}
