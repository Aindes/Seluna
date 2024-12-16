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
        $faceShape = $request->input('face_shape');
        $skinTone = $request->input('skin_tone');

        // Menggunakan Eloquent untuk mengambil data berdasarkan input
        $haircut = GayaRambut::where('bentuk_muka_id', $this->getFaceShapeId($faceShape))->first();
        $hairColor = WarnaRambut::where('tone_kulit_id', $this->getSkinToneId($skinTone))->first();

        return view('rekom', compact('haircut', 'hairColor'));
    }

    private function getFaceShapeId($faceShape)
    {
        $faceShapes = [
            'oval' => 2,
            'bulat' => 1,
            'kotak' => 3,
        ];

        return $faceShapes[$faceShape] ?? null;
    }

    private function getSkinToneId($skinTone)
    {
        $skinTones = [
            'cool' => 1,
            'netral' => 2,
            'warm' => 3,
        ];

        return $skinTones[$skinTone] ?? null;
    }
}