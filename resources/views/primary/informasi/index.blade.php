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
            <form action="{{route('informasi.update', $info->id_sekolah)}}" method="post">
            @csrf
            @method('PUT')
                <h2 class="content-heading">Informasi Teknologi Sekolah</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki Halaman Website ? </label>
                            <div class="space-x-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="website_sekolah" name="website_sekolah" value="Y" {{ $info->website_sekolah == 'Y' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="website_sekolah">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="website_sekolah" name="website_sekolah" value="T" {{ $info->website_sekolah == 'T' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="website_sekolah">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki Sistem Informasi Manajemen ?</label>
                            <div class="space-x-2">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="manajemen_sekolah" name="manajemen_sekolah" value="Y" {{ $info->manajemen_sekolah == 'Y' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="manajemen_sekolah">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="manajemen_sekolah" name="manajemen_sekolah" value="T" {{ $info->manajemen_sekolah == 'T' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="manajemen_sekolah">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki Sistem Raport Elektronik ?</label>
                            <div class="space-x-2">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="e_raport" name="e_raport" value="Y" {{ $info->e_raport == 'Y' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="e_raport">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="e_raport" name="e_raport" value="T" {{ $info->e_raport == 'T' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="e_raport">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki Sistem E-Learning / Pembelajaran Elektronik / Learning Management System (LMS) ?</label>
                            <div class="space-x-2">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="elearning" name="elearning" value="Y" {{ $info->elearning == 'Y' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="elearning">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="elearning" name="elearning" value="T" {{ $info->elearning == 'T' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="elearning">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki Sistem Ujian Tertulis Berbasis Komputer (UTBK) ?</label>
                            <div class="space-x-2">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_utbk" name="sistem_utbk" value="Y" {{ $info->sistem_utbk == 'Y' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_utbk">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_utbk" name="sistem_utbk" value="T" {{ $info->sistem_utbk == 'T' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_utbk">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki Sistem Informasi Kepegawaian ?</label>
                            <div class="space-x-2">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_pegawai" name="sistem_pegawai" value="Y" {{ $info->sistem_pegawai == 'Y' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_pegawai">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_pegawai" name="sistem_pegawai" value="T" {{ $info->sistem_pegawai == 'T' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_pegawai">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki Sistem Informasi Keuangan ?</label>
                            <div class="space-x-2">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_keuangan" name="sistem_keuangan" value="Y" {{ $info->sistem_keuangan == 'Y' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_keuangan">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_keuangan" name="sistem_keuangan" value="T" {{ $info->sistem_keuangan == 'T' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_keuangan">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki Sistem Informasi Aset Sekolah ?</label>
                            <div class="space-x-2">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_aset" name="sistem_aset" value="Y" {{ $info->sistem_aset == 'Y' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_aset">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_aset" name="sistem_aset" value="T" {{ $info->sistem_aset == 'T' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_aset">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="form-label">Sekolah Memiliki Sistem Informasi Perpustakaan ?</label>
                            <div class="space-x-2">
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_perpus" name="sistem_perpus" value="Y" {{ $info->sistem_perpus == 'Y' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_perpus">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="sistem_perpus" name="sistem_perpus" value="T" {{ $info->sistem_perpus == 'T' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sistem_perpus">Tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-6">
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
                    </div> -->
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