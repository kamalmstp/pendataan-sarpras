<?php

namespace App\Http\Controllers\Primary;

use App\Http\Controllers\Controller;
use App\Models\perpus;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PerpusController extends Controller
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
        $sek = perpus::where('id_sekolah',$id)->get();
        // dd($sek);
        return view('primary.perpus.index', compact('sek'));
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
     * @param  \App\Models\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function show(perpus $perpus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function edit(perpus $perpus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perpus $perpus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function destroy(perpus $perpus)
    {
        //
    }
}
