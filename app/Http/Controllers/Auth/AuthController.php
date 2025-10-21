<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends Controller
{
    // Display login form
    public function ShowLoginForm()
    {
        return view('auth.login');
    }

    // Performs login action
    public function login(Request $request)
    {
        // Step 1: Validate input
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Step 2: Find user
        $user = User::where('username', $validated['username'])->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'username' => 'Username or password is incorrect!',
            ]);
        }

        // Step 3: Check user status
        if ($user->status !== 'Active') {
            throw ValidationException::withMessages([
                'username' => 'Your account is inactive. Please contact support.',
            ]);
        }

        // Step 4: Attempt authentication
        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'password' => 'Username or password is incorrect!',
            ]);
        }

        // Step 5: Successful login
        $request->session()->regenerate();

        return redirect()->route('dashboard.admin');
    }

    public function logout()
    {

    }
}