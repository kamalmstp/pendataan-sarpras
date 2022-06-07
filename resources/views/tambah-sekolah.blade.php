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


      <!-- TABEL INPUT OK -->

      <h2 class="content-heading">Data Sekolah</h2>
        <div class="row">
          <div class="col-lg-3">
            <p class="text-muted">
              Masukan Data Sekolah Dengan Benar!
            </p>
          </div>
          <!-- Mulai Data Profil Sekolah -->
          <div class="col-lg-8 col-xl-8">
            <form action="/simpan-sekolah" method="post">
              {{ csrf_field() }}
              <div class="form-floating mb-4">
                <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah">
                <label class="form-label" for="example-text-input-floating">Nama Sekolah</label>
              </div>
              <div class="form-floating mb-4">
                <textarea name="alamat" id="alamat" class="form-control" style="height: 150px" placeholder="Alamat Sekolah"></textarea>
                <label class="form-label" for="example-text-input-floating">Alamat Sekolah</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="kecamatan" name="kecamatan" class="form-control" placeholder="Kecamatan">
                <label class="form-label" for="example-text-input-floating">Kecamatan</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="nama_kepsek" name="nama_kepsek" class="form-control" placeholder="Nama Kepala Sekolah">
                <label class="form-label" for="example-text-input-floating">Nama Kepala Sekolah</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="no_sekolah_kepsek" name="no_sekolah_kepsek" class="form-control" placeholder="No. Telp. Sekolah/HP Kepala Sekolah">
                <label class="form-label" for="example-text-input-floating">No. Telp. Sekolah/HP Kepala Sekolah</label>
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
            </div>
          <!-- </div> -->
            <!-- Akhir Data Profil Sekolah -->


            <!-- Mulai Data Kondisi Ruang Kelas-->
      <h2 class="content-heading">Data Kondisi Ruang Kelas</h2>
            <div class="col-lg-3">
              <p class="text-muted">
                Masukan Data Kondisi Ruang Kelas
              </p>
            </div>
            <div class="col-lg-8 col-xl-8">
              <div class="form-floating mb-4">
                <input type="text" id="status" name="jenis_rungkel[]" class="form-control" placeholder="Jenis Ruang Kelas">
                <label class="form-label" for="example-text-input-floating">Jenis Ruang Kelas</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="panjang_rungkel[]" class="form-control" placeholder="Panjang Ruang Kelas">
                <label class="form-label" for="example-text-input-floating">Panjang Ruang Kelas</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="lebar_rungkel[]" class="form-control" placeholder="Lebar Ruang Kelas">
                <label class="form-label" for="example-text-input-floating">Lebar Ruang Kelas</label>
              <br>
              <div class="mb-4">
                <label class="form-label" for="example-select">Kondisi Ruang Kelas</label>
                <select class="form-select" id="kondisi_rungkel" name="kondisi_rungkel[]">
                  <option selected disabled>Open this select menu</option>
                  <option value="Baik">Baik</option>
                  <option value="RS">RS</option>
                  <option value="RB">RB</option>
                  <option value="RT">RT</option>
                </select>
              </div>
              <!-- <div class="form-floating mb-4">
                <input type="text" id="status" name="tingkat_rusak" class="form-control" placeholder="Tingkat Rusak">
                <label class="form-label" for="example-text-input-floating">Tingkat Rusak</label>
              </div> -->
              <div class="mb-4">
                <label class="form-label" for="example-select">Tingkat Kerusakan Ruang Kelas</label>
                <select class="form-select" id="tingkat_rusak" name="tingkat_rusak[]">
                  <option selected disabled>Open this select menu</option>
                  <option value="0%">0%</option>
                  <option value="5%">5%</option>
                  <option value="10%">10%</option>
                  <option value="15%">15%</option>
                  <option value="20%">20%</option>
                  <option value="25%">25%</option>
                  <option value="30%">30%</option>
                  <option value="25%">35%</option>
                  <option value="40%">40%</option>
                  <option value="45%">45%</option>
                  <option value="50%">50%</option>
                  <option value="55%">55%</option>
                  <option value="60%">60%</option>
                  <option value="65%">65%</option>
                  <option value="70%">70%</option>
                  <option value="75%">>70</option>
                </select>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="rehab_akhir[]" class="form-control" placeholder="Rehab Akhir">
                <label class="form-label" for="example-text-input-floating">Rehab Akhir</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="meja_baik[]" class="form-control" placeholder="Meja Baik">
                <label class="form-label" for="example-text-input-floating">Meja Baik</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="meja_rusak[]" class="form-control" placeholder="Meja Rusak">
                <label class="form-label" for="example-text-input-floating">Meja Rusak</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="kursi_baik[]" class="form-control" placeholder="Kursi Baik">
                <label class="form-label" for="example-text-input-floating">Kursi Baik</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="kursi_rusak[]" class="form-control" placeholder="Kursi Rusak">
                <label class="form-label" for="example-text-input-floating">Kursi Rusak</label>
              </div>
              </div>
              
              <div class="rungkel"></div>
              <div class="form-floating mb-4">
                <label class="form-label" for="example-text-input-floating"></label>
                <div class="col-sm-10">
                  <a href="#!" class="tmbhrungkel btn btn-success" style="float:;">Tambah Kelas</a>
                </div>
              </div>


            <!-- </div> -->
            </div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7 /jquery.min.js"></script> -->
      
      
          <!-- Mulai Data Ruang / Area Penunjang Lain -->
      <h2 class="content-heading">Data Ruang / Area Penunjang Lain</h2>
            <div class="col-lg-3">
              <p class="text-muted">
                Masukan Data Ruang / Area Penunjang Lain
              </p>
            </div>
            <div class="col-lg-8 col-xl-8">
              <div class="form-floating mb-4">
                <input type="text" id="status" name="jenis_ruang[]" class="form-control" placeholder="Jenis Ruang">
                <label class="form-label" for="example-text-input-floating">Jenis Ruang</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="keterangan[]" class="form-control" placeholder="Keterangan">
                <label class="form-label" for="example-text-input-floating">Keterangan</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="panjang_ruang[]" class="form-control" placeholder="Panjang Ruang">
                <label class="form-label" for="example-text-input-floating">Panjang Ruang</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" id="status" name="lebar_ruang[]" class="form-control" placeholder="Lebar Ruang">
                <label class="form-label" for="example-text-input-floating">Lebar Ruang</label>
              </div>
              <div class="mb-4">
                <label class="form-label" for="example-select">Kondisi Ruang Penunjang</label>
                <select class="form-select" id="kondisi_ruang" name="kondisi_ruang[]">
                  <option selected disabled>Open this select menu</option>
                  <option value="Baik">Baik</option>
                  <option value="RS">RS</option>
                  <option value="RB">RB</option>
                  <option value="RT">RT</option>
                </select>
              </div>

              <div class="rupenjang"></div>
              <div class="form-floating mb-4">
                <label class="form-label" for="example-text-input-floating"></label>
                <div class="col-sm-10">
                  <a href="#!" class="tmbhrupenjang btn btn-success">Tambah Ruang</a>
                </div>
              </div>

            <div>
              <!-- Akhir Data Ruang / Area Penunjang Lain -->  
                
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
          </div>
        </div>
        
      <!-- END TABEL INPUT OK -->

      <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
      <script type="text/javascript">
        $('.tmbhrungkel').on('click', function() {
          tmbhrungkel();
        });
        function tmbhrungkel() {
          var rungkel = '<div style="border-top:3px solid #3e558e;"><br><div class="form-floating mb-4"><input type="text" id="status" name="jenis_rungkel[]" class="form-control" placeholder="Jenis Ruang Kelas"><label class="form-label" for="example-text-input-floating">Jenis Ruang Kelas</label></div><div class="form-floating mb-4"><input type="text" id="status" name="panjang_rungkel[]" class="form-control" placeholder="Panjang Ruang Kelas"><label class="form-label" for="example-text-input-floating">Panjang Ruang Kelas</label></div><div class="form-floating mb-4"><input type="text" id="status" name="lebar_rungkel[]" class="form-control" placeholder="Lebar Ruang Kelas"><label class="form-label" for="example-text-input-floating">Lebar Ruang Kelas</label><br><div class="mb-4"><label class="form-label" for="example-select">Kondisi Ruang Kelas</label><select class="form-select" id="kondisi_rungkel" name="kondisi_rungkel[]"><option selected disabled>Open this select menu</option><option value="Baik">Baik</option><option value="RS">RS</option><option value="RB">RB</option><option value="RT">RT</option></select></div><div class="mb-4"><label class="form-label" for="example-select">Tingkat Kerusakan Ruang Kelas</label><select class="form-select" id="tingkat_rusak" name="tingkat_rusak[]"><option selected disabled>Open this select menu</option><option value="0%">0%</option><option value="5%">5%</option><option value="10%">10%</option><option value="15%">15%</option><option value="20%">20%</option><option value="25%">25%</option><option value="30%">30%</option><option value="25%">35%</option><option value="40%">40%</option><option value="45%">45%</option><option value="50%">50%</option><option value="55%">55%</option><option value="60%">60%</option><option value="65%">65%</option><option value="70%">70%</option><option value="75%">>70</option></select></div><div class="form-floating mb-4"><input type="text" id="status" name="rehab_akhir[]" class="form-control" placeholder="Rehab Akhir"><label class="form-label" for="example-text-input-floating">Rehab Akhir</label></div><div class="form-floating mb-4"><input type="text" id="status" name="meja_baik[]" class="form-control" placeholder="Meja Baik"><label class="form-label" for="example-text-input-floating">Meja Baik</label></div><div class="form-floating mb-4"><input type="text" id="status" name="meja_rusak[]" class="form-control" placeholder="Meja Rusak"><label class="form-label" for="example-text-input-floating">Meja Rusak</label></div><div class="form-floating mb-4"><input type="text" id="status" name="kursi_baik[]" class="form-control" placeholder="Kursi Baik"><label class="form-label" for="example-text-input-floating">Kursi Baik</label></div><div class="form-floating mb-4"><input type="text" id="status" name="kursi_rusak[]" class="form-control" placeholder="Kursi Rusak"><label class="form-label" for="example-text-input-floating">Kursi Rusak</label></div><div class="form-floating mb-4"><label class="form-label" for="example-text-input-floating"></label><div class="col-sm-10"><a href="#!" class="hpsrungkel btn btn-danger">Hapus Kelas</a></div></div></div>';
          $('.rungkel').append(rungkel);
        };
        $('.rungkel').on('click', '.hpsrungkel', function() {
          $(this).parent().parent().parent().parent().remove();
        });
        
        $('.tmbhrupenjang').on('click', function() {
          tmbhrupenjang();
        });
        function tmbhrupenjang() {
          var rupenjang = '<div style="border-top:3px solid #3e558e;"><br><div class="form-floating mb-4"><input type="text" id="status" name="jenis_ruang[]" class="form-control" placeholder="Jenis Ruang"><label class="form-label" for="example-text-input-floating">Jenis Ruang</label></div><div class="form-floating mb-4"><input type="text" id="status" name="keterangan[]" class="form-control" placeholder="Keterangan"><label class="form-label" for="example-text-input-floating">Keterangan</label></div><div class="form-floating mb-4"><input type="text" id="status" name="panjang_ruang[]" class="form-control" placeholder="Panjang Ruang"><label class="form-label" for="example-text-input-floating">Panjang Ruang</label></div><div class="form-floating mb-4"><input type="text" id="status" name="lebar_ruang[]" class="form-control" placeholder="Lebar Ruang"><label class="form-label" for="example-text-input-floating">Lebar Ruang</label></div><div class="mb-4"><label class="form-label" for="example-select">Kondisi Ruang Penunjang</label><select class="form-select" id="kondisi_ruang" name="kondisi_ruang[]"><option selected disabled>Open this select menu</option><option value="Baik">Baik</option><option value="RS">RS</option><option value="RB">RB</option><option value="RT">RT</option></select></div><div class="form-floating mb-4"><label class="form-label" for="example-text-input-floating"></label><div class="col-sm-10"><a href="#!" class="hpsrupenjang btn btn-danger">Hapus Kelas</a></div></div></div>';
          $('.rupenjang').append(rupenjang);
        };
        $('.rupenjang').on('click', '.hpsrupenjang', function() {
          $(this).parent().parent().parent().remove();
        });
      </script>

  </div>
  <!-- END Page Content -->
@endsection
