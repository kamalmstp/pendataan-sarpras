<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\sekolah;
use App\Models\ruang_kelas;
use App\Models\ruang_penunjang;
use RealRashid\SweetAlert\Facades\Alert;


class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtsekolah = sekolah::all();
        return view('data-sekolah', compact('dtsekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-sekolah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        
        $data = $request->all();

        $sekolah = new sekolah;
            $sekolah -> nama_sekolah = $data ['nama_sekolah'];
            $sekolah -> alamat = $data ['alamat'];
            $sekolah -> kecamatan = $data ['kecamatan'];
            $sekolah -> nama_kepsek = $data ['nama_kepsek'];
            $sekolah -> no_sekolah_kepsek = $data ['no_sekolah_kepsek'];
            $sekolah -> akredetasi = $data ['akredetasi'];
            $sekolah -> no_akredetasi = $data ['no_akredetasi'];
            $sekolah -> npsn = $data ['npsn'];
            $sekolah -> nss = $data ['nss'];
            $sekolah -> luas_tanah = $data ['luas_tanah'];
            $sekolah -> luas_bangunan = $data ['luas_bangunan'];
            $sekolah -> jumlah_rombel = $data ['jumlah_rombel'];
            $sekolah -> status_rombel = $data ['status_rombel'];
        $sekolah -> save();

        $ruang_kelas = new ruang_kelas;
            $ruang_kelas -> id_sekolah	 = $sekolah->id;
            $ruang_kelas -> jenis_rungkel = $data['jenis_rungkel'];
            $ruang_kelas -> panjang_rungkel = $data['panjang_rungkel'];
            $ruang_kelas -> lebar_rungkel = $data['lebar_rungkel'];
            $ruang_kelas -> kondisi_rungkel = $data['kondisi_rungkel'];
            $ruang_kelas -> tingkat_rusak = $data['tingkat_rusak'];
            $ruang_kelas -> rehab_akhir = $data['rehab_akhir'];
            $ruang_kelas -> meja_baik = $data['meja_baik'];
            $ruang_kelas -> meja_rusak = $data['meja_rusak'];
            $ruang_kelas -> kursi_baik = $data['kursi_baik'];
            $ruang_kelas -> kursi_rusak = $data['kursi_rusak'];
        $ruang_kelas -> save();

        $ruang_penunjang = new ruang_penunjang;
            $ruang_penunjang -> id_sekolah = $sekolah->id;
            $ruang_penunjang -> jenis_ruang = $data['jenis_ruang'];
            $ruang_penunjang -> keterangan = $data['keterangan'];
            $ruang_penunjang -> panjang_ruang = $data['panjang_ruang'];
            $ruang_penunjang -> lebar_ruang = $data['lebar_ruang'];
            $ruang_penunjang -> kondisi_ruang = $data['kondisi_ruang'];
        $ruang_penunjang -> save();
        
        return redirect('data-sekolah')->with('toast_success', 'Data Berhasil Ditambahkan!');
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
        $sek = sekolah::findorfail($id);
        return view('edit-sekolah', compact('sek'));
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
        $sek = sekolah::findorfail($id);
        $sek->update($request->all());

        return redirect('data-sekolah')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sek = sekolah::findorfail($id);
        
        // Alert::question('Question Title', 'Question Message');
        $sek->delete();

        return back()->with('success', 'Data Berhasil Dihapus');
        // return back();
    }
}
