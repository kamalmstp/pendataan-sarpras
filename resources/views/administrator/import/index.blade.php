@extends('layouts.backend')

@section('content')
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">
        Data Informasi Teknologi & Siswa
        </h3>
      </div>
      <div class="block-content">
        <form action="{{route('import.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="mb-4">
                        <input type="file" id="file" name="file" class="form-control" required="required">
                    </div>
                    <div class="mb-4">
                      <button type="submit" class="btn btn-success">
                          <i class="fa fa-file-import"></i>
                          <span>Import</span>
                      </button>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>

    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">
        Data Fasilitas Sekolah
        </h3>
      </div>
      <div class="block-content">
        <form action="{{route('import.fasilitas')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="mb-4">
                        <input type="file" id="file" name="file" class="form-control" required="required">
                    </div>
                    <div class="mb-4">
                      <button type="submit" class="btn btn-success">
                          <i class="fa fa-file-import"></i>
                          <span>Import</span>
                      </button>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>

    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">
        Data Ruangan Sekolah
        </h3>
      </div>
      <div class="block-content">
        <form action="{{route('import.ruangan')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="mb-4">
                        <input type="file" id="file" name="file" class="form-control" required="required">
                    </div>
                    <div class="mb-4">
                      <button type="submit" class="btn btn-success">
                          <i class="fa fa-file-import"></i>
                          <span>Import</span>
                      </button>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
