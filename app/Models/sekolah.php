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
        'tingkat',
        'nama_sekolah',
        'alamat',
        'kelurahan',
        'kecamatan',
        'nama_kepsek',
        'no_sekolah_kepsek',
        'akredetasi',
        'no_akredetasi',
        'npsn',
        'nss',
        'luas_tanah',
        'luas_bangunan',
        'status_tanah',
        'jumlah_rombel',
        'status'
    ];
}
