@extends('layouts.backend')

@section('content')
<div class="content content-full">
    <h2 class="content-heading">
        Tambah Data Galeri
    </h2>
    <div class="block block-rounded">
        <div class="block-content">
            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- User Profile -->
                <h2 class="content-heading pt-0">
                    <i class="fa fa-fw fa-users text-muted mr-1"></i> Form Galeri
                </h2>
                <div class="row push">
                    <div class="col-lg-6 col-xl-6">
                        <div class="form mb-4">
                            <select name="id_sekolah" class="form-control" id="id_sekolah">
                                <option value="">---Sekolah---</option>
                                @foreach ($sekolah as $row)
                                    <option value="{{ $row->id }}">{{ $row->nama_sekolah }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form mb-4">
                            <input type="file" id="file" name="file[]" class="form-control" multiple>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save mr-1"></i>
                                    <span>Simpan</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
