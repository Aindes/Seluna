<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GayaRambut;
use App\Models\WarnaRambut;
use App\Models\BentukMuka;  // **Penambahan**
use App\Models\ToneKulit;  // **Penambahan**

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
    
        // **Mapping face shape ke ID dari tabel BentukMuka**
        $faceShapeMapping = [
            'bulat' => 2,   // ID untuk Bob Haircut
            'oval' => 1,    // ID untuk Medium Length
            'kotak' => 3,   // ID untuk Layers Berponi
        ];

        // **Mapping tone kulit ke ID dari tabel ToneKulit**
        $skinToneMapping = [
            'cool' => 1,    // ID untuk Bright Colour
            'netral' => 2,  // ID untuk Basic Colour
            'warm' => 3,    // ID untuk Dark Colour
        ];
    
        // **Ambil data dari tabel BentukMuka dan WarnaRambut berdasarkan input**
        $faceShapeModel = BentukMuka::where('id', $faceShapeMapping[$faceShape] ?? null)->first();
        $haircut = GayaRambut::where('bentuk_muka_id', $faceShapeModel->id ?? null)->first(); // Sesuaikan dengan BentukMuka ID
        $hairColor = WarnaRambut::where('tone_kulit_id', $skinToneMapping[$skinTone] ?? null)->first(); // Sesuaikan dengan ToneKulit ID
    
        // Validasi jika data tidak ditemukan
        if (!$haircut || !$hairColor) {
            return back()->with('error', 'Rekomendasi tidak ditemukan. Coba lagi.');
        }
    
        // Mengirimkan data gaya rambut dan warna rambut ke view
        return view('rekom', compact('haircut', 'hairColor'));
    }
}
