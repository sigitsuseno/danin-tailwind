<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        $loginAttemp = request()->validate([
            'username' => ['required' ],
            'password' => ['required' ]
        ]);

        if (! Auth::attempt($loginAttemp)) {
            throw ValidationException::withMessages([
                'username' => 'Username tidak ada atau password salah',
                'password' => 'Username tidak ada atau password salah'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/dashboard');
    }
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
