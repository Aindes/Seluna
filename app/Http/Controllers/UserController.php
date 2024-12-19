<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Menampilkan halaman profil
    public function profile()
    {
        $user = Auth::user();
        // Pastikan Anda memiliki data yang dibutuhkan, seperti bentuk muka dan tone kulit
        $bentukMuka = \App\Models\BentukMuka::all(); // Sesuaikan nama model
        $toneKulit = \App\Models\ToneKulit::all();   // Sesuaikan nama model

        return view('profil', compact('user', 'bentukMuka', 'toneKulit'));
    }

    // Memperbarui profil pengguna
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        // Validasi input
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:6',  // Jika password diubah
        ]);

        // Update data pengguna
        $user->full_name = $validated['full_name'];
        $user->email = $validated['email'];
        $user->username = $validated['username'];

        // Jika password diubah, update password
        if ($validated['password']) {
            $user->password = bcrypt($validated['password']);
        }

        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profile updated successfully.');
    }

    // Menghapus profil pengguna
    public function deleteProfile()
    {
        $user = Auth::user();
        
        // Hapus profil pengguna
        $user->delete();

        // Logout pengguna setelah menghapus profil
        Auth::logout();

        return redirect('/')->with('success', 'Your profile has been deleted.');
    }
}
