<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    //
    public function register()
    {
        return view('/auth/register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:8|max:255',
            'email' => 'required|max:255|email|unique:users',
            'password' => ['same:password_confirmation', 'between:8,255', 'required', Password::defaults()],
            'password_confirmation' => 'required',
        ]);


        
        // Create a new user
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 0
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
