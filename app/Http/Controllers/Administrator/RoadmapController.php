<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Roadmap;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RoadmapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roadmap = Roadmap::all();
        return view('administrator.roadmap.index', compact('roadmap'));
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
            'deskripsi' => 'required'
        ]);

        if ($request->hasFile('file')) {
            $request->validate([
                'image' => 'mimes:jpeg,jpg,png,gif'
            ]);

            $request->file->store('roadmap', 'public');

            $roadmap = new Roadmap([
                'deskripsi' => $request->get('deskripsi'),
                'roadmap' => $request->file->hashName()
            ]);
            
            if($roadmap->save()) {
                Alert::success('Berhasil', 'Data Roadmap Berhasil Ditambahkan');
            } else {
                Alert::error('Gagal', 'Data Roadmap Gagal Ditambahkan');
            }

            return redirect()->route('roadmap.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function show(Roadmap $roadmap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function edit(Roadmap $roadmap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roadmap $roadmap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Roadmap::where('id', $id)->firstOrFail();

        if($del->delete()) {
            Alert::success('Berhasil', 'Data Roadmap Berhasil Dihapus');
        } else {
            Alert::error('Gagal', 'Data Roadmap Gagal Dihapus');
        }
        return redirect()->back();
    }
}
