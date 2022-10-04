<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <title>Digipen Kotabaru</title>

  <meta name="description" content="Digipen Kotabaru - Digitalisasi Pendidikan di Kotabaru">
  <meta name="author" content="Mustapa Ahmad Kamal">
  <meta name="robots" content="noindex, nofollow">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <!-- Icons -->
  <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
  <link rel="icon" sizes="192x243" type="image/png" href="{{ asset('img/icon.png') }}">
  <link rel="apple-touch-icon" sizes="144x182" href="{{ asset('img/icon.png') }}">

  <!-- Fonts and Styles -->
  @yield('css_before')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">
  <link rel="stylesheet" id="css-main" href="{{ asset('css/style.css') }}">
  

  <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
  <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xwork.css') }}"> -->
  @yield('css_after')
  <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">

  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
  </script>
</head>

<body>
  <div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed">
    @include('partials.side-overlay')
    @include('partials.menu')
    @include('partials.header')

    <main id="main-container">
      @yield('content')
    </main>

    @include('partials.footer')
  </div>
  @yield('modal')
  <!-- Dashmix Core JS -->
  <script src="{{ mix('js/dashmix.app.js') }}"></script>
  <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('js/confirm.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

  @yield('js_after')
  @include('sweetalert::alert')
  @if(session()->has('message'))
    <script type="text/javascript">
        Swal.fire({
            title: '{{ ucwords(session()->get('message.type')) }}',
            text: '{{ session()->get('message.text') }}',
            icon: '{{ session()->get('message.type') }}',
            timer: {{ session()->has('message.timer') ? session()->get('message.timer') : 2000 }}
        });
    </script>
  @endif
</body>

</html>
