<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Sekolah;
use App\Models\Fasilitas;
use App\Models\Roadmap;
use App\Models\Blog;
use App\Models\Blog_category;

class GuestController extends Controller
{
    public function index()
    {
        $data = Sekolah::groupBy('kecamatan')->get('kecamatan');
        $berita = Blog::limit(3)->latest('post_date')->get();
        return view('master', compact(['data', 'berita']));
    }

    public function daftarBerita()
    {
        $data = Blog::latest()->paginate(3);
        return view('daftarBerita', compact('data'));
    }

    public function detailBerita($id)
    {
        $data = Blog::join('blog_category','blog_category.id','=','blog_post.id_category')->find($id);
        return view('detail-berita', compact('data'));
    }

    public function daftarSekolah($encrypt)
    {
        $decypt = Crypt::decrypt($encrypt);
        $data = Sekolah::where('kecamatan', $decypt)->get();
        return view('daftarSekolah', compact('data'));
    }

    public function detailSekolah($id)
    {
        $data = Sekolah::findorfail($id);
        $fasilitas = Fasilitas::where('id_sekolah',$id)->first();
        // dd($fasilitas);
        return view('detailSekolah', compact(['data','fasilitas']));
    }

    public function roadmap()
    {
        $data = Roadmap::all();
        return view('roadmap', compact('data'));
    }
}
