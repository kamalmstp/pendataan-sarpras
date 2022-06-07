<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="fw-semibold text-white tracking-wide" href="/">
        <span class="smini-visible">
            D<span class="opacity-75">x</span>
        </span>
        <span class="smini-hidden">
            Dash<span class="opacity-75">mix</span>
        </span>
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
        <!-- Toggle Sidebar Style -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
        </button>
        <!-- END Toggle Sidebar Style -->

        <!-- Dark Mode -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
            <i class="far fa-moon" id="dark-mode-toggler"></i>
        </button>
        <!-- END Dark Mode -->

        <!-- Close Sidebar, Visible only on mobile screens -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-times-circle"></i>
        </button>
        <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
    </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
        <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
            <i class="nav-main-link-icon fa fa-location-arrow"></i>
            <span class="nav-main-link-name">Dashboard</span>
            <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is('data-sekolah') ? ' active' : '' }}" href="/data-sekolah">
            <i class="nav-main-link-icon fa-solid fa-school"></i>
            <span class="nav-main-link-name">Data Sekolah</span>
            <!-- <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span> -->
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is('rukel') ? ' active' : '' }}" href="#">
            <i class="nav-main-link-icon fa-solid fa-door-open"></i>
            <span class="nav-main-link-name">Data Ruang</span>
            <!-- <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span> -->
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is('sarpras') ? ' active' : '' }}" href="#">
            <i class="nav-main-link-icon fa-solid fa-scissors"></i>
            <span class="nav-main-link-name">Sarana Prasarana</span>
            <!-- <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span> -->
            </a>
        </li>
        <li class="nav-main-heading">Various</li>
        <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
            <i class="nav-main-link-icon fa fa-lightbulb"></i>
            <span class="nav-main-link-name">Examples</span>
            </a>
            <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                <span class="nav-main-link-name">DataTables</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}" href="/pages/slick">
                <span class="nav-main-link-name">Slick Slider</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                <span class="nav-main-link-name">Blank</span>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-main-heading">More</li>
        <li class="nav-main-item">
            <a class="nav-main-link" href="/">
            <i class="nav-main-link-icon fa fa-globe"></i>
            <span class="nav-main-link-name">Landing</span>
            </a>
        </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>