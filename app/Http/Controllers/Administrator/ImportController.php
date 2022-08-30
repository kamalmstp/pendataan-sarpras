<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Imports\InformasiImport;
use App\Imports\FasilitasImport;
use App\Imports\RuanganImport;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.import.index');
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
        $this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		$file = $request->file('file');
 
		$nama_file = rand().$file->getClientOriginalName();
 
		$file->move('file_import',$nama_file);
 
		Excel::import(new InformasiImport, public_path('/file_import/'.$nama_file));
 
		Alert::success('Berhasil', 'Data Sekolah Berhasil Ditambahkan');
 
		return redirect()->route('import.index');
    }

    public function fasilitas(Request $request)
    {
        $this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		$file = $request->file('file');
 
		$nama_file = rand().$file->getClientOriginalName();
 
		$file->move('file_import',$nama_file);
 
		Excel::import(new FasilitasImport, public_path('/file_import/'.$nama_file));
 
		Alert::success('Berhasil', 'Data Fasilitas Sekolah Berhasil Ditambahkan');
 
		return redirect()->route('import.index');
    }

    public function ruangan(Request $request)
    {
        $this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		$file = $request->file('file');
 
		$nama_file = rand().$file->getClientOriginalName();
 
		$file->move('file_import',$nama_file);
 
		Excel::import(new RuanganImport, public_path('/file_import/'.$nama_file));
 
		Alert::success('Berhasil', 'Data Ruangan Sekolah Berhasil Ditambahkan');
 
		return redirect()->route('import.index');
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
        //
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
