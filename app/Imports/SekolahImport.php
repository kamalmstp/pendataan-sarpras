<?php

namespace App\Imports;

use App\Models\Sekolah;
use Maatwebsite\Excel\Concerns\ToModel;

class SekolahImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sekolah([
            'tingkat' => $row[0],
            'status' => $row[1],
            'nama_sekolah' => $row[2],
            'alamat' => $row[3],
            'kelurahan' => $row[4],
            'kecamatan' => $row[5],
            'nama_kepsek' => $row[6],
            'akredetasi' => $row[7],
            'npsn' => $row[8],
            'luas_tanah' => $row[9],
            'kurikulum' => $row[10],
            'penyelenggaraan' => $row[11],
            'latitude' => $row[12],
            'longitude' => $row[13],
            'jumlah_guru' => $row[14],
            'jumlah_guru_tik' => $row[15],
            'jumlah_rombel' => $row[16],
            'jumlah_siswa' => $row[17],
        ]);
    }
}
