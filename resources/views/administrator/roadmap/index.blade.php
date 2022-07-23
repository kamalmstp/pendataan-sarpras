@extends('layouts.backend')

@section('css_before')
  <!-- Page JS Plugins CSS -->
  <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
@endsection

@section('js_after')
  <!-- jQuery (required for DataTables plugin) -->
  <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

  <!-- Page JS Plugins -->
  <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

  <!-- Page JS Code -->
  <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Roadmap</h3>
            <!-- <a href="{{route('roadmap.create')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data</a> -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
        <div class="block-content block-content-full" style="overflow-x:auto;">
        <table class="table table-bordered table-vcenter">
            <thead>
                <tr class="table-dark">
                    <th class="text-center" style="width: 80px;">#</th>
                    <th>Deskripsi</th>
                    <th>Image Roadmap</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roadmap as $row)
                <tr>
                    <th class="text-center" scope="row" width="3%">{{ $loop->iteration }}</th>
                    <td class="fw-semibold" width="30%">{{$row->deskripsi}}</td>
                    <td align="text-center" width="20%">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('storage/roadmap/'.$row->roadmap)}}">
                                <img class="img-fluid" src="{{asset('storage/roadmap/'.$row->roadmap)}}" alt="">
                            </a>
                    </td>
                    <td class="text-center" width="10%">
                        <div class="btn-group">
                            <!-- <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                            <i class="fa fa-pencil-alt"></i>
                            </button> -->
                            <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" onclick="confirmDelete('administrator/roadmap', '{{ $row->id }}')" data-bs-toggle="tooltip" title="Hapus" data-bs-original-title="Delete">
                            <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection

@section('modal')
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
        <div class="modal-content">
            <form action="{{route('roadmap.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Tambah Data Roadmap</h3>
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
                                <label class="form-label" for="deskripsi">Deskripsi</label>
                                <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi Roadmap" required="required">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="file">Image Roadmap</label>
                                <input type="file" id="file" name="file" class="form-control" required="required">
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

    @foreach($roadmap as $road)
    <div class="modal fade" id="view{{$road->id}}" tabindex="-1" role="dialog" aria-labelledby="view" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">View Roadmap</h3>
                        <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                        </div>
                    </div>
                    <div class="block-content">
                        
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection