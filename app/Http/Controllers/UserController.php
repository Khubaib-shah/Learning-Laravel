<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

// to create controller we run this command 'php artisan make:controller UserController'

class UserController extends Controller
{

    // Show Register/create Form
    public function create()
    {
        return view('users.create');
    }

    // Store User data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);
        // Hash Password
        $validated['password'] = bcrypt($validated['password']);

        // Create User
        $user = User::create($validated);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', $user->name . ' login successfully');
    }

    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out successfully');

    }

    // Show Login Form
    public function login()
    {
        return view('users.login');
    }

    // Show Login Form
    public function authenticate(Request $request)
    {

        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (!auth()->attempt($validated)) {
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect('/')->with('message', 'login successfully');
    }

}
