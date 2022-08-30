<?php

namespace App\Imports;

use App\Models\Fasilitas;
use Maatwebsite\Excel\Concerns\ToModel;

class FasilitasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Fasilitas([
            'id_sekolah' => $row[0],
            'elearning' => $row[1],
            'wifi' => $row[2],
            'selular' => $row[3],
            'listrik' => $row[4],
            'komputer' => $row[5],
            'komputer_jml' => $row[6],
            'komputer_kondisi' => $row[7],
            'proyektor' => $row[8],
            'proyektor_jml' => $row[9],
            'proyektor_kondisi' => $row[10],
            'genset' => $row[11],
            'genset_jml' => $row[12],
            'genset_kondisi' => $row[13],
        ]);
    }
}
