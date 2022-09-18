@include('partials.frontend.header')
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
                <a class="nav-main-link active" href="{{route('daftar_sekolah')}}">
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
                <a class="nav-main-link active" href="{{route('daftar_sekolah')}}">
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
        <div class="bg-image" style="background-image: url({{asset('media/photos/photo15@2x.jpg')}});">
          <div class="bg-primary-dark-op">
            <div class="content content-full">
              <div class="py-3 text-center">
                <h1 class="text-white mb-2">Daftar Sekolah</h1>
                <h2 class="h4 fw-normal text-white-75 mb-0">Daftar Semua Sekolah yang Terdata</h2>
              </div>
            </div>
          </div>
        </div>
        
        <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Daftar Sekolah</h3>
              <div class="block-options">
                <div class="dropdown">
                  <button type="button" class="btn btn-alt-secondary" id="dropdown-ecom-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All <i class="fa fa-angle-down ms-1"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-ecom-filters">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      SD
                      <span class="badge bg-success rounded-pill">27</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      SMP
                      <span class="badge bg-danger rounded-pill">9</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      All
                      <span class="badge bg-black-50 rounded-pill">36</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-content bg-body-dark">
              <form action="#" method="POST" onsubmit="return false;">
                <div class="mb-4">
                  <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search" name="dm-ecom-products-search" placeholder="Cari Sekolah">
                </div>
              </form>
              <!-- END Search Form -->
            </div>
            <div class="block-content">
              <!-- All Products Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 10px;">No</th>
                      <th class="d-none d-sm-table-cell">Nama Sekolah</th>
                      <th class="d-none d-sm-table-cell">Kecamatan</th>
                      <th class="d-none d-md-table-cell text-center">NPSN</th>
                      <th class="d-none d-md-table-cell text-center">Tingkat</th>
                      <th class="d-none d-sm-table-cell text-center">Status</th>
                      <th class="text-center">Rombel</th>
                      <th class="text-center">Siswa</th>
                      <th class="text-center">Guru</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(!empty($data) && $data->count())
                    @php $i = 1; @endphp
                    @foreach($data as $row)
                        <tr>
                            <td class="text-center fs-sm">
                                {{ $i++ }}
                            </td>
                            <td class="d-none d-sm-table-cell fs-sm">
                                <a class="fw-semibold" href="be_pages_ecom_product_edit.html">
                                    <strong>{{$row->nama_sekolah}}</strong>
                                </a>
                            </td>
                            <td class="d-none d-md-table-cell fs-sm">
                                {{$row->kecamatan}}
                            </td>
                            <td class="d-none text-center d-md-table-cell fs-sm">
                                {{$row->npsn}}
                            </td>
                            <td>
                                @if($row->tingkat == "SD")
                                <div class="text-center">
                                <span class="badge bg-success">SD</span>
                                </div>
                                @elseif($row->tingkat == "SMP")
                                <div class="text-center">
                                <span class="badge bg-default">SMP</span>
                                </div>
                                @endif
                            </td>
                            <td class="text-center fs-sm">
                                {{$row->status}}
                            </td>
                            <td class="text-center fs-sm">
                                {{$row->jumlah_rombel}}
                            </td>
                            <td class="text-center fs-sm">
                                {{$row->jumlah_siswa}}
                            </td>
                            <td class="text-center fs-sm">
                                {{$row->jumlah_guru}}
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8">There are no data.</td>
                    </tr>
                  @endif
                  </tbody>
                </table>
              </div>
              <!-- END All Products Table -->

              <!-- Pagination -->
              <!-- <nav aria-label="Photos Search Navigation">
                <ul class="pagination justify-content-end mt-2">
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                      Prev
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                      Next
                    </a>
                  </li>
                </ul>
              </nav> -->
              {!! $data->links() !!}
              <!-- END Pagination -->
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