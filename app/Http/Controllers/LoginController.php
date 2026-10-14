<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth2.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        session([
            'is_logged_in' => true,
            'username' => $request->input('username')
        ]);

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }
}
