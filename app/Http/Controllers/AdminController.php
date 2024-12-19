<?php

namespace App\Http\Controllers;

use App\Models\ToneKulit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan data ToneKulit
    public function index()
    {
        $toneKulit = ToneKulit::all();
        return view('admin.index', compact('toneKulit'));
    }

    // Menampilkan form untuk tambah data
    public function create()
    {
        return view('admin.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        ToneKulit::create($request->all());
        return redirect()->route('admin.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan form untuk edit data
    public function edit($id)
    {
        $toneKulit = ToneKulit::findOrFail($id);
        return view('admin.edit', compact('toneKulit'));
    }

    // Memperbarui data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $toneKulit = ToneKulit::findOrFail($id);
        $toneKulit->update($request->all());
        return redirect()->route('admin.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus data
    public function destroy($id)
    {
        $toneKulit = ToneKulit::findOrFail($id);
        $toneKulit->delete();
        return redirect()->route('admin.index')->with('success', 'Data berhasil dihapus!');
    }
}

