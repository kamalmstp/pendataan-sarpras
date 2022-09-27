<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruang_kelas;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->level === User::ADMIN) {
            return view('administrator.dashboard');
        }

        if (auth()->user()->level === User::SD) {
            $id = auth()->user()->id_sekolah;
            $kelas = ruang_kelas::where('id', $id)->count();
            return view('primary.dashboard', compact('kelas'));
        }
        if (auth()->user()->level === User::SMP) {
            $id = auth()->user()->id_sekolah;
            $kelas = ruang_kelas::where('id', $id)->count();
            return view('junior.dashboard', compact('kelas'));
        }
    }
}
