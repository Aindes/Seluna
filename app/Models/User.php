<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kolom primary key yang digunakan oleh model ini
     */
    protected $primaryKey = 'user_id';  // Ganti dengan user_id

    /**
     * Tentukan bahwa kolom 'user_id' adalah auto-increment
     */
    public $incrementing = true;  // Pastikan auto-increment diaktifkan

    /**
     * Tentukan tipe data dari primary key (harus integer)
     */
    protected $keyType = 'int';  // Pastikan tipe data key adalah integer

    /**
     * Atribut yang dapat diisi
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Atribut yang harus disembunyikan untuk serialisasi
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Atribut yang harus di-cast
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function bentukMuka()
    {
        return $this->belongsTo(BentukMuka::class, 'bentuk_muka_id');
    }
    public function toneKulit()
    {
        return $this->belongsTo(ToneKulit::class, 'tone_kulit_id');
    }
}
