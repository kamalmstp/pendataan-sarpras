<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Roadmap;

class GuestController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function daftar_sekolah()
    {
        $data = Sekolah::paginate(15);
        return view('daftar_sekolah', compact('data'));
    }

    public function roadmap()
    {
        $data = Roadmap::all();
        return view('roadmap', compact('data'));
    }
}
