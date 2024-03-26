<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'unique:users,username', 'min:3', 'max:255'],
            'password' => ['required', 'min:7', 'max:255'],
            'email' => ['required', 'unique:users,email', 'email', 'max:255'],
        ]);

        User::create($attributes);

        return redirect('/')->with('success', 'Your account has been created!');
    }
}
