<header id="page-header">
    <div class="content-header">
    <div class="space-x-1">
        <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
        </button>
    </div>

    <div class="space-x-1">
        <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user d-sm-none"></i>
            <span class="d-none d-sm-inline-block">{{auth()->user()->name}}</span>
            <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
            <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
            User Options
            </div>
            <div class="p-2">

            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="fa fa-fw fa-key mr-1"></i> Ubah Password
            </a>

            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item dropdown-item bg-danger text-white" href="javascript:void(0)" onclick="confirmLogout()">
                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
            </a>
            </div>
        </div>
        </div>
        <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
        <i class="far fa-fw fa-list-alt"></i>
        </button>
    </div>
    </div>

    <div id="page-header-loader" class="overlay-header bg-header-dark">
    <div class="bg-white-10">
        <div class="content-header">
        <div class="w-100 text-center">
            <i class="fa fa-fw fa-sun fa-spin text-white"></i>
        </div>
        </div>
    </div>
    </div>
</header>