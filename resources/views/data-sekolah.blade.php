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
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">DataTables Example</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Examples</li>
            <li class="breadcrumb-item active" aria-current="page">Plugin</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Dynamic Table <small>Full</small></h3>
        <a href="/tambah-sekolah" class="btn btn-primary">Tambah Data <i class="fa-solid fa-plus"></i></a>
      </div>
      <div class="block-content block-content-full" style="overflow-x:auto;">
        <!-- <a href="/tambah-sekolah" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a> -->
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
          <thead>
            <tr>
              <th class="text-center" style="width: 80px;">#</th>
              <th>Nama Sekolah</th>
              <th>Alamat</th>
              <th>Kecamatan</th>
              <th>Nama Kepala Sekolah</th>
              <th>No. Telp. Sekolah/HP Kepsek</th>
              <th>Akredetasi Sekolah</th>
              <th>Nomor Akredetasi</th>
              <th>NPNS</th>
              <th>NSS</th>
              <th>Luas Tanah</th>
              <th>Total Luas Bangunan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dtsekolah as $item)
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td>{{ $item->nama_sekolah }}</td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->kecamatan }}</td>
              <td>{{ $item->nama_kepsek }}</td>
              <td>{{ $item->no_sekolah_kepsek }}</td>
              <td>{{ $item->akredetasi }}</td>
              <td>{{ $item->no_akredetasi }}</td>
              <td>{{ $item->npsn }}</td>
              <td>{{ $item->nss }}</td>
              <td>{{ $item->luas_tanah }}</td>
              <td>{{ $item->luas_bangunan }}</td>
              <td>{{ $item->status }}</td>
              <td>
                <a href="{{ url('edit-sekolah',$item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                |
                <a href="{{ url('delete-sekolah',$item->id) }}" onclick="return confirm('YAKIN MAU HAPUS?')"><i class="fa-solid fa-trash-can" style="color:red"></i></a>
                <!-- <a href="{{ url('delete-sekolah',$item->id) }}"><i class="fa-solid fa-trash-can" style="color:red"></i></a> -->
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!-- END Dynamic Table Full -->

  </div>
  <!-- END Page Content -->
@endsection
