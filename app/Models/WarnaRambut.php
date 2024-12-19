<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarnaRambut extends Model
{
    use HasFactory;

    protected $table = 'warna_rambut';

    // **Menambahkan relasi ke ToneKulit**
    public function toneKulit()
    {
        return $this->belongsTo(ToneKulit::class, 'tone_kulit_id');
    }
}
