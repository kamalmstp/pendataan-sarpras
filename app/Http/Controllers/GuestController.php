<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class GuestController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function daftar_sekolah()
    {
        # code...
    }
}
