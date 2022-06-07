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
       Sarana Prasarana Sanitasi
    </h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
        <h3 class="block-title">Data Sarpras Sanitasi</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
        <div class="block-content block-content-full" style="overflow-x:auto;">
        <table id="sekolah" class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr align="center">
                    <th class="text-center" style="width: 80px;" rowspan="2" width="3%">#</th>
                    <th rowspan="2">Nama Ruang</th>
                    <th colspan="2">Ukuran (m)</th>
                    <th colspan="4">Kondisi</th>
                    <th rowspan="2" width="10%">Aksi</th>
                </tr>
                <tr align="center">
                    <th width="7%">Panjang</th>
                    <th width="7%">Lebar</th>
                    <th width="7%">Baik</th>
                    <th width="7%">Rusak Sedang</th>
                    <th width="7%">Rusak Berat</th>
                    <th width="7%">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sek as $row)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{$row->jenis_ruang}}</td>
                    <td class="text-center">{{$row->panjang}}</td>
                    <td class="text-center">{{$row->lebar}}</td>
                    <td class="text-center">{{$row->baik}}</td>
                    <td class="text-center">{{$row->rusak_sedang}}</td>
                    <td class="text-center">{{$row->rusak_berat}}</td>
                    <td class="text-center">{{($row->baik + $row->rusak_sedang + $row->rusak_berat)}}</td>
                    <td align="center">
                        <div class='btn-group'>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$row->id}}"><i class="fa fa-pencil-alt"></i></button>
                            <button type='button' class='btn btn-danger btn-sm'
                            onclick="confirmDelete('primary/pendataan/sanitasi', '{{ $row->id }}')">
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
        <form action="{{route('sanitasi.store')}}" method="post">
            @csrf
            <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Tambah Data Sarpras</h3>
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
                            <label class="form-label" for="jenis_ruang">Nama Sarpras</label>
                            <input type="hidden" name="id_sekolah" value="{{auth()->user()->id_sekolah}}">
                            <input type="text" id="jenis_ruang" name="jenis_ruang" class="form-control" placeholder="Nama Sarpras" required="required">
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
                            <label class="form-label" for="baik">Jumlah Sarpras Kondisi Baik</label>
                            <input type="number" id="baik" name="baik" class="form-control" placeholder="Jumlah Baik">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="rusak_sedang">Jumlah Sarpras Kondisi Rusak Sedang</label>
                            <input type="number" id="rusak_sedang" name="rusak_sedang" class="form-control" placeholder="Jumlah Rusak Sedang">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="rusak_berat">Jumlah Sarpras Kondisi Rusak Berat</label>
                            <input type="number" id="rusak_berat" name="rusak_berat" class="form-control" placeholder="Jumlah Rusak Berat">
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
        <form action="{{route('sanitasi.update', $edit->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Edit Data Sarpras</h3>
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
                            <label class="form-label" for="jenis_ruang">Nama Sarpras</label>
                            <input type="hidden" name="id_sekolah" value="{{auth()->user()->id_sekolah}}">
                            <input type="text" id="jenis_ruang" value="{{$edit->jenis_ruang}}" name="jenis_ruang" class="form-control" placeholder="Nama Sarpras" required="required">
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
                            <label class="form-label" for="baik">Jumlah Sarpras Kondisi Baik</label>
                            <input type="number" id="baik" value="{{$edit->baik}}" name="baik" class="form-control" placeholder="Jumlah Baik">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="rusak_sedang">Jumlah Sarpras Kondisi Rusak Sedang</label>
                            <input type="number" id="rusak_sedang" value="{{$edit->rusak_sedang}}" name="rusak_sedang" class="form-control" placeholder="Jumlah Rusak Sedang">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="rusak_berat">Jumlah Sarpras Kondisi Rusak Berat</label>
                            <input type="number" id="rusak_berat" value="{{$edit->rusak_berat}}" name="rusak_berat" class="form-control" placeholder="Jumlah Rusak Berat">
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