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
       Peralatan Pendidikan
    </h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
        <h3 class="block-title">Data Peralatan</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
        <div class="block-content block-content-full" style="overflow-x:auto;">
        <table id="sekolah" class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
            <tr align="center">
                <th class="text-center" style="width: 80px;">#</th>
                <th>Nama Peralatan</th>
                <th>Jumlah</th>
                <th>Tahun Peroleh</th>
                <th>Sumber Dana</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($sek as $row)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{$row->nama_peralatan}}</td>
                <td>{{$row->jumlah}}</td>
                <td>{{$row->tahun_peroleh}}</td>
                <td>{{$row->sumber_dana}}</td>
                <td class="text-center">{{$row->kondisi_alat}}</td>
                <td align="center">
                    <div class='btn-group'>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$row->id}}"><i class="fa fa-pencil-alt"></i></button>
                        <button type='button' class='btn btn-danger btn-sm'
                        onclick="confirmDelete('primary/pendataan/peralatan', '{{ $row->id }}')">
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
        <form action="{{route('peralatan.store')}}" method="post">
            @csrf
            <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Tambah Data Peralatan</h3>
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
                            <label class="form-label" for="napa_peralatan">Nama Peralatan</label>
                            <input type="hidden" name="id_sekolah" value="{{auth()->user()->id_sekolah}}">
                            <input type="text" id="nama_peralatan" name="nama_peralatan" class="form-control" placeholder="Nama Peralatan" required="required">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="jumlah">Jumlah</label>
                            <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah Alat">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="tahun_peroleh">Tahun Perolehan</label>
                            <input type="text" id="year" name="tahun_peroleh" class="form-control" placeholder="Tahun Perolehan">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="sumber_dana">Sumber Dana</label>
                            <input type="text" id="sumber_dana" name="sumber_dana" class="form-control" placeholder="Sumber Dana">
                        </div>                    
                        <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-username">Kondisi Kelas</label>
                            <select name="kondisi_alat" class="form-control" id="kondisi_alat">
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
        <form action="{{route('peralatan.update', $edit->id)}}" method="post">
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
                            <label class="form-label" for="napa_peralatan">Nama Peralatan</label>
                            <input type="hidden" name="id_sekolah" value="{{auth()->user()->id_sekolah}}">
                            <input type="text" id="nama_peralatan" value="{{$edit->nama_peralatan}}" name="nama_peralatan" class="form-control" placeholder="Nama Peralatan" required="required">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="jumlah">Jumlah</label>
                            <input type="text" id="jumlah" value="{{$edit->jumlah}}" name="jumlah" class="form-control" placeholder="Jumlah Alat">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="tahun_peroleh">Tahun Perolehan</label>
                            <input type="text" id="year" value="{{$edit->tahun_peroleh}}" name="tahun_peroleh" class="form-control" placeholder="Tahun Perolehan">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="sumber_dana">Sumber Dana</label>
                            <input type="text" id="sumber_dana" value="{{$edit->sumber_dana}}" name="sumber_dana" class="form-control" placeholder="Sumber Dana">
                        </div>                    
                        <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-username">Kondisi Kelas</label>
                            <select name="kondisi_alat" class="form-control" id="kondisi_alat">
                            <option value="">---Kondisi Alat---</option>
                                <option value="Baik" @if($edit->kondisi_alat == "Baik") {{ 'selected' }} @endif >Baik</option>
                                <option value="Rusak Ringan" @if($edit->kondisi_alat == "Rusak Ringan") {{ 'selected' }} @endif >Rusak Ringan</option>
                                <option value="Rusak Sedang" @if($edit->kondisi_alat == "Rusak Sedang") {{ 'selected' }} @endif >Rusak Sedang</option>
                                <option value="Rusak Berat" @if($edit->kondisi_alat == "Rusak Berat") {{ 'selected' }} @endif >Rusak Berat</option>
                                <option value="Rusak Total" @if($edit->kondisi_alat == "Rusak Total") {{ 'selected' }} @endif >Rusak Total</option>
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