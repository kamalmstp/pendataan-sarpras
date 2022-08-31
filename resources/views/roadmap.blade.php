<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru</title>

    <meta name="description" content="Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru">
    <meta name="author" content="Mustapa Ahmad Kamal">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:title" content="Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="shortcut icon" href="{{asset('img/icon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('img/icon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/icon.png')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('css/dashmix.min.css')}}">
    <!-- <link rel="stylesheet" id="css-theme" href="{{asset('css/themes/xwork.min.css')}}"> -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{asset('css/themes/xpro.css')}}"> -->
  </head>
  <body>
    <div id="page-container" class="side-scroll page-header-fixed main-content-boxed">
      <nav id="sidebar" aria-label="Main Navigation">
        <div class="content-header bg-primary">
          <a class="fw-semibold text-white tracking-wide" href="index.html">
            DigiPen<span class="opacity-75"> Kotabaru</span>
          </a>
          <div>
            <a class="d-lg-none text-white ms-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-times-circle"></i>
            </a>
          </div>
        </div>

        <div class="js-sidebar-scroll">
          <div class="content-side content-side-full">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link" href="{{route('/')}}">
                  <i class="nav-main-link-icon fa fa-compass"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="{{route('daftar_sekolah')}}">
                  <i class="nav-main-link-icon fa fa-university"></i>
                  <span class="nav-main-link-name">Daftar Sekolah</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link active" href="{{route('roadmap')}}">
                  <i class="nav-main-link-icon fa fa-info-circle"></i>
                  <span class="nav-main-link-name">Tentang DigiPen</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="{{route('login')}}">
                  <i class="nav-main-link-icon fa fa-sign-in"></i>
                  <span class="nav-main-link-name">Login</span>
                </a>
              </li>
              <!-- <li class="nav-main-heading">More</li> -->
              <!-- <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-briefcase"></i>
                  <span class="nav-main-link-name">Projects</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-check"></i>
                      <span class="nav-main-link-name">Active</span>
                      <span class="nav-main-link-badge badge rounded-pill bg-success">3</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-users"></i>
                      <span class="nav-main-link-name">Colleagues</span>
                      <span class="nav-main-link-badge badge rounded-pill bg-primary">24</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-cog"></i>
                      <span class="nav-main-link-name">Manage</span>
                    </a>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>

      <header id="page-header">
        <div class="content-header justify-content-center justify-content-lg-between">
          <div class="d-flex align-items-center">
            <a class="fw-semibold text-dual tracking-wide" href="#">
              <img class="img img-avatar32 img-avatar-thumb" src="{{asset('img/header.png')}}" width="50%" alt="">
              <!-- DigiPen <span class="opacity-75">Kotabaru</span> -->
            </a>
          </div>

          <div>
            <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block ms-3">
              <li class="nav-main-item">
                <a class="nav-main-link" href="{{route('/')}}">
                  <i class="nav-main-link-icon fa fa-compass"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="{{route('daftar_sekolah')}}">
                  <i class="nav-main-link-icon fa fa-university"></i>
                  <span class="nav-main-link-name">Daftar Sekolah</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link active" href="{{route('roadmap')}}">
                  <i class="nav-main-link-icon fa fa-info-circle"></i>
                  <span class="nav-main-link-name">Tentang DigiPen</span>
                </a>
              </li>
              <li class="nav-main-item">
                  <a href="{{route('login')}}" type="button" class="btn btn-primary">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> Login
                  </a>
              </li>
            </ul>
            <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
          </div>
        </div>

        <div id="page-header-loader" class="overlay-header bg-primary-darker">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
      </header>

    <main id="main-container">
        <div class="bg-image" style="background-image: url({{asset('img/29493.jpg')}});">
          <div class="bg-primary-dark-op">
            <div class="content content-full">
              <div class="py-3 text-center">
                <h1 class="text-white mb-2">Tentang DigiPen</h1>
                <h2 class="h4 fw-normal text-white-75 mb-0">Tentang DigiPen dan Alur DigiPen</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                <h3 class="block-title">Tentang & Alur Digitalisasi Pendidikan</h3>
                </div>
                <div class="block-content">
                    @foreach($data as $row)
                        <div class="text-center">
                            <img src="{{asset('storage/roadmap/'.$row->roadmap)}}" width="100%" alt="">
                        </div>
                        <br>
                    @endforeach
                    <br><br>
                </div>
            </div>
        </div>
    </main>

    @include('partials.frontend.footer')
    </div>

    <script src="{{asset('js/dashmix.app.min.js')}}"></script>
    <script src="{{asset('js/plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('js/pages/db_corporate_slim.min.js')}}"></script>
  </body>
</html>
