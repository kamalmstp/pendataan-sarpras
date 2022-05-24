<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruang_kelas extends Model
{
    use HasFactory;
    protected $table = "ruang_kelas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'id_sekolah',
        'jenis_rungkel',
        'panjang_rungkel',
        'lebar_rungkel',
        'kondisi_rungkel',
        'tingkat_rusak',
        'rehab_akhir',
        'meja_baik',
        'meja_rusak',
        'kursi_baik',
        'kursi_rusak'
    ];
}
