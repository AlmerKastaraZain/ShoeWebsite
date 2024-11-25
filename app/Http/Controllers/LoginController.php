<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {  
        return view('/auth/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::guard()->attempt([
            'name' => $request->username,
            'password' => $request->password,
        ]) || Auth::guard()->attempt([
            'email' => $request->username,
            'password' => $request->password,
        ])) {
            return redirect()->intended('/');
        } else
        {
            return back()->withErrors(['username' => "Invalid Credential", 'password' => "Invalid Credential"]);
        }
    }
}
