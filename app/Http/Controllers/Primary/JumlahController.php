<?php

namespace App\Http\Controllers\Primary;

use App\Http\Controllers\Controller;
use App\Models\Jumlah;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JumlahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = auth()->user()->id_sekolah;
        $sek = Jumlah::where('id_sekolah',$id)->get();
        $kls1 = Jumlah::where('id_sekolah',$id)->where('kelas', 'Kelas 1')->first();
        $kls2 = Jumlah::where('id_sekolah',$id)->where('kelas', 'Kelas 2')->first();
        $kls3 = Jumlah::where('id_sekolah',$id)->where('kelas', 'Kelas 3')->first();
        $kls4 = Jumlah::where('id_sekolah',$id)->where('kelas', 'Kelas 4')->first();
        $kls5 = Jumlah::where('id_sekolah',$id)->where('kelas', 'Kelas 5')->first();
        $kls6 = Jumlah::where('id_sekolah',$id)->where('kelas', 'Kelas 6')->first();
        // dd($kls2);
        return view('primary.jumlah.index', compact('sek', 'kls1', 'kls2', 'kls3', 'kls4', 'kls5', 'kls6'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumlah  $jumlah
     * @return \Illuminate\Http\Response
     */
    public function show(Jumlah $jumlah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumlah  $jumlah
     * @return \Illuminate\Http\Response
     */
    public function edit(Jumlah $jumlah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumlah  $jumlah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jumlah $jumlah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumlah  $jumlah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jumlah $jumlah)
    {
        //
        
    }
}
