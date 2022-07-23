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
                <a class="nav-main-link{{ request()->is('administrator/pendataan/sekolah*') ? ' active' : '' }}" href="{{route('sekolah.index')}}">
                <i class="nav-main-link-icon fa fa-school"></i>
                <span class="nav-main-link-name">Data Sekolah</span>
                </a>
            </li>
            <li class="nav-main-heading">Website</li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('administrator/blog*') ? ' active' : '' }}" href="{{route('blog.index')}}">
                <i class="nav-main-link-icon fa fa-newspaper"></i>
                <span class="nav-main-link-name">News / Blog</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('administrator/roadmap*') ? ' active' : '' }}" href="{{route('roadmap.index')}}">
                <i class="nav-main-link-icon fa fa-map-signs"></i>
                <span class="nav-main-link-name">Roadmap</span>
                </a>
            </li>
            <!-- <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('rukel') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-door-open"></i>
                <span class="nav-main-link-name">Data Ruang</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('sarpras') ? ' active' : '' }}" href="#">
                <i class="nav-main-link-icon fa fa-couch"></i>
                <span class="nav-main-link-name">Sarana Prasarana</span>
                </a>
            </li> -->
            <li class="nav-main-heading">Pengaturan</li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="/">
                <i class="nav-main-link-icon fa fa-users"></i>
                <span class="nav-main-link-name">Data User</span>
                </a>
            </li>
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