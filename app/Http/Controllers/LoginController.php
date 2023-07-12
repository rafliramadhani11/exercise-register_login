<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {

        return view('auth.login', [
            'title' => 'Login Page'
        ]);
    }

    public function auth(Request $request)
    {
        $rules = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($rules))
        {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        };
        return back()->with('LoginFailed', 'Something went wrong when you filled the input !! ');
    }

    public function logout (Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
