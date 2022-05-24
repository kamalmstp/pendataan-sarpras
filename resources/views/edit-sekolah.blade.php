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
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Tambah Data Sekolah</h1>
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
        <!-- <h3 class="block-title">Tambah Data Sekolah</h3> -->
      </div>
      <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
          
          <form action="{{ url('update-sekolah',$sek->id) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah" value="{{$sek->nama_sekolah}}">
            </div><br>
            <div class="form-group">
              <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Sekolah">{{$sek->alamat}}</textarea>
            </div><br>
            <div class="form-group">
              <input type="text" id="kecamatan" name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{$sek->kecamatan}}">
            </div><br>
            <div class="form-group">
              <input type="text" id="nama_kepsek" name="nama_kepsek" class="form-control" placeholder="Nama Kepala Sekolah" value="{{$sek->nama_kepsek}}">
            </div><br>
            <div class="form-group">
              <input type="text" id="no_sekolah_kepsek" name="no_sekolah_kepsek" class="form-control" placeholder="No. Telp. Sekolah/HP Kepala Sekolah" value="{{$sek->no_sekolah_kepsek}}">
            </div><br>
            <div class="form-group">
              <input type="text" id="akredetasi" name="akredetasi" class="form-control" placeholder="Akreditasi" value="{{$sek->akredetasi}}">
            </div><br>
            <div class="form-group">
              <input type="text" id="no_akredetasi" name="no_akredetasi" class="form-control" placeholder="Nomor Akredetasi" value="{{$sek->no_akredetasi}}">
            </div><br>
            <div class="form-group">
              <input type="text" id="npsn" name="npsn" class="form-control" placeholder="NPSN" value="{{$sek->npsn}}">
            </div><br>
            <div class="form-group">
              <input type="text" id="nss" name="nss" class="form-control" placeholder="NSS" value="{{$sek->nss}}">
            </div><br>
            <div class="form-group">
              <input type="text" id="luas_tanah" name="luas_tanah" class="form-control" style="width:90%" placeholder="Luas Tanah" value="{{$sek->luas_tanah}}">
            </div><br>
            <div class="form-group">
              <input type="text" id="luas_bangunan" name="luas_bangunan" class="form-control" placeholder="Total Luas Bangunan" value="{{$sek->luas_bangunan}}">
            </div><br>
            <div class="form-group">
              <input type="text" id="status" name="status" class="form-control" placeholder="Status"  value="{{$sek->status}}">
            </div><br>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Ubah Data</button>
            </div>
          </form>
        
        </table>
      </div>
    </div>
    <!-- END Dynamic Table Full -->

  </div>
  <!-- END Page Content -->
@endsection
