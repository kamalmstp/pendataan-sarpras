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
  <script type="text/javascript">
        $(function() {
        $( "#year" ).datepicker({dateFormat: 'yy'});
        });
    </script>
@endsection

@section('content')
<div class="content">
    <h2 class="content-heading">
       Jumlah Guru & Siswa
    </h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
        <h3 class="block-title">Data Jumlah Guru & Siswa SD</h3>
        </div>
        <div class="block-content block-content-full" style="overflow-x:auto;">
            <table class="table table-borderless table-striped table-vcenter">
            <thead>
                <tr>
                    <th class="text-center" style="width: 100px;" rowspan="2">#</th>
                    <th class="d-none d-sm-table-cell text-center" rowspan="2">Kelas</th>
                    <th class="d-none d-md-table-cell text-center" rowspan="2">Jumlah Guru</th>
                    <th class="d-none d-md-table-cell text-center" colspan="2">Jumlah Siswa</th>
                    <th rowspan="2" class="text-center">Status</th>
                    <th class="text-center" rowspan="2">Actions</th>
                </tr>
                <tr>
                    <th class="d-none d-sm-table-cell text-center">Laki-Laki</th>
                    <th class="d-none d-sm-table-cell text-center">Perempuan</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td class="text-center fs-sm">1</td>
                    <td class="d-none d-sm-table-cell fs-sm">Kelas 1</td>
                    <td class="d-none d-md-table-cell text-center fs-sm">{{$kls1->guru}}</td>
                    <td class="d-none d-md-table-cell text-center fs-sm">{{$kls1->siswa_laki}}</td>
                    <td class="d-none d-md-table-cell text-center fs-sm">{{$kls1->siswa_perempuan}}</td>
                    <td class="text-end d-none d-sm-table-cell fs-sm"></td>
                    <td class="text-center fs-sm">
                        @if($kls1->count() == 0)
                        <button type="button" class="btn btn-sm btn-alt-primary" data-bs-toggle="modal" data-bs-target="#add">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                        @else
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.php">
                            <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                            <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                        @endif
                    </td>
                </tr> -->
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
      <div class="modal-content">
        <form action="{{route('kelas.store')}}" method="post">
            @csrf
            <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Tambah Data Ruang Kelas</h3>
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
                            <label class="form-label" for="jenis_ruang">Nama Ruang Kelas</label>
                            <input type="hidden" name="id_sekolah" value="{{auth()->user()->id_sekolah}}">
                            <input type="text" id="jenis_ruang" name="jenis_ruang" class="form-control" placeholder="Nama Ruang" required="required">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="jenis_ruang">Ukuran Kelas (p x l)</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="number" id="panjang" name="panjang" class="form-control" placeholder="Panjang">
                                        <span class="input-group-text input-group-text-alt">m</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span class="input-group-text">X</span>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="number" id="lebar" name="lebar" class="form-control" placeholder="Lebar">
                                        <span class="input-group-text input-group-text-alt">m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-username">Kondisi Kelas</label>
                            <select name="kondisi" class="form-control" id="kondisi">
                                <option value="">---Kondisi---</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak Ringan">Rusak Ringan</option>
                                <option value="Rusak Sedang">Rusak Sedang</option>
                                <option value="Rusak Berat">Rusak Berat</option>
                                <option value="Rusak Total">Rusak Total</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="rehab_akhir">Tahun Rehab Terakhir</label>
                            <input type="text" id="year" name="rehab_akhir" class="form-control" placeholder="Tahun Rehab Terakhir">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="meja_baik">Jumlah Meja Baik</label>
                            <input type="text" id="meja_baik" name="meja_baik" class="form-control" placeholder="Meja Baik">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="meja_rusak">Jumlah Meja Rusak</label>
                            <input type="text" id="meja_rusak" name="meja_rusak" class="form-control" placeholder="Meja Rusak">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="kursi_baik">Jumlah Kursi Baik</label>
                            <input type="text" id="kursi_baik" name="kursi_baik" class="form-control" placeholder="Kursi Baik">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="kursi_rusak">Jumlah Kursi Rusak</label>
                            <input type="text" id="kursi_rusak" name="kursi_rusak" class="form-control" placeholder="Kursi Rusak">
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Simpan</button>
            </div>
            </div>
        </form>
      </div>
    </div>
</div>

@foreach($sek as $edit)
<div class="modal fade" id="edit{{$edit->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
      <div class="modal-content">
        <form action="{{route('kelas.update', $edit->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Edit Ruang Kelas</h3>
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
                            <label class="form-label" for="jenis_ruang">Nama Ruang Kelas</label>
                            <input type="hidden" name="id_sekolah" value="{{auth()->user()->id_sekolah}}">
                            <input type="text" id="jenis_ruang" value="{{$edit->jenis_ruang}}" name="jenis_ruang" class="form-control" placeholder="Nama Ruang" required="required">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="jenis_ruang">Ukuran Kelas (p x l)</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="number" id="panjang" value="{{$edit->panjang}}" name="panjang" class="form-control" placeholder="Panjang">
                                        <span class="input-group-text input-group-text-alt">m</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span class="input-group-text">X</span>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="number" id="lebar" value="{{$edit->lebar}}" name="lebar" class="form-control" placeholder="Lebar">
                                        <span class="input-group-text input-group-text-alt">m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-username">Kondisi Kelas</label>
                            <select name="kondisi" class="form-control" id="kondisi">
                                <option value="">---Kondisi---</option>
                                <option value="Baik" @if($edit->kondisi == "Baik") {{ 'selected' }} @endif >Baik</option>
                                <option value="Rusak Ringan" @if($edit->kondisi == "Rusak Ringan") {{ 'selected' }} @endif >Rusak Ringan</option>
                                <option value="Rusak Sedang" @if($edit->kondisi == "Rusak Sedang") {{ 'selected' }} @endif >Rusak Sedang</option>
                                <option value="Rusak Berat" @if($edit->kondisi == "Rusak Berat") {{ 'selected' }} @endif >Rusak Berat</option>
                                <option value="Rusak Total" @if($edit->kondisi == "Rusak Total") {{ 'selected' }} @endif >Rusak Total</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="rehab_akhir">Tahun Rehab Terakhir</label>
                            <input type="text" id="year" value="{{$edit->rehab_akhir}}" name="rehab_akhir" class="form-control" placeholder="Tahun Rehab Terakhir">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="meja_baik">Jumlah Meja Baik</label>
                            <input type="text" id="meja_baik" value="{{$edit->meja_baik}}" name="meja_baik" class="form-control" placeholder="Meja Baik">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="meja_rusak">Jumlah Meja Rusak</label>
                            <input type="text" id="meja_rusak" value="{{$edit->meja_rusak}}" name="meja_rusak" class="form-control" placeholder="Meja Rusak">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="kursi_baik">Jumlah Kursi Baik</label>
                            <input type="text" id="kursi_baik" value="{{$edit->kursi_baik}}" name="kursi_baik" class="form-control" placeholder="Kursi Baik">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="kursi_rusak">Jumlah Kursi Rusak</label>
                            <input type="text" id="kursi_rusak" value="{{$edit->kursi_rusak}}" name="kursi_rusak" class="form-control" placeholder="Kursi Rusak">
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Update</button>
            </div>
            </div>
        </form>
      </div>
    </div>
</div>
@endforeach
@endsection