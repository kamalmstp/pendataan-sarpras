<?php

namespace App\Http\Controllers\Primary;

use App\Http\Controllers\Controller;
use App\Models\peralatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PeralatanController extends Controller
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
        $sek = peralatan::where('id_sekolah',$id)->get();
        // dd($sek);
        return view('primary.peralatan.index', compact('sek'));
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
        $insert = peralatan::create($request->all());

        if($insert) {
            Alert::success('Berhasil', 'Data Ruang Penunjang Berhasil Ditambahkan');
        } else {
            Alert::error('Gagal', 'Data Ruang Penunjang Gagal Ditambahkan');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function show(peralatan $peralatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function edit(peralatan $peralatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = peralatan::findorfail($id);

        // dd($update);

        if($update->update($request->all())) {
            Alert::success('Berhasil', 'Data Peralatan Berhasil Dirubah');
        } else {
            Alert::error('Gagal', 'Data Peralatan Gagal Dirubah');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del = peralatan::where('id', $id)->firstOrFail();

        if($del->delete()) {
            Alert::success('Berhasil', 'Data Perealatan Berhasil Dihapus');
        } else {
            Alert::error('Gagal', 'Data Peralatan Gagal Dihapus');
        }
        return redirect()->back();
    }
}
