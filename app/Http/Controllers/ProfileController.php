<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Menampilkan form edit profil pengguna
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    // Mengupdate profil pengguna
    public function update(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|min:8|confirmed', // Hanya validasi jika password diisi
        ]);

        $user = Auth::user();
        $user->full_name = $request->full_name;
        $user->username = $request->username;
        $user->email = $request->email;

        // Jika password diubah, hash dan update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui!');
    }

    // Menghapus profil pengguna
    public function destroy()
    {
        $user = Auth::user();
        $user->delete();

        return redirect()->route('home')->with('success', 'Profil berhasil dihapus!');
    }
}
