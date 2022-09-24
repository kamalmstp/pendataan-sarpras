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
@endsection

@section('content')
<div class="content">
    <h2 class="content-heading">
       Informasi Siswa & Guru
    </h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
        <h3 class="block-title">Silakan Lengkapi Informasi Berikut</h3>
        </div>
        <div class="block-content block-content-full" style="overflow-x:auto;">
            <form action="{{route('jumlah.update', $school->id)}}" method="post">
            @csrf
            @method('PUT')
                <h2 class="content-heading">Jumlah Siswa & Guru</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="jumlah_rombel">Jumlah Rombel</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="jumlah_rombel" value="{{$school->jumlah_rombel}}" name="jumlah_rombel" placeholder="Jumlah Rombel">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="jumlah_siswa">Jumlah Siswa</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="jumlah_siswa" value="{{$school->jumlah_siswa}}" name="jumlah_siswa" placeholder="Jumlah Siswa">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="jumlah_guru">Jumlah Guru</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="jumlah_guru" value="{{$school->jumlah_guru}}" name="jumlah_guru" placeholder="Jumlah Guru">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-4 col-form-label" for="jumlah_guru_tik">Jumlah Guru TIK</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="jumlah_guru_tik" value="{{$school->jumlah_guru_tik}}" name="jumlah_guru_tik" placeholder="Jumlah Guru TIK">
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="content-heading">Informasi Siswa & Guru</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-4">
                            <label class="form-label">Siswa dalam Menggunakan Teknologi Google atau Browser</label>
                            <div class="space-x-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="siswa_internet" name="siswa_internet" value="K" {{ $info->siswa_internet == 'K' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="siswa_internet">Kompeten</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="siswa_internet" name="siswa_internet" value="BK" {{ $info->siswa_internet == 'BK' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="siswa_internet">Belum Kompeten</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="form-label">Siswa Pernah Mengoperasikan Zoom atau Google Meet</label>
                            <div class="space-x-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="siswa_zoom" name="siswa_zoom" value="P" {{ $info->siswa_zoom == 'P' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="siswa_zoom">Pernah</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="siswa_zoom" name="siswa_zoom" value="BP" {{ $info->siswa_zoom == 'BP' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="siswa_zoom">Belum Pernah</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row mb-4">
                            <label class="form-label">Guru Menggunakan Teknologi Media Pembelajaran, Membuat Administrasi Menggunakan Microsoft Office, Membuat Modul Pelajaran</label>
                            <div class="space-x-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="guru_media_belajar" name="guru_media_belajar" value="K" {{ $info->guru_media_belajar == 'K' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="guru_media_belajar">Kompeten</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="guru_media_belajar" name="guru_media_belajar" value="BK" {{ $info->guru_media_belajar == 'BK' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="guru_media_belajar">Belum Kompeten</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="form-label">Guru Pernah Mengoperasikan Zoom atau Google Meet</label>
                            <div class="space-x-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="guru_zoom" name="guru_zoom" value="P" {{ $info->guru_zoom == 'P' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="guru_zoom">Pernah</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="guru_zoom" name="guru_zoom" value="BP" {{ $info->guru_zoom == 'BP' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="guru_zoom">Belum Pernah</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="mb-4" align="center">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-check-circle opacity-50 me-1"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection