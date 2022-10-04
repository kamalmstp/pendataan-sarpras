<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sekolah = Sekolah::all();
        return view('administrator.galeri.create', compact('sekolah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $data = $req->validate([
            'id_sekolah'=>'required'
        ]);
       
        if($req->has('file')){
            foreach($req->file('file')as $image){
                $imageName = $data['id_sekolah'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                //$image->move(public_path('galeri'),$imageName);
                $image->storeAs('galeri' , $imageName , 'public');
                Galeri::create([
                    'id_sekolah'=>$req->get('id_sekolah'),
                    'file'=>$imageName
                ]);
            }
        }
        return response()->json(['success'=>'Successfully uploaded.']);
        // return back()->with('success','Added');
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
