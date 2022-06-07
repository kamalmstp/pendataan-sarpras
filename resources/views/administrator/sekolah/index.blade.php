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
        <!-- <a href="{{route('sekolah.create')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data</a> -->
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
