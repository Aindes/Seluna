<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarnaRambut extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi (misalnya, plural tabel)
    protected $table = 'warna_rambut';

    // Tentukan relasi dengan ToneKulit
    public function toneKulit()
    {
        return $this->belongsTo(ToneKulit::class, 'tone_kulit_id');
    }
}
