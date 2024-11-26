<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        //validation
        request()->validate([
            'name' => ['required'],
            'username' => ['required', 'unique:users,username', 'min:5'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(5), 'confirmed'],
        ]);

    
        //craate the user
        $user = User::create([
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
        ]);

        //sign them in
        Auth::login($user);
        
        //redirect
        return redirect('/');

    }
}
