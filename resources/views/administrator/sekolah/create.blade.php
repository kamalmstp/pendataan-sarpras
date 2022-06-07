@extends('layouts.backend')

@section('content')
<div class="content content-full">
    <h2 class="content-heading">
        Tambah Data Sekolah
    </h2>
    <div class="block block-rounded">
        <div class="block-content">
            <form action="{{ route('sekolah.store') }}" method="POST">
            @csrf
            <!-- User Profile -->
                <h2 class="content-heading pt-0">
                    <i class="fa fa-fw fa-users text-muted mr-1"></i> Form Sekolah
                </h2>
                <div class="row push">
                    <div class="col-lg-6 col-xl-6">

                        <div class="form-floating mb-4">
                            <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah">
                            <label class="form-label" for="example-text-input-floating">Nama Sekolah</label>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea name="alamat" id="alamat" class="form-control" style="height: 150px" placeholder="Alamat Sekolah"></textarea>
                            <label class="form-label" for="example-text-input-floating">Alamat Sekolah</label>
                        </div>
                        <div class="form-floating mb-4">
                            <select name="kecamatan" class="form-control" id="kecamatan">
                                <option value="">---Kecamatan---</option>
                                <option value="Sungai Durian">Sungai Durian</option>
                                <option value="Pamukan Selatan">Pamukan Selatan</option>
                                <option value="Pamukan Utara">Pamukan Utara</option>
                                <option value="Pamukan Barat">Pamukan Barat</option>
                            </select>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" id="nama_kepsek" name="nama_kepsek" class="form-control" placeholder="Nama Kepala Sekolah">
                            <label class="form-label" for="example-text-input-floating">Nama Kepala Sekolah</label>
                        </div>
                        <div class="form mb-4">
                            <div class="form-group">
                                <span class="input-group-text input-group-text-alt">
                                <i class="fa fa-phone-alt"></i>
                                </span>
                                <input type="text" id="no_sekolah_kepsek" name="no_sekolah_kepsek" class="form-control" placeholder="No. Telp. Sekolah/HP Kepala Sekolah">
                                <label class="form-label" for="example-text-input-floating">No. Telp. Sekolah/HP Kepala Sekolah</label>
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" id="akredetasi" name="akredetasi" class="form-control" placeholder="Akreditasi">
                            <label class="form-label" for="example-text-input-floating">Akreditasi</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" id="no_akredetasi" name="no_akredetasi" class="form-control" placeholder="Nomor Akredetasi">
                            <label class="form-label" for="example-text-input-floating">Nomor Akreditasi</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" id="npsn" name="npsn" class="form-control" placeholder="NPSN">
                            <label class="form-label" for="example-text-input-floating">NPSN</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" id="nss" name="nss" class="form-control" placeholder="NSS">
                            <label class="form-label" for="example-text-input-floating">NSS</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" id="luas_tanah" name="luas_tanah" class="form-control" style="width:90%" placeholder="Luas Tanah">
                            <label class="form-label" for="example-text-input-floating">Luas Tanah</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" id="luas_bangunan" name="luas_bangunan" class="form-control" placeholder="Total Luas Bangunan">
                            <label class="form-label" for="example-text-input-floating">Total Luas Bangunan</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" id="status" name="jumlah_rombel" class="form-control" placeholder="Jumlah Rombel">
                            <label class="form-label" for="example-text-input-floating">Jumlah Rombel</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" id="status" name="status" class="form-control" placeholder="Status">
                            <label class="form-label" for="example-text-input-floating">Status</label>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-7 offset-sm-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save mr-1"></i>
                                    <span>Simpan</span>
                                </button>
                                <a type="button" href="{{ url()->previous() }}" class="btn btn-secondary">
                                    <i class="fa fa-chevron-left mr-1"></i>
                                    <span>Kembali</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
