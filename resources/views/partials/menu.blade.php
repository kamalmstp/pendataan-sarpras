<nav id="sidebar" aria-label="Main Navigation">
    <div class="bg-header-dark">
    <div class="content-header bg-white-5">
        <a class="fw-semibold text-white tracking-wide" href="/">
            <!-- <img src="{{ asset('logo.png') }}" width="20%" alt="Digipen"> -->
            <img src="{{ asset('img/header.png') }}" width="100%" alt="Digipen">
            <span class="smini-visible">
                D<span class="opacity-75">P</span>
            </span>
            <!-- <span class="smini-hidden">
                Digi<span class="opacity-75">Pen</span>
            </span> -->
        </a>

        <div>
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
        </button>
        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-times-circle"></i>
        </button>
        </div>
    </div>
    </div>
@if(auth()->user()->level === App\Models\User::ADMIN)
    @include('partials.menu.administrator')
@elseif(auth()->user()->level === App\Models\User::SD)
    @include('partials.menu.primary')
@elseif(auth()->user()->level === App\Models\User::SMP)
    @include('partials.menu.junior')
@endif
</nav>