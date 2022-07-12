<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('css/dashmix.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header


      FOOTER

        ''                                          Static Footer if no class is added
        'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-dark'                          Dark themed Header
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="page-header-dark main-content-boxed">

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="fw-semibold text-dual tracking-wide" href="#">
              Dash<span class="opacity-75">mix</span>
              <span class="fw-normal">Boxed</span>
            </a>
            <!-- END Logo -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div>
            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-alt-secondary ms-2" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle"></i>
                <i class="fa fa-angle-down opacity-50 ms-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                <div class="rounded-top fw-semibold text-white bg-image" style="background-image: url({{asset('media/photos/photo20.jpg')}});">
                  <div class="p-3 bg-black-50 rounded-top">
                    <div class="d-flex align-items-center">
                      <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{asset('media/avatars/avatar3.jpg')}}" alt="">
                      <div class="ms-3">
                        <a class="text-white fw-semibold" href="be_pages_generic_profile.html">Carol Ray</a>
                        <div class="fs-sm text-white-75">c.ray@example.com</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-2">
                  <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                    <div>
                      <i class="fa fa-fw fa-globe opacity-50 me-1"></i>
                      Projects
                    </div>
                    <span class="badge rounded-pill bg-primary">3</span>
                  </a>
                  <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                    <div>
                      <i class="fa fa-fw fa-sync-alt opacity-50 me-1"></i>
                      Servers
                    </div>
                    <span class="badge rounded-pill bg-primary">1</span>
                  </a>
                  <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                    <div>
                      <i class="fa fa-fw fa-users opacity-50 me-1"></i>
                      Customers
                    </div>
                    <span class="badge rounded-pill bg-primary">15</span>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                    <i class="fa fa-fw fa-user-circle opacity-50 me-1"></i>
                    Profile
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                    <i class="fab fa-fw fa-paypal opacity-50 me-1"></i>
                    Billing
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
                    <i class="fa fa-fw fa-wrench opacity-50 me-1"></i>
                    Preferences
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center mb-0" href="op_auth_signin.html">
                    <i class="fa fa-fw fa-sign-out-alt text-danger me-1"></i>
                    Log Out
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-sidebar-dark">
          <div class="content-header">
            <form class="w-100" action="bd_search.html" method="POST">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search your projects.." id="page-header-search-input" name="page-header-search-input">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-sidebar-dark">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-2x fa-spinner fa-spin text-primary"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">

        <!-- Navigation -->
        <div class="bg-sidebar-dark">
          <div class="content">
            <!-- Toggle Main Navigation -->
            <div class="d-lg-none push">
              <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
              <button type="button" class="btn w-100 btn-primary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- END Toggle Main Navigation -->

            <!-- Main Navigation -->
            <div id="main-navigation" class="d-none d-lg-block push">
              <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
                <li class="nav-main-item">
                  <a class="nav-main-link active" href="bd_dashboard.html">
                    <i class="nav-main-link-icon fa fa-compass"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                  </a>
                </li>
                <li class="nav-main-heading">Variations</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                    <span class="nav-main-link-name">Variations</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_simple_1.html">
                        <span class="nav-main-link-name">Simple 1</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_simple_2.html">
                        <span class="nav-main-link-name">Simple 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_image_1.html">
                        <span class="nav-main-link-name">Image 1</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_image_2.html">
                        <span class="nav-main-link-name">Image 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_video_1.html">
                        <span class="nav-main-link-name">Video 1</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="bd_video_2.html">
                        <span class="nav-main-link-name">Video 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">More Options</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <span class="nav-main-link-name">Another Link</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <span class="nav-main-link-name">Another Link</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="javascript:void(0)">
                            <span class="nav-main-link-name">Another Link</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="bd_search.html">
                    <i class="nav-main-link-icon fa fa-search"></i>
                    <span class="nav-main-link-name">Search</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_pages_dashboard.html">
                    <i class="nav-main-link-icon fa fa-undo"></i>
                    <span class="nav-main-link-name">Go Back</span>
                  </a>
                </li>
                <li class="nav-main-heading">Extra</li>
                <li class="nav-main-item ms-lg-auto">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-brush"></i>
                    <span class="nav-main-link-name d-lg-none">Themes</span>
                  </a>
                  <ul class="nav-main-submenu nav-main-submenu-right">
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-default"></i>
                        <span class="nav-main-link-name">Default</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="{{asset('css/themes/xwork.min.css')}}" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xwork"></i>
                        <span class="nav-main-link-name">xWork</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="{{asset('css/themes/xmodern.min.css')}}" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xmodern"></i>
                        <span class="nav-main-link-name">xModern</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="{{asset('css/themes/xeco.min.css')}}" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xeco"></i>
                        <span class="nav-main-link-name">xEco</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="{{asset('css/themes/xsmooth.min.css')}}" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xsmooth"></i>
                        <span class="nav-main-link-name">xSmooth</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="{{asset('css/themes/xinspire.min.css')}}" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xinspire"></i>
                        <span class="nav-main-link-name">xInspire</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="{{asset('css/themes/xdream.min.css')}}" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xdream"></i>
                        <span class="nav-main-link-name">xDream</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="{{asset('css/themes/xpro.min.css')}}" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xpro"></i>
                        <span class="nav-main-link-name">xPro</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="{{asset('css/themes/xplay.min.css')}}" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xplay"></i>
                        <span class="nav-main-link-name">xPlay</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- END Main Navigation -->
          </div>
        </div>
        <!-- END Navigation -->
        <!-- Page Content -->
        <div class="content">
          <!-- Quick Stats -->
          <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.jqSparkline() -->
          <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
          <div class="row">
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div>
                    <!-- Sparkline Dashboard Users Container -->
                    <span class="js-sparkline" data-type="line"
                          data-points="[340,330,360,340,360,350,370,360]"
                          data-width="90px"
                          data-height="40px"
                          data-line-color="#82b54b"
                          data-fill-color="transparent"
                          data-spot-color="transparent"
                          data-min-spot-color="transparent"
                          data-max-spot-color="transparent"
                          data-highlight-spot-color="#82b54b"
                          data-highlight-line-color="#82b54b"
                          data-tooltip-suffix="Users"></span>
                  </div>
                  <div class="ms-3 text-end">
                    <p class="text-muted mb-0">
                      Users
                    </p>
                    <p class="fs-3 mb-0">
                      +350
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div>
                    <!-- Sparkline Dashboard Tickets Container -->
                    <span class="js-sparkline" data-type="line"
                          data-points="[21,17,19,25,24,25,18,27]"
                          data-width="90px"
                          data-height="40px"
                          data-line-color="#e04f1a"
                          data-fill-color="transparent"
                          data-spot-color="transparent"
                          data-min-spot-color="transparent"
                          data-max-spot-color="transparent"
                          data-highlight-spot-color="#e04f1a"
                          data-highlight-line-color="#e04f1a"
                          data-tooltip-suffix="Tickets"></span>
                  </div>
                  <div class="ms-3 text-end">
                    <p class="text-muted mb-0">
                      Tickets
                    </p>
                    <p class="fs-3 mb-0">
                      28
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div>
                    <!-- Sparkline Dashboard Projects Container -->
                    <span class="js-sparkline" data-type="line"
                          data-points="[7,9,5,2,3,4,8,3]"
                          data-width="90px"
                          data-height="40px"
                          data-line-color="#3c90df"
                          data-fill-color="transparent"
                          data-spot-color="transparent"
                          data-min-spot-color="transparent"
                          data-max-spot-color="transparent"
                          data-highlight-spot-color="#3c90df"
                          data-highlight-line-color="#3c90df"
                          data-tooltip-suffix="Projects"></span>
                  </div>
                  <div class="ms-3 text-end">
                    <p class="text-muted mb-0">
                      Projects
                    </p>
                    <p class="fs-3 mb-0">
                      6
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-xl-3">
              <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div>
                    <!-- Sparkline Dashboard Sales Container -->
                    <span class="js-sparkline" data-type="line"
                          data-points="[68,25,36,62,59,80,75,89]"
                          data-width="90px"
                          data-height="40px"
                          data-line-color="#343a40"
                          data-fill-color="transparent"
                          data-spot-color="transparent"
                          data-min-spot-color="transparent"
                          data-max-spot-color="transparent"
                          data-highlight-spot-color="#343a40"
                          data-highlight-line-color="#343a40"
                          data-tooltip-suffix="Sales"></span>
                  </div>
                  <div class="ms-3 text-end">
                    <p class="text-muted mb-0">
                      Sales
                    </p>
                    <p class="fs-3 mb-0">
                      +89
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- END Quick Stats -->

          <!-- Main Chart -->
          <div class="block block-rounded block-mode-loading-refresh">
            <div class="block-header block-header-default">
              <h3 class="block-title">Earnings</h3>
              <div class="block-options">
                <div class="btn-group btn-group-sm me-2" role="group" aria-label="Earnings Select Date Group">
                  <input type="radio" class="btn-check" name="dashboard-chart-options" id="dashboard-chart-options-week" autocomplete="off">
                  <label class="btn btn-primary" for="dashboard-chart-options-week" data-toggle="dashboard-chart-set-week">Week</label>

                  <input type="radio" class="btn-check" name="dashboard-chart-options" id="dashboard-chart-options-month" autocomplete="off">
                  <label class="btn btn-primary" for="dashboard-chart-options-month" data-toggle="dashboard-chart-set-month">Month</label>

                  <input type="radio" class="btn-check" name="dashboard-chart-options" id="dashboard-chart-options-year" autocomplete="off" checked>
                  <label class="btn btn-primary" for="dashboard-chart-options-year" data-toggle="dashboard-chart-set-year">Year</label>
                </div>
                <button type="button" class="btn-block-option align-middle" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
              </div>
            </div>
            <div class="block-content block-content-full overflow-hidden">
              <div class="pull-x pull-b">
                <!-- Chart.js Dashboard Earnings Container -->
                <canvas id="js-chartjs-dashboard-earnings" height="340"></canvas>
              </div>
            </div>
          </div>
          <!-- END Main Chart -->

          <!-- Users and Purchases -->
          <div class="row items-push">
            <div class="col-xl-6">
              <!-- Users -->
              <div class="block block-rounded block-mode-loading-refresh h-100 mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Users</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-cloud-download"></i>
                    </button>
                    <div class="dropdown">
                      <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="si si-wrench"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-user me-1"></i> New Users
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-bookmark me-1"></i> VIP Users
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="fa fa-fw fa-pencil-alt"></i> Manage
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-dark">
                  <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                    <input type="text" class="form-control form-control-alt" placeholder="Search Users..">
                  </form>
                </div>
                <div class="block-content">
                  <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                    <thead>
                      <tr class="text-uppercase">
                        <th class="fw-bold text-center" style="width: 120px;">Avatar</th>
                        <th class="fw-bold">Name</th>
                        <th class="d-none d-sm-table-cell fw-bold">Access</th>
                        <th class="fw-bold text-center" style="width: 60px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{asset('media/avatars/avatar1.jpg')}}" alt="">
                        </td>
                        <td>
                          <div class="fw-semibold fs-base">Carol Ray</div>
                          <div class="text-muted">carol@example.com</div>
                        </td>
                        <td class="d-none d-sm-table-cell fs-base">
                          <span class="badge bg-dark">VIP</span>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{asset('media/avatars/avatar12.jpg')}}" alt="">
                        </td>
                        <td>
                          <div class="fw-semibold fs-base">Jose Mills</div>
                          <div class="text-muted">smith@example.com</div>
                        </td>
                        <td class="d-none d-sm-table-cell fs-base">
                          <span class="badge bg-black-50">Pro</span>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{asset('media/avatars/avatar16.jpg')}}" alt="">
                        </td>
                        <td>
                          <div class="fw-semibold fs-base">David Fuller</div>
                          <div class="text-muted">john@example.com</div>
                        </td>
                        <td class="d-none d-sm-table-cell fs-base">
                          <span class="badge bg-dark">VIP</span>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{asset('media/avatars/avatar3.jpg')}}" alt="">
                        </td>
                        <td>
                          <div class="fw-semibold fs-base">Helen Jacobs</div>
                          <div class="text-muted">lori@example.com</div>
                        </td>
                        <td class="d-none d-sm-table-cell fs-base">
                          <span class="badge bg-black-50">Pro</span>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{asset('media/avatars/avatar9.jpg')}}" alt="">
                        </td>
                        <td>
                          <div class="fw-semibold fs-base">Justin Hunt</div>
                          <div class="text-muted">jack@example.com</div>
                        </td>
                        <td class="d-none d-sm-table-cell fs-base">
                          <span class="badge bg-success">Free</span>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END Users -->
            </div>
            <div class="col-xl-6">
              <!-- Purchases -->
              <div class="block block-rounded block-mode-loading-refresh h-100 mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Purchases</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-cloud-download"></i>
                    </button>
                    <div class="dropdown">
                      <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="si si-wrench"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="fa fa-fw fa-sync fa-spin text-warning me-1"></i> Pending
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-times-circle text-danger me-1"></i> Cancelled
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-check-circle text-success me-1"></i> Cancelled
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="fa fa-fw fa-eye me-1"></i> View All
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-dark">
                  <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                    <input type="text" class="form-control form-control-alt" placeholder="Search Purchases..">
                  </form>
                </div>
                <div class="block-content">
                  <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                    <thead>
                      <tr class="text-uppercase">
                        <th class="fw-bold">Product</th>
                        <th class="d-none d-sm-table-cell fw-bold">Date</th>
                        <th class="fw-bold">State</th>
                        <th class="d-none d-sm-table-cell fw-bold text-end" style="width: 120px;">Price</th>
                        <th class="fw-bold text-center" style="width: 60px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="fw-semibold">iPhone X</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $999,99
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">MacBook Pro 15"</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $2.299,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Nvidia GTX 1080 Ti</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $1200,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Playstation 4 Pro</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-danger">Cancelled</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $399,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Nintendo Switch</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $349,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">iPhone X</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $999,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Echo Dot</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $39,99
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Xbox One X</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $499,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END Purchases -->
            </div>
          </div>
          <!-- END Users and Purchases -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="footer-static bg-body-extra-light">
        <div class="content py-4">
          <!-- Footer Navigation -->
          <div class="row items-push fs-sm border-bottom pt-4">
            <div class="col-6 col-md-4">
              <h3 class="fw-light">Account</h3>
              <ul class="list list-simple-mini">
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-users text-primary-lighter me-1"></i> Customers
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fab fa-fw fa-paypal text-primary-lighter me-1"></i> Billing
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-wrench text-primary-lighter me-1"></i> Preferences
                  </a>
                </li>
                <li>
                  <a class="fw-semibold text-dark" href="javascript:void(0)">
                    <i class="fa fa-fw fa-user-circle text-muted me-1"></i> Carol Ray
                  </a> -
                  <a class="fw-semibold text-danger" href="javascript:void(0)">
                    Log out?
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <h3 class="fw-light">Server</h3>
              <ul class="list list-simple-mini">
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-database text-primary-lighter me-1"></i> Databases
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-globe-americas text-primary-lighter me-1"></i> Domains
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-envelope text-primary-lighter me-1"></i> Emails
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-wrench text-primary-lighter me-1"></i> Management
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-6 col-md-4">
              <h3 class="fw-light">Projects</h3>
              <ul class="list list-simple-mini">
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-globe text-primary-lighter me-1"></i> example1.com
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-globe text-primary-lighter me-1"></i> example2.com
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-globe text-primary-lighter me-1"></i> example2.com
                  </a>
                </li>
                <li>
                  <a class="fw-semibold text-dark" href="javascript:void(0)">
                    <i class="fa fa-fw fa-plus text-muted me-1"></i> Add new project
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END Footer Navigation -->

          <!-- Footer Copyright -->
          <div class="row fs-sm pt-4">
            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">Dashmix 5.1</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
          <!-- END Footer Copyright -->
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at _js/main/app.js
    -->
    <script src="{{asset('js/dashmix.app.min.js')}}"></script>

    <!-- jQuery (required for jQuery Sparkline plugin) -->
    <script src="{{asset('js/lib/jquery.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/plugins/chart.js/chart.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('js/pages/be_pages_dashboard_v1.min.js')}}"></script>

    <!-- Page JS Helpers (jQuery Sparkline plugin) -->
    <script>Dashmix.helpersOnLoad(['jq-sparkline']);</script>
  </body>
</html>
