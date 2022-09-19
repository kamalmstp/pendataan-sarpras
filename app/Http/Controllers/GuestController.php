<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Roadmap;
use App\Models\Blog;

class GuestController extends Controller
{
    public function index()
    {
        $data = Sekolah::groupBy('kecamatan')->get('kecamatan');
        $berita = Blog::all();
        // dd($data);
        return view('master', compact(['data', 'berita']));
    }

    public function berita()
    {
        $data = Blog::all();
        return view('master', compact('data'));
    }

    public function detailBerita()
    {
        return view('detail-berita');
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
