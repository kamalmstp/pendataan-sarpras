<?php

namespace App\Http\Controllers\Junior;

use App\Http\Controllers\Controller;
use App\Models\Jumlah;
use App\Models\Sekolah;
use App\Models\Informasi;
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
        $id = auth()->user()->id_sekolah;
        $school = Sekolah::findorfail($id);
        $info = Informasi::where('id_sekolah',$id)->first();

        return view('junior.jumlah.index', compact('school', 'info'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sek = Sekolah::findorfail($id);
        $sek->update([
            'jumlah_rombel' => $request->jumlah_rombel,
            'jumlah_siswa' => $request->jumlah_siswa,
            'jumlah_guru' => $request->jumlah_guru,
            'jumlah_guru_tik' => $request->jumlah_guru_tik
        ]);
        $info = Informasi::where('id_sekolah',$id)->first();
        $up = $info->update([
            'siswa_internet' => $request->siswa_internet,
            'siswa_zoom' => $request->siswa_zoom,
            'guru_media_belajar' => $request->guru_media_belajar,
            'guru_zoom' => $request->guru_zoom
        ]);

        if($up) {
            Alert::success('Berhasil', 'Data Informasi Sekolah Berhasil Diperbarui');
        } else {
            Alert::error('Gagal', 'Data Sekolah Gagal Diperbarui');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
