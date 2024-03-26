<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

    public function create(){
        return view ('sessions.create');
    }

    public function store(){
        $attribute = request()->validate([
            'email' => ['required', 'exists:users,email'],
            'password' => ['required']
        ]);

        if (! auth()->attempt($attribute)){
            throw ValidationException::withMessages([
                'email' => 'The provided credentials are incorrect.'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back!');
    }
}
