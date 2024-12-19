<?php

// app/Http/Controllers/RecommendationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GayaRambut;
use App\Models\WarnaRambut;

class RecommendationController extends Controller
{
    public function showFeaturePage(Request $request)
    {
        // Mengambil pilihan dari request jika ada
        $selectedFaceShape = $request->input('face_shape');
        $selectedSkinTone = $request->input('skin_tone');

        // Kirimkan data ke view
        return view('fitur', compact('selectedFaceShape', 'selectedSkinTone'));
    }

    public function showRecommendations(Request $request)
    {
        $faceShape = $request->input('face_shape'); // Input bentuk wajah
        $skinTone = $request->input('skin_tone');   // Input tone warna kulit
    
        // Mapping face shape ke ID gaya rambut
    $faceShapeMapping = [
        'bulat' => 2,   // ID untuk Bob Haircut
        'oval' => 1,    // ID untuk Medium Length
        'kotak' => 3,   // ID untuk Layers Berponi
    ];

    // Mapping tone kulit ke ID warna rambut
    $skinToneMapping = [
        'cool' => 1,    // ID untuk Bright Colour
        'netral' => 2,  // ID untuk Basic Colour
        'warm' => 3,    // ID untuk Dark Colour
    ];
    
        // Ambil data dari database
        $haircut = GayaRambut::where('nama', $faceShapeMapping[$faceShape] ?? null)->first();
        $hairColor = WarnaRambut::where('nama', $skinToneMapping[$skinTone] ?? null)->first();
    
        // Debugging
    
        // Validasi jika data tidak ditemukan
        if (!$haircut || !$hairColor) {
            return back()->with('error', 'Rekomendasi tidak ditemukan. Coba lagi.');
        }
    
        return view('rekom', compact('haircut', 'hairColor'));
    }
}