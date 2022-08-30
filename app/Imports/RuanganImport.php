<?php

namespace App\Imports;

use App\Models\Ruangan;
use Maatwebsite\Excel\Concerns\ToModel;

class RuanganImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ruangan([
            'id_sekolah' => $row[0],
            'kepsek' => $row[1],
            'kepsek_luas' => $row[2],
            'kepsek_kondisi' => $row[3],
            'guru' => $row[4],
            'guru_luas' => $row[5],
            'guru_kondisi' => $row[6],
            'tu' => $row[7],
            'tu_luas' => $row[8],
            'tu_kondisi' => $row[9],
            'perpus' => $row[10],
            'perpus_luas' => $row[11],
            'perpus_kondisi' => $row[12],
            'labkom' => $row[13],
            'labkom_luas' => $row[14],
            'labkom_kondisi' => $row[15],
            'uks' => $row[16],
            'uks_luas' => $row[17],
            'uks_kondisi' => $row[18],
            'ibadah' => $row[19],
            'ibadah_luas' => $row[20],
            'ibadah_kondisi' => $row[21],
            'org' => $row[22],
            'org_luas' => $row[23],
            'org_kondisi' => $row[24],
            'gudang' => $row[25],
            'gudang_luas' => $row[26],
            'gudang_kondisi' => $row[27],
            'lap' => $row[28],
            'lap_luas' => $row[29],
            'lap_kondisi' => $row[30],
            'kantin' => $row[31],
            'kantin_luas' => $row[32],
            'kantin_kondisi' => $row[33],
        ]);
    }
}
