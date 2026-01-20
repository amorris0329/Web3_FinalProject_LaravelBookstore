<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login() {
        return view('login.index');
    }

    // admin@elderpages.com
    // norapage0804!EMP!
    public function empLogin(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('login.employee');
        }
        else {
            throw ValidationException::withMessages([
                'credentials' => 'Error: Incorrect Credentials!'
            ]);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function register(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->route('login.employee');
    }

    public function remove(User $employee) {
        if ($employee->email === 'admin@elderpages.com') {
            return redirect()->route('login.employee')->withErrors(['error' => 'Cannot delete admin user.']);
        }
        $employee->delete();

        return redirect()->route('login.employee');
    }

    public function resetPassword(User $employee, Request $request) {
        $validated = $request->validate([
            'password' => 'required|string|min:8|confirmed'
        ]);

        // Set & hash new password
        $employee->password = Hash::make($validated['password']);
        $employee->save();

        return redirect()->route('login.employee')->with('success', 'Password reset!');
    }
}
