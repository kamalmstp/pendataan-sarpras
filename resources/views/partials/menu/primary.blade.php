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
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/kelas*') ? ' active' : '' }}" href="{{route('kelas.index')}}">
                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Ruang Kelas</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/penunjang*') ? ' active' : '' }}" href="{{route('penunjang.index')}}">
                <i class="nav-main-link-icon fa fa-home"></i>
                <span class="nav-main-link-name">Ruang Penunjang</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('primary/pendataan/sanitasi*') ? ' active' : '' }}" href="{{route('sanitasi.index')}}">
                <i class="nav-main-link-icon fa fa-hands-wash"></i>
                <span class="nav-main-link-name">Sarpras Sanitasi</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('perpustakaan') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-book"></i>
                <span class="nav-main-link-name">Perpustakaan</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('peralatan') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-toolbox"></i>
                <span class="nav-main-link-name">Peralatan Pendidikan</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('sarpras') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-bolt"></i>
                <span class="nav-main-link-name">Utilitas Pendukung</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('sarpras') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-users"></i>
                <span class="nav-main-link-name">Jumlah Siswa & Guru</span>
                </a>
            </li>

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