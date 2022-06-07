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
       Ruang Kelas
    </h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
        <h3 class="block-title">Data Ruang Kelas</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
        <div class="block-content block-content-full" style="overflow-x:auto;">
        <table id="sekolah" class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
            <tr align="center">
                <th class="text-center" style="width: 80px;">#</th>
                <th>Nama Ruang</th>
                <th>Ukuran</th>
                <th>Kondisi</th>
                <th>Rehab Terakhir</th>
                <th>Jumlah Meubelair</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($sek as $row)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{$row->jenis_ruang}}</td>
                <td>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Panjang</td>
                            <td>:</td>
                            <td>{{$row->panjang}}</td>
                        </tr>
                        <tr>
                            <td>Lebar</td>
                            <td>:</td>
                            <td>{{$row->lebar}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td class="text-center">{{$row->kondisi}}</td>
                <td class="text-center">{{$row->rehab_akhir}}</td>
                <td>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Meja Baik</td>
                            <td>:</td>
                            <td>{{$row->meja_baik}}</td>
                        </tr>
                        <tr>
                            <td>Meja Rusak</td>
                            <td>:</td>
                            <td>{{$row->meja_rusak}}</td>
                        </tr>
                        <tr>
                            <td>Kursi Baik</td>
                            <td>:</td>
                            <td>{{$row->kursi_baik}}</td>
                        </tr>
                        <tr>
                            <td>Kursi Rusak</td>
                            <td>:</td>
                            <td>{{$row->kursi_rusak}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center">
                    <div class='btn-group'>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$row->id}}"><i class="fa fa-pencil-alt"></i></button>
                        <button type='button' class='btn btn-danger btn-sm'
                        onclick="confirmDelete('primary/pendataan/kelas', '{{ $row->id }}')">
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