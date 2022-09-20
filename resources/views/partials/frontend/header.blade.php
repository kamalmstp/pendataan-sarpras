{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru</title>

    <meta name="description" content="Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru">
    <meta name="author" content="Mustapa Ahmad Kamal">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{asset('img/icon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('img/icon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/icon.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('css/dashmix.min.css')}}">
    <!-- <link rel="stylesheet" id="css-theme" href="{{asset('css/themes/xwork.min.css')}}"> -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{asset('css/themes/xpro.css')}}"> -->
  </head> --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/icon.png')}}" rel="icon">
  <link href="{{asset('img/icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v4.9.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<!-- ======= Top Bar ======= -->
<div id="topbar" class="fixed-top d-flex align-items-center" style="background-color: #1e74be">
  <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
      <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
    </div>
  </div>
</div>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center" style="background-color: #1e67a8">
  <div class="container d-flex align-items-center justify-content-between">

    {{-- <h1 class="logo"><a href="{{url('/')}}">Anyar</a></h1> --}}
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="{{url('/')}}" class="logo"><img src="{{asset('img/Asset 2@4x.png')}}" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto " href="#berita">Berita</a></li>
        <li><a class="nav-link scrollto " href="#tentang">Tentang</a></li>
        <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->