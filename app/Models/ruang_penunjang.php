<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruang_penunjang extends Model
{
    use HasFactory;
    protected $table = "ruang_penunjangs";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'id_sekolah',
        'jenis_ruang',
        'keterangan',
        'panjang_ruang',
        'lebar_ruang',
        'kondisi_ruang'
    ];
}
