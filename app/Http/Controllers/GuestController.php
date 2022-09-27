<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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

    // public function berita()
    // {
    //     $data = Blog::all();
    //     return view('master', compact('data'));
    // }

    public function detailBerita()
    {
        return view('detail-berita');
    }

    public function daftarSekolah($encrypt)
    {
        $decypt = Crypt::decrypt($encrypt);
        $data = Sekolah::where('kecamatan', $decypt)->get();
        return view('daftarSekolah', compact('data'));
    }

    public function detailSekolah($id)
    {
        // $data = Sekolah::findorfail($id);
        return view('detailSekolah');
    }

    public function roadmap()
    {
        $data = Roadmap::all();
        return view('roadmap', compact('data'));
    }
}
