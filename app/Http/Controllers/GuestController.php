<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Roadmap;

class GuestController extends Controller
{
    public function index()
    {
        $data = Sekolah::groupBy('kecamatan')->get('kecamatan');
        // dd($data);
        return view('master', compact('data'));
    }

    public function daftarSekolah()
    {
        // $data = Sekolah::paginate(15);
        return view('daftarSekolah');
    }

    public function detail_sekolah()
    {
        $data = Sekolah::paginate(15);
        return view('detail_sekolah', compact('data'));
    }

    public function roadmap()
    {
        $data = Roadmap::all();
        return view('roadmap', compact('data'));
    }
}
