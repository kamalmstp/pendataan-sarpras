<?php

namespace App\Http\Controllers\Primary;

use App\Http\Controllers\Controller;
use App\Models\ruang_kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
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
        $sek = ruang_kelas::where('id_sekolah',$id)->get();
        // dd($sek);
        return view('primary.kelas.index', compact('sek'));
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
        $insert = ruang_kelas::create($request->all());

        if($insert) {
            Alert::success('Berhasil', 'Data Ruang Kelas Berhasil Ditambahkan');
        } else {
            Alert::error('Gagal', 'Data Ruang Kelas Gagal Ditambahkan');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruang_kelas  $ruang_kelas
     * @return \Illuminate\Http\Response
     */
    public function show(ruang_kelas $ruang_kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruang_kelas  $ruang_kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(ruang_kelas $ruang_kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ruang_kelas  $ruang_kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = ruang_kelas::findorfail($id);

        if($update->update($request->all())) {
            Alert::success('Berhasil', 'Data Ruang Kelas Berhasil Dirubah');
        } else {
            Alert::error('Gagal', 'Data Ruang Kelas Gagal Dirubah');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruang_kelas  $ruang_kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del = ruang_kelas::where('id', $id)->firstOrFail();

        if($del->delete()) {
            Alert::success('Berhasil', 'Data Ruang Kelas Berhasil Dihapus');
        } else {
            Alert::error('Gagal', 'Data Ruang Kelas Gagal Dihapus');
        }
        return redirect()->back();
    }
}
