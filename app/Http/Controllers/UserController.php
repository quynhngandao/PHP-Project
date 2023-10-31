<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //// SHOW Register/Create Form
    public function create()
    {
        return view('users.register');
    }

    //// CREATE New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password : use bcrypt
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login (note: automatically login)
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    //// LOGOUT User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    //// SHOW Login Form
    public function login()
    {
        return view('users.login');
    }

    //// AUTHENTICATE User
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            // session id regenerate
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }
        // error
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
