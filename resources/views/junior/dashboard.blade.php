@extends('layouts.backend')

@section('content')
<div class="content">
    <!-- Weather -->
    <div class="row row-deck">
        <div class="col-md-6 col-xl-3">
            <!-- Single Day #4 -->
            <div class="block block-rounded bg-gd-primary text-white animated fadeIn">
                <div class="block-content text-center py-5 pb-3">
                    <p class="mb-4">
                        <i class="fa fa-house-user fa-5x"></i>
                    </p>
                    <p class="font-size-h4 font-w700 mb-0">
                    </p>
                </div>
            </div>
            <!-- END Single Day #4 -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Single Day #5 -->
            <div class="block block-rounded bg-gd-sublime text-white animated fadeIn">
                <div class="block-content text-center py-5 pb-3">
                    <p class="mb-4">
                        <i class="fa fa-users fa-5x"></i>
                    </p>
                    <p class="font-size-h4 font-w700 mb-0">
                    </p>
                </div>
            </div>
            <!-- END Single Day #5 -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Single Day #6 -->
            <div class="block block-rounded bg-gd-aqua text-white animated fadeIn">
                <div class="block-content text-center py-5 pb-3">
                    <p class="mb-4">
                        <i class="fa fa-users fa-5x"></i>
                    </p>
                    <p class="font-size-h4 font-w700 mb-0">
                    </p>
                </div>
            </div>
            <!-- END Single Day #6 -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Single Day #7 -->
            <div class="block block-rounded bg-gd-dusk text-white animated fadeIn">
                <div class="block-content text-center py-5 pb-3">
                    <p class="mb-4">
                        <i class="fa fa-users fa-5x"></i>
                    </p>
                    <p class="font-size-h4 font-w700 mb-0">
                    </p>
                </div>
            </div>
            <!-- END Single Day #7 -->
        </div>
    </div>
    <!-- END Weather -->
    <div class="block block-themed bg-image" style="background-image: url({{ asset('/media/photos/photo21.jpg') }});">
        <div class="block-header bg-primary-dark-op">
            <h3 class="block-title">Menu Utama</h3>
        </div>
        <div class="block-content text-center bg-primary-dark-op text-white-75 align-middle py-7" style="height: 50vh">
            <p class="font-weight-bold font-italic font-size-h2">
            Selamat Datang, {{auth()->user()->name}} di Menu Utama DigiPen <br>
            Sistem DigiPen Digunakan untuk melakukan Pendataan Sarana dan Prasarana pada Sekolah di Kabupaten Kotabaru
            </p>
        </div>
    </div>
</div>
@endsection
