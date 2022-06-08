<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peralatan extends Model
{
    use HasFactory;

    protected $table = "peralatan";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_peralatan',
        'jumlah',
        'tahun_peroleh',
        'sumber_dana',
        'id_sekolah',
        'kondisi_alat'
    ];
    public $timestamps = false;
}
