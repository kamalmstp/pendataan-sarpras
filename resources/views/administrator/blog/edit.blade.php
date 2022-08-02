@extends('layouts.backend')

@section('js_after')
    <script src="{{asset('js/plugins/ckeditor/ckeditor.js')}}"></script>
    <script>
        Dashmix.onLoad(function () {
            CKEDITOR.config.height = '450px';
            Dashmix.helpers(['js-ckeditor']);
        });

        banner_image.onchange = evt => {
            const [file] = banner_image.files
            if (file) {
                image_prev.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection

@section('content')
<div class="content content-full">
    <form action="{{route('blog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="block">
            <div class="block-header block-header-default">
            <a class="btn btn-alt-secondary" href="{{route('blog.index')}}">
                <i class="fa fa-arrow-left me-1"></i> Manage Posts
            </a>
            <div class="block-options">
                <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" value="" id="dm-post-add-active" name="dm-post-add-active">
                <label class="form-check-label" for="dm-post-add-active">Set active</label>
                </div>
            </div>
            </div>
            <div class="block-content">
            <div class="row justify-content-center push">
                <div class="col-md-10">
                    <div class="mb-4">
                        <label class="form-label" for="title">Judul</label>
                        <input type="text" class="form-control" id="title" value="{{$blog->title}}" name="title" placeholder="Masukkan Judul" required="required">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="kategori">Kategori</label>
                        <select name="id_category" id="kategori" class="form-control">
                            @foreach($category as $row)
                                <option value="{{$row->id}}" @if($blog->id_category == $row->id){ echo "selected"} @endif>{{$row->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-6">
                            <label class="form-label" for="dm-post-add-image">Banner Image</label>
                            <input class="form-control" name="banner_image" type="file" id="banner_image">
                            <div class="mt-2">
                                <img class="img-fluid" id="image_prev" src="{{asset('storage/blog/'.$blog->banner_image)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Isi Post</label>
                        <textarea id="js-ckeditor" name="blog">{{$blog->blog}}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="tag">Tags <span class="text-info">gunakan koma (,) untuk tag lebih dari satu</span></label>
                        <input type="text" class="form-control" value="{{$blog->post_tag}}" id="tag" name="tag" placeholder="Tag">
                    </div>
                </div>
            </div>
            </div>
            <div class="block-content bg-body-light text-center">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                    <button type="submit" class="btn btn-alt-primary">
                        <i class="fa fa-fw fa-check opacity-50 me-1"></i> Update Post
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection