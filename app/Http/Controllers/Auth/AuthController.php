<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Show login form.
     */
    public function showLoginForm()
    {
        // If already authenticated, skip login form
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    /**
     * Handle login submission.
     */
    public function login(Request $request)
    {
        // 1) Validate incoming data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // 2) Get values and remember flag
        $username = $request->input('username');
        $password = $request->input('password');
        $remember = $request->filled('remember'); // true if checkbox checked

        // 3) Find user by username
        $user = User::where('username', $username)->first();

        // 4) If user not found -> show generic error
        if (!$user) {
            // Generic error helps prevent username enumeration.
            return back()->withErrors(['username' => 'Invalid username or password.'])->withInput();
        }

        // 5) Check account status (custom business rule)
        if ($user->status !== 'Active') {
            return back()->withErrors(['status' => 'Your account is not active.'])->withInput();
        }

        // 6) Verify password
        if (!Hash::check($password, $user->password)) {
            return back()->withErrors(['username' => 'Invalid username or password.'])->withInput();
        }

        // 7) Log user in (with "remember me" option)
        // Auth::login($user, $remember);

        // Prevent session fixation
        $request->session()->regenerate();

        // 8) Redirect based on role (customize roles as you use them)
        if ($user->role === 'Admin') {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->intended(route('dashboard'));
    }

    /**
     * Logout user.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Clear session and regenerate CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'You have been logged out.');
    }
}