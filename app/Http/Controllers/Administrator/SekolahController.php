<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
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
        //
        $dtsekolah = sekolah::leftJoin('users', 'users.id_sekolah', '=', 'sekolah.id')->select('sekolah.*', 'users.id_sekolah')->get();
        // $dtsekolah = sekolah::all();
        // dd($dtsekolah);
        return view('administrator.sekolah.index', compact('dtsekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administrator.sekolah.create');
    }

    public function create_user(Request $request)
    {
        $id = $request->get('id');
        $npsn = $request->get('npsn');
        $tingkat = $request->get('tingkat');
        $nama = $request->get('nama_sekolah');
        // dd($id);
        $create = [
            'name' => $nama,
            'username' => $npsn,
            'password' => Hash::make($npsn),
            'id_sekolah' => $id,
            'level' => $tingkat
        ];

        $insert = User::create($create);

        if($insert) {
            Alert::success('Berhasil', 'Data User Berhasil Ditambahkan');
        } else {
            Alert::error('Gagal', 'Data User Gagal Ditambahkan');
        }

        return redirect()->route('sekolah.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_sekolah' => 'required',
            'npsn' => 'required',
            'status' => 'required'
        ]);

        $data = [
            'nama_sekolah' => $request->get('nama_sekolah'),
            'alamat' => $request->get('alamat'),
            'kecamatan' => $request->get('kecamatan'),
            'nama_kepsek' => $request->get('nama_kepsek'),
            'no_sekolah_kepsek' => $request->get('no_sekolah_kepsek'),
            'akredetasi' => $request->get('akredetasi'),
            'no_akredetasi' => $request->get('no_akredetasi'),
            'npsn' => $request->get('npsn'),
            'nss' => $request->get('nss'),
            'luas_tanah' => $request->get('luas_tanah'),
            'luas_bangunan' => $request->get('luas_bangunan'),
            'jumlah_rombel' => $request->get('jumlah_rombel'),
            'status' => $request->get('status'),
        ];
        $insert = sekolah::create($data);

        if($insert) {
            $message = setFlashMessage('success', 'insert', 'Data Sekolah');
        } else {
            $message = setFlashMessage('error', 'insert', 'Data Sekolah');
        }

        return redirect()->route('sekolah.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekolah $sekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolah $sekolah)
    {
        //
    }
}
