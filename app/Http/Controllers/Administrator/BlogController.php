<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Blog_category;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Blog_category::all();
        $blog = Blog::paginate(10);
        $total = Blog::count();
        return view('administrator.blog.index', compact('category', 'blog', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Blog_category::all();
        return view('administrator.blog.create', compact('category'));
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
            'title' => 'required',
            'blog' => 'required'
        ]);

        $slug = Str::slug($request->get('title'), '-'); 

        if ($request->hasFile('banner_image')) {
            $request->validate([
                'image' => 'mimes:jpeg,jpg,png,gif'
            ]);

            $request->banner_image->store('blog', 'public');

            $roadmap = new Blog([
                'id_category' => $request->get('id_category'),
                'title' => $request->get('title'),
                'blog' => $request->get('blog'),
                'post_by' => auth()->user()->name,
                'post_date' => date('Y-m-d H:i:s'),
                'post_slug' => $slug,
                'post_read' => 0,
                'post_tag' => $request->get('tag'),
                'banner_image' => $request->banner_image->hashName()
            ]);
            
            if($roadmap->save()) {
                Alert::success('Berhasil', 'Data Blog Berhasil Ditambahkan');
            } else {
                Alert::error('Gagal', 'Data Blog Gagal Ditambahkan');
            }

            return redirect()->route('blog.index');
        }
    }

    public function store_kategori(Request $request)
    {
        $insert = Blog_category::create($request->all());

        if($insert) {
            Alert::success('Berhasil', 'Data Kategori Berhasil Ditambahkan');
        } else {
            Alert::error('Gagal', 'Data Kategori Gagal Ditambahkan');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog_category  $blog_category
     * @return \Illuminate\Http\Response
     */
    public function show(Blog_category $blog_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog_category  $blog_category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Blog_category::all();
        $blog = Blog::where('id', $id)->firstOrFail();
        return view('administrator.blog.edit', compact('category', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog_category  $blog_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'blog' => 'required'
        ]);

        $post = Blog::find($id);
        if($request->hasFile('banner_image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $request->banner_image->store('blog', 'public');

            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog_category  $blog_category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Blog::where('id', $id)->firstOrFail();

        if($del->delete()) {
            Alert::success('Berhasil', 'Data Blog Berhasil Dihapus');
        } else {
            Alert::error('Gagal', 'Data Blog Gagal Dihapus');
        }
        return redirect()->back();
    }

    public function destroy_kategori($id)
    {
        $del = Blog_category::where('id', $id)->firstOrFail();

        if($del->delete()) {
            Alert::success('Berhasil', 'Data Kategori Berhasil Dihapus');
        } else {
            Alert::error('Gagal', 'Data Kategori Gagal Dihapus');
        }
        return redirect()->back();
    }
}
