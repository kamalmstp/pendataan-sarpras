<aside id="side-overlay">
      <div class="bg-image" style="background-image: url('{{ asset('media/various/bg_side_overlay_header.jpg') }}');">
        <div class="bg-primary-op">
          <div class="content-header">
            <!-- User Avatar -->
            <a class="img-link me-1" href="javascript:void(0)">
              <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
            </a>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ms-2">
              <a class="text-white fw-semibold" href="javascript:void(0)">George Taylor</a>
              <div class="text-white-75 fs-sm">Full Stack Developer</div>
            </div>
            <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
              <i class="fa fa-times-circle"></i>
            </a>
            <!-- END Close Side Overlay -->
          </div>
        </div>
      </div>
      <div class="content-side">
        <div class="block pull-x mb-0">
          <!-- Color Themes -->
          <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm text-center">
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-default" data-toggle="theme" data-theme="default" href="#">
                  Default
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme" data-theme="{{ mix('/css/themes/xwork.css') }}" href="#">
                  xWork
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme" data-theme="{{ mix('/css/themes/xmodern.css') }}" href="#">
                  xModern
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme" data-theme="{{ mix('/css/themes/xeco.css') }}" href="#">
                  xEco
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme" data-theme="{{ mix('/css/themes/xsmooth.css') }}" href="#">
                  xSmooth
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme" data-theme="{{ mix('/css/themes/xinspire.css') }}" href="#">
                  xInspire
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme" data-theme="{{ mix('/css/themes/xdream.css') }}" href="#">
                  xDream
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme" data-theme="{{ mix('/css/themes/xpro.css') }}" href="#">
                  xPro
                </a>
              </div>
              <div class="col-4 mb-1">
                <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme" data-theme="{{ mix('/css/themes/xplay.css') }}" href="#">
                  xPlay
                </a>
              </div>
            </div>
          </div>
          <!-- END Color Themes -->

          <!-- Sidebar -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm text-center">
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
              </div>
            </div>
          </div>
          <!-- END Sidebar -->

          <!-- Header -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Header</span>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm text-center mb-2">
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
              </div>
            </div>
          </div>
          <!-- END Header -->

          <!-- Content -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Content</span>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm text-center">
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
              </div>
              <div class="col-6 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
              </div>
              <div class="col-12 mb-1">
                <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
              </div>
            </div>
          </div>
          <!-- END Content -->
        </div>
        <div class="block pull-x mb-0">
          <!-- Content -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Heading</span>
          </div>
          <div class="block-content">
            <p>
              Content..
            </p>
          </div>
          <!-- END Content -->
        </div>
      </div>
    </aside>