@extends('layouts.backend')

@section('content')
  <div class="content content-full">
    <h2 class="content-heading">
       Identitas Sekolah
    </h2>
    <div class="block block-rounded">
        <div class="block-content">
        <form action="{{route('school.update', $sek->id)}}" method="post">
            @csrf
            @method('PUT')
            <h2 class="content-heading pt-0">
            <i class="fa fa-school text-muted me-1"></i> Identitas Data Sekolah
            </h2>
            <div class="row push">
                <p class="text-muted">
                Silakan Lengkapi Data Identitas Sekolah.
                </p>
                <div class="col-lg-8 col-xl-6">
                    <div class="mb-4">
                        <label class="form-label" for="nama_sekolah">Nama Sekolah</label>
                        <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah" value="{{$sek->nama_sekolah}}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">NPSN</label>
                        <input type="text" id="npsn" name="npsn" class="form-control" placeholder="NPSN" value="{{$sek->npsn}}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Status Sekolah</label>
                        <select name="status" class="form-control" id="status">
                            <option value="">---Status---</option>
                            <option value="Negeri" @if($sek->status == "Negeri") {{ 'selected' }} @endif >Negeri</option>
                            <option value="Swasta" @if($sek->status == "Swasta") {{ 'selected' }} @endif >Swasta</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Luas Tanah</label>
                        <div class="input-group">
                            <input type="number" id="luas_tanah" name="luas_tanah" class="form-control" placeholder="Luas Tanah" value="{{$sek->luas_tanah}}">
                            <span class="input-group-text input-group-text-alt">m<sup>2</sup> </span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Nama Kepala Sekolah</label>
                        <input type="text" id="nama_kepsek" name="nama_kepsek" class="form-control" placeholder="Nama Kepala Sekolah" value="{{$sek->nama_kepsek}}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">No. Telp Sekolah</label>
                        <div class="input-group">
                            <span class="input-group-text input-group-text-alt">
                                +62
                            </span>
                            <input type="number" id="no_sekolah_kepsek" name="no_sekolah_kepsek" class="form-control" placeholder="No. Telp. Sekolah/HP Kepala Sekolah" value="{{$sek->no_sekolah_kepsek}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-6">
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Akreditasi</label>
                        <select name="akredetasi" class="form-control" id="akredetasi">
                            <option value="">--Pilih Akreditasi--</option>
                            <option value="Sudah" @if($sek->akredetasi == "Sudah") {{ 'selected' }} @endif >Sudah</option>
                            <option value="Belum" @if($sek->akredetasi == "Belum") {{ 'selected' }} @endif >Belum</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Nomor Akreditasi</label>
                        <input type="number" id="no_akredetasi" name="no_akredetasi" class="form-control" placeholder="Nomor Akredetasi" value="{{$sek->no_akredetasi}}">
                    </div>
                    
                    <!-- <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">NSS</label>
                        <input type="text" id="nss" name="nss" class="form-control" placeholder="NSS" value="{{$sek->nss}}">
                    </div> -->
                    <!-- <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Luas Total Bangunan</label>
                        <div class="input-group">
                            <input type="text" id="luas_bangunan" name="luas_bangunan" class="form-control" placeholder="Total Luas Bangunan" value="{{$sek->luas_bangunan}}">
                            <span class="input-group-text input-group-text-alt">m<sup>2</sup> </span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Status Tanah</label>
                        <select name="status_tanah" class="form-control" id="status_tanah">
                            <option value="">---Status Tanah---</option>
                            <option value="Pemda" @if($sek->status_tanah == "Pemda") {{ 'selected' }} @endif >Pemda (Aset Pemda)</option>
                            <option value="Bengkok" @if($sek->status_tanah == "Bengkok") {{ 'selected' }} @endif >Bengkok (Aset Pemerintah Desa)</option>
                            <option value="Wakaf" @if($sek->status_tanah == "Wakaf") {{ 'selected' }} @endif >Wakaf (Wakaf Kpd Yayasan)</option>
                            <option value="Sewa" @if($sek->status_tanah == "Sewa") {{ 'selected' }} @endif >Sewa (Tanah Pribadi)</option>
                        </select>
                    </div> -->
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Jumlah Rombongan Belajar</label>
                        <div class="input-group">
                            <input type="number" id="jumlah_rombel" name="jumlah_rombel" class="form-control" placeholder="Jumlah Rombel" value="{{$sek->jumlah_rombel}}">
                            <span class="input-group-text input-group-text-alt">Rombel</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Kurikulum</label>
                        <input type="text" id="kurikulum" name="kurikulum" class="form-control" placeholder="Kurikulum" value="{{$sek->kurikulum}}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Pemanfaatan <i>E-Learning</i></label>
                        <select name="akredetasi" class="form-control" id="akredetasi">
                            <option value="">--Pilih--</option>
                            <option value="Sudah" @if($sek->akredetasi == "Sudah") {{ 'selected' }} @endif >Sudah</option>
                            <option value="Belum" @if($sek->akredetasi == "Belum") {{ 'selected' }} @endif >Belum</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Penyelenggaraan</label>
                        <input type="text" id="penyelenggaraan" name="penyelenggaraan" class="form-control" placeholder="Mis: Sehari Penuh/5 hari" value="{{$sek->penyelenggaraan}}">
                    </div>
                </div>
                <hr>
                <p class="text-muted">
                    Alamat/Lokasi Sekolah
                </p>
                <div class="col-lg-8 col-xl-6">
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Alamat</label>
                        <textarea name="alamat" rows="3" id="alamat" class="form-control" placeholder="Alamat Sekolah">{{$sek->alamat}}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Kelurahan</label>
                        <input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="Kelurahan" value="{{$sek->kelurahan}}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Kecamatan</label>
                        <select name="kecamatan" class="form-control" id="kecamatan">
                            <option value="">---Kecamatan---</option>
                            <option value="Sungai Durian" @if($sek->kecamatan == "Sungai Durian") {{ 'selected' }} @endif >Sungai Durian</option>
                            <option value="Pamukan Selatan" @if($sek->kecamatan == "Pamukan Selatan") {{ 'selected' }} @endif >Pamukan Selatan</option>
                            <option value="Pamukan Utara" @if($sek->kecamatan == "Pamukan Utara") {{ 'selected' }} @endif >Pamukan Utara</option>
                            <option value="Pamukan Barat" @if($sek->kecamatan == "Pamukan Barat") {{ 'selected' }} @endif >Pamukan Barat</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-6">
                        <button onclick="getLocation()" type="button" class="btn btn-sm btn-alt-success me-1 mb-3">
                            <i class="fa fa-fw fa-map-pin"></i> Lokasi Sekarang
                        </button> <p id="result-lat-lang"></p>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Latitude</label>
                        <input type="text" id="latitude" name="latitude" class="form-control" placeholder="Latitude" value="{{$sek->latitude}}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dm-profile-edit-username">Longitude</label>
                        <input type="text" id="longitude" name="longitude" class="form-control" placeholder="Longitude" value="{{$sek->longitude}}">
                    </div>
                </div>
                <div class="mb-4" align="center">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-check-circle opacity-50 me-1"></i> Update Identitas
                        </button>
                    </div>
            </div>
        </form>
      </div>
    </div>
    <!-- END Dynamic Table Full -->

  </div>
  <!-- END Page Content -->
@endsection

@section('js_after')
<script>
    var x = document.getElementById("result-lat-lang");
    var lat = document.getElementById("latitude");
    var long = document.getElementById("longitude");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "(" + position.coords.latitude + ", " + position.coords.longitude + ")";
        lat.value = position.coords.latitude;
        long.value = position.coords.longitude;
    }
</script>
@endsection