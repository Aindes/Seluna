<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GayaRambut extends Model
{
    protected $table = 'gaya_rambut';  // Pastikan nama tabel sesuai

    // **Menambahkan relasi ke BentukMuka**
    public function bentukMuka()
    {
        return $this->belongsTo(BentukMuka::class, 'bentuk_muka_id');
    }
}
