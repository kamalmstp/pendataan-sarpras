<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jumlah extends Model
{
    use HasFactory;

    protected $table = 'jumlah_siswa';
    protected $fillable = [
        'id_sekolah',
        'kelas',
        'guru',
        'siswa_laki',
        'siswa_perempuan'
    ];
}
