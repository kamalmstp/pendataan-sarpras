@extends('layouts.backend')

@section('js_after')
  <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
@endsection

@section('content')
<div class="content">
    <h2 class="content-heading">
       Informasi Teknologi Sekolah
    </h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
        <h3 class="block-title">Silakan Lengkapi Informasi Berikut</h3>
        </div>
        <div class="block-content block-content-full" style="overflow-x:auto;">
            <form action="{{route('jumlah.store')}}" method="post">
            @csrf
            @method('PUT')
                <h2 class="content-heading">Informasi Teknologi Sekolah</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki </label>
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