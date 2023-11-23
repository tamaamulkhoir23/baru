<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect('login')->with('success', 'Registration successful! Please log in.');
    }

    public function showProfile()
    {
        // Mengambil objek pengguna yang saat ini diotentikasi
        $user = Auth::user();

        // Mengirimkan objek pengguna ke tampilan
        return view('sidebar', ['user' => $user]);
    }
}
