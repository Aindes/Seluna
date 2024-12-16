<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
{
    $request->validate([
        'username' => 'required|unique:users', // Tambahkan validasi untuk username
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed|min:8',
    ]);

    // Proses registrasi
    User::create([
        'username' => $request->username, // Pastikan username ada di sini
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Redirect ke halaman login atau lainnya
    return redirect()->route('login');
}

}
