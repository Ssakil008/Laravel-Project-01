<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login()
    {
        if (Auth::check()) {
            return redirect()->intended(route('home'));
        }
        return view('auth.login');
    }

    function registration()
    {
        if (Auth::check()) {
            return redirect()->intended(route('home'));
        }
        return view('auth.register');
    }

    function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error', 'Login Details are not valid');
    }

    function registerUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'mobile' => 'required|unique:users', // Ensure mobile is unique too
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password)
        ];

        $user = User::create($data);

        if (!$user) {
            return redirect()->route('registration')->with('error', 'Registration failed, try again');
        }

        return redirect()->route('login')->with('success', 'Registration Successful');
    }

    function logout()
    {
        Session::flush();
        return redirect(route('login'));
    }
}
