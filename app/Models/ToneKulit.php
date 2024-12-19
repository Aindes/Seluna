<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToneKulit extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan
    protected $table = 'tone_kulit';

    // Tentukan kolom yang bisa diisi
    protected $fillable = ['nama'];
}
