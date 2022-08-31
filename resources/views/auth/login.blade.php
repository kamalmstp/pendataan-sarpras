@extends('layouts.simple')

@section('content')
<div class="bg-image" style="background-image: url({{ asset('media/photos/bg-login.jpg') }});">
    <div class="row g-0 bg-primary-op">
    <!-- Main Section -->
    <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
        <div class="p-3 w-100">
        <!-- Header -->
        <div class="mb-3 text-center">
            <a class="link-fx fw-bold fs-1" href="#">
            </a>
            <img src="{{asset('img/header_front.png')}}" width="20%" alt="">
            <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
        </div>

        <div class="row g-0 justify-content-center">
            <div class="col-sm-8 col-xl-6">
            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="py-3">
                <div class="mb-4">
                    <input type="text" class="form-control form-control-lg form-control-alt @error('username') is-invalid @enderror" id="login-username" name="username" placeholder="Username" value="{{ old('username') }}" autocomplete="off">
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" id="login-password" name="password" placeholder="Password" autocomplete="off">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
                <div class="mb-4">
                <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                    <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                </button>
                </div>
            </form>
            </div>
        </div>
        <!-- END Sign In Form -->
        </div>
    </div>
    <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
        <div class="p-3">
        <p class="display-4 fw-bold text-white mb-3">
            
            <img src="{{asset('img/header.png')}}" width="100%" alt="">
        </p>
        <p class="fs-lg fw-semibold text-white-75 mb-0">
            Copyright &copy; <span data-toggle="year-copy"></span>
        </p>
        </div>
    </div>
    <!-- END Meta Info Section -->
    </div>
</div>
@endsection