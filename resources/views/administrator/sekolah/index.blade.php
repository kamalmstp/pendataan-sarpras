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
        <h3 class="block-title">Data Sekolah</h3>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#import"><i class="fa fa-file-import"></i> Import</button>
        </div>
        <div class="block-content block-content-full" style="overflow-x:auto;">
        <table id="sekolah" class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
            <tr align="center">
                <th class="text-center" style="width: 80px;">#</th>
                <th>NPSN</th>
                <th>Nama Sekolah</th>
                <th>Kecamatan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($dtsekolah as $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td align="center">{{ $item->npsn }}</td>
                <td>{{ $item->nama_sekolah }}</td>
                <td>{{ $item->kecamatan }}</td>
                <td align="center">{{ $item->status }}</td>
                <td align="center">
                    @if($item->id_sekolah == NULL)
                    <div class='btn-group'>
                        <form action="{{route('sekolah.user')}}" method="POST">
                        @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <input type="hidden" name="npsn" value="{{$item->npsn}}">
                            <input type="hidden" name="tingkat" value="{{$item->tingkat}}">
                            <input type="hidden" name="nama_sekolah" value="{{$item->nama_sekolah}}">
                            <button type="submit" class='btn btn-warning btn-sm'>
                            <i class='fa fa-key'></i>
                            </button>
                        </form>
                    </div>
                    @else
                    
                    
                    @endif
                    <div class='btn-group'>
                        <a href="{{ route('sekolah.edit', $item->id) }}" class='btn btn-primary btn-sm'>
                            <i class='fa fa-pencil-alt'></i>
                        </a>
                        <a href="#" class='btn btn-success btn-sm'>
                            <i class='fa fa-eye'></i>
                        </a>
                        <button type='button' class='btn btn-danger btn-sm'
                        onclick="confirmDelete('administrator/pendataan/sekolah', '{{ $item->id }}')">
                            <i class='fa fa-fw fa-trash'></i>
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
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
      <div class="modal-content">
        <form action="{{route('sekolah.import')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Import Data Sekolah</h3>
                <div class="block-options">
                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
                </div>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="file">File Import (Excel)</label>
                            <input type="file" id="file" name="file" class="form-control" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Import</button>
            </div>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection