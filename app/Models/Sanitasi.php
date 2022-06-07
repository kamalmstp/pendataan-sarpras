<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanitasi extends Model
{
    use HasFactory;

    protected $table = 'sanitasi';
    protected $fillable = [
        'jenis_ruang',
        'baik',
        'rusak_sedang',
        'rusak_berat',
        'panjang',
        'lebar',
        'id_sekolah'
    ];
}
