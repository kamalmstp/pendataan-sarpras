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
<div class="content">
    <h2 class="content-heading">
       Ruang Penunjang
    </h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
        <h3 class="block-title">Data Ruang Penunjang</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
        <div class="block-content block-content-full" style="overflow-x:auto;">
        <table id="sekolah" class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
            <tr align="center">
                <th class="text-center" style="width: 80px;">#</th>
                <th>Nama Ruang</th>
                <th>Keterangan</th>
                <th>Panjang (m)</th>
                <th>Lebar (m)</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($sek as $row)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{$row->jenis_ruang}}</td>
                <td class="text-center">{{$row->keterangan}}</td>
                <td class="text-center">{{$row->panjang}}</td>
                <td class="text-center">{{$row->lebar}}</td>
                <td class="text-center">{{$row->kondisi}}</td>
                <td align="center">
                    <div class='btn-group'>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$row->id}}"><i class="fa fa-pencil-alt"></i></button>
                        <button type='button' class='btn btn-danger btn-sm'
                        onclick="confirmDelete('primary/pendataan/penunjang', '{{ $row->id }}')">
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
    <div class="modal-dialog modal-dialog-popout" role="document">
      <div class="modal-content">
        <form action="{{route('penunjang.store')}}" method="post">
            @csrf
            <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Tambah Data Ruang Penunjang</h3>
                <div class="block-options">
                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
                </div>
            </div>
            <div class="block-content">
                <div class="row">
                    <div>
                        <div class="mb-4">
                            <label class="form-label" for="jenis_ruang">Nama Ruang</label>
                            <input type="hidden" name="id_sekolah" value="{{auth()->user()->id_sekolah}}">
                            <input type="text" id="jenis_ruang" name="jenis_ruang" class="form-control" placeholder="Nama Ruang" required="required">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-username">Keterangan</label>
                            <select name="keterangan" class="form-control" id="keterangan">
                                <option value="">---Keterangan---</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="jenis_ruang">Ukuran Ruang (p x l)</label>
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
    <div class="modal-dialog modal-dialog-popout" role="document">
      <div class="modal-content">
        <form action="{{route('penunjang.update', $edit->id)}}" method="post">
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
                    <div>
                        <div class="mb-4">
                            <label class="form-label" for="jenis_ruang">Nama Ruang Kelas</label>
                            <input type="hidden" name="id_sekolah" value="{{auth()->user()->id_sekolah}}">
                            <input type="text" id="jenis_ruang" value="{{$edit->jenis_ruang}}" name="jenis_ruang" class="form-control" placeholder="Nama Ruang" required="required">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-username">Keterangan</label>
                            <select name="keterangan" class="form-control" id="keterangan">
                                <option value="">---Keterangan---</option>
                                <option value="Ada" @if($edit->keterangan == "Ada") {{ 'selected' }} @endif >Ada</option>
                                <option value="Tidak Ada" @if($edit->keterangan == "Tidak Ada") {{ 'selected' }} @endif >Tidak Ada</option>
                            </select>
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
                            <label class="form-label" for="dm-profile-edit-username">Kondisi Ruangan</label>
                            <select name="kondisi" class="form-control" id="kondisi">
                                <option value="">---Kondisi---</option>
                                <option value="Baik" @if($edit->kondisi == "Baik") {{ 'selected' }} @endif >Baik</option>
                                <option value="Rusak Ringan" @if($edit->kondisi == "Rusak Ringan") {{ 'selected' }} @endif >Rusak Ringan</option>
                                <option value="Rusak Sedang" @if($edit->kondisi == "Rusak Sedang") {{ 'selected' }} @endif >Rusak Sedang</option>
                                <option value="Rusak Berat" @if($edit->kondisi == "Rusak Berat") {{ 'selected' }} @endif >Rusak Berat</option>
                                <option value="Rusak Total" @if($edit->kondisi == "Rusak Total") {{ 'selected' }} @endif >Rusak Total</option>
                            </select>
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