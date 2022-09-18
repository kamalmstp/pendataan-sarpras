
  @include('partials.frontend.header')
  <body>
    <div id="page-container" class="side-scroll page-header-fixed main-content-boxed">
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header bg-primary">
          <!-- Logo -->
          <a class="fw-semibold text-white tracking-wide" href="index.html">
            DigiPen<span class="opacity-75"> Kotabaru</span>
            <!-- <span class="fw-normal">Slim</span> -->
          </a>
          <!-- END Logo -->

          <!-- Options -->
          <div>
            <!-- Close Sidebar, Visible only on mobile screens -->
            <a class="d-lg-none text-white ms-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-times-circle"></i>
            </a>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side content-side-full">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link active" href="db_corporate_slim.html">
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
                <a class="nav-main-link" href="">
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
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header justify-content-center justify-content-lg-between">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <a class="fw-semibold text-dual tracking-wide" href="#">
              <img class="img img-avatar32 img-avatar-thumb" src="{{asset('img/header.png')}}" width="50%" alt="">
              <!-- DigiPen <span class="opacity-75">Kotabaru</span> -->
            </a>
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div>
            <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block ms-3">
              <li class="nav-main-item">
                <a class="nav-main-link active" href="#">
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
                <a class="nav-main-link" href="{{route('roadmap')}}">
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
          <!-- END Right Section -->
        </div>

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">

        <!-- <div class="bg-image" style="background-image: url({{asset('media/photos/photo15@2x.jpg')}});">
          <div class="bg-primary-dark-op">
            <div class="content content-full">
              <div class="py-3 text-center">
                <h1 class="text-white mb-2">Get Started</h1>
                <h2 class="h4 fw-normal text-white-75 mb-0">Let us show you how to start building!</h2>
              </div>
            </div>
          </div>
        </div> -->
        <div class="bg-body-extra-light">
          <div class="content content-full">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="ratio ratio-16x9">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('img/29493.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p class="lead">
                        <a href="#" target="blank">
                          <!-- <span class="abu">Some representative placeholder content for the first slide.</span> -->
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/5712609.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p class="lead">
                        <a href="#" target="blank">
                          <!-- <span class="abu">Some representative placeholder content for the first slide.</span> -->
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/5712616.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p class="lead">
                        <a href="#" target="blank">
                          <!-- <span class="abu">Some representative placeholder content for the first slide.</span> -->
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="col-md-6">
            <div class="col-md py-3 d-md-flex align-items-md-center">
              <div class="col-md-12" style="padding-right:15px;">
                <div class="py-3">
                  <h1 class="display-3 lh-1 mb-1 fw-bold">Digitalisasi Pendidikan<br/>Kab. Kotabaru</h1>
                </div>
                <!-- <h2 class="h5 fw-normal text-muted" style="text-align: justify;"> -->
                <h2 class="h5 fw-normal text-muted">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </h2>
              </div>
              <div class="col-md-12" style="padding-left:15px;">
                <!-- <div class="text-center py-3">
                  <h1 class="h3 fw-bold mb-2">Digitalisasi Pendidikan Kotabaru</h1>
                </div> -->
                <!-- <h2 class="h5 fw-normal text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2> -->
                <div class="col-sm-12 align-self-center">
                  <div class="badge bg-primary" style="font-size: .9rem">
                    Temukan Sekolah?
                  </div>
                  <div class="card rounded-0 shadow-sm">
                    <div class="card-body">
                      <form methods="GET" action="#" autocomplete="off">
                        <input type="hidden" name="_token" value="mb7o2jcE1IWM8Yg75NDtx9QKAALBNh00S9Wuo5dI">
                        <div class="input-group align-self">
                          <input type="search" class="form-control no-focus" name="car_sek" id="car_sek" placeholder="Cari Sekolah ...">
                          <div class="input-group-append">
                            <span class="input-group-text no-focus bg-white">
                              <button type="submit" class="btn btn-primary">Cari</button>
                            </span>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row my-4">
                    <div class="col-md-6">
                      <a href="#" style="text-decoration:none;">
                        <div class="text-center">
                          <h2 class="text-primary">333</h2>
                          <p class="text-dark">Sekolah Dasar</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-6">
                      <a href="#" style="text-decoration:none;">
                        <div class="text-center">
                          <h2 class="text-primary">999</h2>
                          <p class="text-dark">Sekolah Menengah Pertama</p>
                        </div>
                      </a>
                    </div>
                    <!-- <div class="col-md-4">
                      <a href="#" style="text-decoration:none;">
                        <div class="text-center">
                          <h2 class="text-primary">666</h2>
                          <p class="text-dark"></p>
                        </div>
                      </a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-header-dark">
          <div class="content content-full">
            <div class="row pt-3">
              <div class="col-md py-3 d-md-flex align-items-md-center text-center">
                <div class="row gx-5 justify-content-center d-none d-md-block text-white">
                  <div class="col-xl-12">
                    <div class="h2 fs-1 mb-4">Visi, Misi, dan Tujuan</div>
                    <div class="row">
                      <div class="col-xl-4 col-md-4">
                        <div class="icon-box with-line">
                          <div class="my-4">
                            <h3>Visi</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-md-4">
                        <div class="icon-box with-line">
                          <div class="my-4">
                            <h3>Misi</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-md-4">
                        <div class="icon-box">
                          <div class="my-4">
                            <h3>Tujuan</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="d-flex justify-content-between mx-md-3 mb-2 mt-3">
            <div>
              <h3 class="default-font text-muted">Daftar Berita</h3>
            </div>
            <div>
              <a href="#" class="text-decoration-none text-primary">Lihat semua berita→</a>
            </div>
          </div>
          <div class="row items-push">
            <div class="col-lg-4">
              <a class="block block-rounded block-link-pop h-100 mb-0" href="javascript:void(0)">
                <img class="img-fluid" src="{{asset('media/photos/photo21@2x.jpg')}}" alt="...">
                <div class="block-content">
                  <h4 class="mb-1">Get things done</h4>
                  <p class="fs-sm">
                    <span class="text-primary">Carol Ray</span> on March 30, 2019 · <span class="text-muted">9 min</span>
                  </p>
                  <p>
                    Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet....
                  </p>
                </div>
              </a>
            </div>
            <div class="col-lg-4">
              <a class="block block-rounded block-link-pop h-100 mb-0" href="javascript:void(0)">
                <img class="img-fluid" src="{{asset('media/photos/photo13@2x.jpg')}}" alt="...">
                <div class="block-content">
                  <h4 class="mb-1">What to do in the night market</h4>
                  <p class="fs-sm">
                    <span class="text-primary">Justin Hunt</span> on March 24, 2019 · <span class="text-muted">8 min</span>
                  </p>
                  <p>
                    Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet....
                  </p>
                </div>
              </a>
            </div>
            <div class="col-lg-4">
              <a class="block block-rounded block-link-pop h-100 mb-0" href="javascript:void(0)">
                <img class="img-fluid" src="{{asset('media/photos/photo23@2x.jpg')}}" alt="...">
                <div class="block-content">
                  <h4 class="mb-1">Work &amp; Travel</h4>
                  <p class="fs-sm">
                    <span class="text-primary">Albert Ray</span> on March 21, 2019 · <span class="text-muted">14 min</span>
                  </p>
                  <p>
                    Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet....
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </main>
      
        <!-- <div class="bg-body-extra-light">
          <div class="content content-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.403136934577!2d116.22489031472026!3d-3.249554441834845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2def302b2ced3c85%3A0x89e9d007fad8f406!2sDinas%20Pendidikan%20dan%20Kebudayaan%20Kabupaten%20Kotabaru!5e0!3m2!1sen!2sid!4v1659279976558!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div> -->

      @include('partials.frontend.footer')
    </div>

    <script src="{{asset('js/dashmix.app.min.js')}}"></script>
    <script src="{{asset('js/plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('js/pages/db_corporate_slim.min.js')}}"></script>
  </body>
</html>
