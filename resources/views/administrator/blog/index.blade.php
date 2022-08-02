@extends('layouts.backend')

@section('content')
<div class="content content-full">
    <h2 class="content-heading">
        Data News / Blog
    </h2>
    <!-- Posts Statistics -->
    <div class="row text-center">
        <div class="col-6 col-xl-3">
            <a class="block block-rounded" href="#">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                    <div class="py-3 d-none d-md-block">
                        <i class="far fa-2x fa-file-alt text-primary"></i>
                    </div>
                    <p class="fs-4 fw-bold mb-0">
                        {{$total}}
                    </p>
                    <p class="text-muted mb-0">
                        All Posts
                    </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <!-- Active Posts -->
            <a class="block block-rounded" href="#">
            <div class="block-content block-content-full">
                <div class="py-md-3">
                <div class="py-3 d-none d-md-block">
                    <i class="far fa-2x fa-eye text-primary"></i>
                </div>
                <p class="fs-4 fw-bold mb-0">
                    140
                </p>
                <p class="text-muted mb-0">
                    Views
                </p>
                </div>
            </div>
            </a>
            <!-- END Active Posts -->
        </div>
        <div class="col-6 col-xl-3">
            <!-- Draft Posts -->
            <a class="block block-rounded" href="#">
            <div class="block-content block-content-full">
                <div class="py-md-3">
                <div class="py-3 d-none d-md-block">
                    <i class="fa fa-2x fa-pencil-alt text-primary"></i>
                </div>
                <p class="fs-4 fw-bold mb-0">
                    10
                </p>
                <p class="text-muted mb-0">
                    Category
                </p>
                </div>
            </div>
            </a>
            <!-- END Draft Posts -->
        </div>
        <div class="col-6 col-xl-3">
            <!-- New Post -->
            <a class="block block-rounded" href="{{route('blog.create')}}">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="fa fa-2x fa-plus text-primary"></i>
                        </div>
                        <p class="fs-4 fw-bold mb-0">
                            <i class="fa fa-plus text-primary me-1 d-md-none"></i> New Post
                        </p>
                        <p class="text-muted mb-0">
                            by {{auth()->user()->name}}
                        </p>
                    </div>
                </div>
            </a>
            <!-- END New Post -->
        </div>
    </div>
    <!-- Post Statistics -->

    <!-- Posts -->
    <div class="block">
        <div class="block block-rounded">
            <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="btabs-static-post-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-post" role="tab" aria-controls="btabs-static-post" aria-selected="true">Post ({{$total}})</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="btabs-static-kategori-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-kategori" role="tab" aria-controls="btabs-static-kategori" aria-selected="false">Kategori</button>
                </li>
            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane active" id="btabs-static-post" role="tabpanel" aria-labelledby="btabs-static-post-tab">
                    <!-- <form class="push" action="be_pages_blog_post_manage.html" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Posts..">
                            <span class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                            </span>
                        </div>
                    </form> -->

                    <table class="table table-striped table-borderless table-vcenter">
                        <thead>
                            <tr class="bg-body-dark">
                            <th style="width: 60px;">ID</th>
                            <th style="width: 33%;">Title</th>
                            <th class="d-none d-sm-table-cell">Author</th>
                            <th class="d-none d-xl-table-cell">Created</th>
                            <th style="width: 100px;" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blog as $row)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    <i class="fa fa-eye text-success me-1"></i>
                                    <a href="#">
                                    {{$row->title}}
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{$row->post_by}}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    {{date('l, d M Y', strtotime($row->post_date))}}
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-alt-secondary" href="{{route('blog.edit', $row->id)}}">
                                        <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-alt-secondary" onclick="confirmDelete('administrator/blog', '{{ $row->id }}')">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- <nav aria-label="Posts Navigation">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                    <span aria-hidden="true">
                                    <i class="fa fa-angle-double-left"></i>
                                    </span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                    <i class="fa fa-angle-double-right"></i>
                                    </span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </li>
                        </ul> 
                    </nav> -->
                    {{ $blog->links() }}
                    
                </div>
                <div class="tab-pane" id="btabs-static-kategori" role="tabpanel" aria-labelledby="btabs-static-kategori-tab">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add"><i class="fa fa-plus"></i> Tambah Data</button>
                    <hr>
                    <!-- <h4 class="fw-normal">Kategori Content</h4> -->
                    <table class="table table-vcenter">
                        <thead>
                            <tr class="bg-body-dark">
                                <td width="5%">#</td>
                                <td>Kategori</td>
                                <td width="10%">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" onclick="confirmDelete('administrator/blog/kategori', '{{ $row->id }}')" data-bs-toggle="tooltip" title="Hapus" data-bs-original-title="Delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
        <div class="modal-content">
            <form action="{{route('blog.store-kategori')}}" method="post">
                @csrf
                <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Tambah Kategori</h3>
                    <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div>
                            <div class="mb-4">
                                <label class="form-label" for="name">Kategori</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Kategori" required="required">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Simpan</button>
                </div>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection