<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\BentukMuka;
use App\Models\ToneKulit;

class AuthController extends Controller
{
    // Fungsi untuk login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Cek apakah login sebagai admin atau user biasa
        $admin = Admin::where('email', $request->email)->first();
        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            return redirect()->route('admin.dashboard');
        }

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('fitur');
        }

        return back()->withErrors(['email' => 'Login gagal, coba lagi']);
    }

    // Fungsi untuk register
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('fitur');
    }

    // Fungsi untuk profile
    public function profile()
    {
        $user = Auth::user();
        $bentukMuka = BentukMuka::all();
        $toneKulit = ToneKulit::all();
        return view('profil', compact('user', 'bentukMuka', 'toneKulit'));
    }

    // Fungsi untuk logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
