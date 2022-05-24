<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;
    protected $table = "sekolah";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama_sekolah',
        'alamat',
        'kecamatan',
        'nama_kepsek',
        'no_sekolah_kepsek',
        'akredetasi',
        'no_akredetasi',
        'npsn',
        'nss',
        'luas_tanah',
        'luas_bangunan',
        'jumlah_rombel',
        'status_rombel'
    ];
}
