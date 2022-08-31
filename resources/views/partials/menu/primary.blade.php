<div class="js-sidebar-scroll">
    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                <i class="nav-main-link-icon fa fa-location-arrow"></i>
                <span class="nav-main-link-name">Dashboard</span>
                <!-- <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span> -->
                </a>
            </li>
            <li class="nav-main-heading">Pendataan</li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/school*') ? ' active' : '' }}" href="{{route('school.edit', auth()->user()->id_sekolah)}}">
                <i class="nav-main-link-icon fa fa-school"></i>
                <span class="nav-main-link-name">Identitas Sekolah</span>
                </a>
            </li>
            <!-- <li class="nav-main-item{{ request()->is('primary/pendataan/jumlah*') || request()->is('primary/pendataan/informasi*') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-users"></i>
                  <span class="nav-main-link-name">Informasi Sekolah</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('primary/pendataan/jumlah*') ? ' active' : '' }}" href="{{route('jumlah.index')}}">
                      <span class="nav-main-link-name">Informasi Guru & Siswa</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('primary/pendataan/informasi*') ? ' active' : '' }}" href="{{route('informasi.index')}}">
                      <span class="nav-main-link-name">Informasi Teknologi Sekolah</span>
                    </a>
                  </li>
                </ul>
            </li> -->
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/jumlah*') ? ' active' : '' }}" href="{{route('jumlah.index')}}">
                <i class="nav-main-link-icon fa fa-users"></i>
                <span class="nav-main-link-name">Informasi Guru & Siswa</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/kelas*') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Fasilitas Ruangan</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/peralatan*') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-toolbox"></i>
                <span class="nav-main-link-name">Fasilitas Peralatan</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/informasi*') ? ' active' : '' }}" href="{{route('informasi.index')}}">
                <i class="nav-main-link-icon fa fa-book"></i>
                <span class="nav-main-link-name">Fasilitas Sistem Online</span>
                </a>
            </li>

            <li class="nav-main-heading">Media</li>
            
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/penunjang*') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-images"></i>
                <span class="nav-main-link-name">Galery</span>
                </a>
            </li>
            <!-- <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/sanitasi*') ? ' active' : '' }}" href="{{route('sanitasi.index')}}">
                <i class="nav-main-link-icon fa fa-hands-wash"></i>
                <span class="nav-main-link-name">Sarpras Sanitasi</span>
                </a>
            </li>
            
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('sarpras') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-bolt"></i>
                <span class="nav-main-link-name">Utilitas Pendukung</span>
                </a>
            </li> -->

            <li class="nav-main-heading">Pengaturan</li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="#" onclick="confirmLogout()">
                    <i class="nav-main-link-icon fa fa-sign-out-alt"></i>
                    <span class="nav-main-link-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</div>