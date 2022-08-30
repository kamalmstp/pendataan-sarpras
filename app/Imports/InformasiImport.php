<?php

namespace App\Imports;

use App\Models\Informasi;
use Maatwebsite\Excel\Concerns\ToModel;

class InformasiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Informasi([
            'id_sekolah' => $row[0],
            'website_sekolah' => $row[1],
            'manajemen_sekolah' => $row[2],
            'e_raport' => $row[3],
            'sistem_utbk' => $row[4],
            'sistem_pegawai' => $row[5],
            'sistem_keuangan' => $row[6],
            'sistem_aset' => $row[7],
            'sistem_perpus' => $row[8],
            'guru_media_belajar' => $row[9],
            'guru_zoom' => $row[10],
            'siswa_internet' => $row[11],
            'siswa_zoom' => $row[12],
        ]);
    }
}
