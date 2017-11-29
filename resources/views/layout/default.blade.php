<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ACABOINSTA') }}</title>

    <!-- Styles -->
    <link media="screen" rel="stylesheet" href="{{ asset('third-party/animate.css/animate.min.css') }}" rel="stylesheet">
    <link media="screen" rel="stylesheet" href="{{ asset('third-party/glyphicons/glyphicons.css') }}" rel="stylesheet">
    <link media="screen" rel="stylesheet" href="{{ asset('third-party/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link media="screen" rel="stylesheet" href="{{ asset('third-party/material-design-icons/material-design-icons.css') }}" rel="stylesheet">

    <link media="screen" rel="stylesheet" href="{{ asset('third-party/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- build:css third-party/styles/app.min.css -->
    <link media="screen" rel="stylesheet" href="{{ asset('third-party/styles/app.css') }}" rel="stylesheet">
    <!-- endbuild -->
    <link media="screen" rel="stylesheet" href="{{ asset('third-party/styles/font.css') }}" rel="stylesheet">

    <link media="print" rel="stylesheet" href="{{ asset('third-party/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link media="print" rel="stylesheet" href="{{ asset('third-party/styles/app.css') }}" rel="stylesheet">
    @yield('styles')

    <!-- Scripts -->
</head>
<body>
    <div class="app" id="app">
        <!-- ############ LAYOUT START-->

        @yield('content')

        <!-- ############ LAYOUT END-->
    </div>

    <!-- build:js third-party/scripts/app.html.js -->
    <!-- jQuery -->
    <script src="{{ asset('third-party/jquery/dist/jquery.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('third-party/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('third-party/bootstrap/dist/js/bootstrap.js') }}"></script>
    <!-- core -->
    <script src="{{ asset('third-party/underscore/underscore-min.js') }}"></script>
    <script src="{{ asset('third-party/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
    <script src="{{ asset('third-party/PACE/pace.min.js') }}"></script>

    <script src="{{ asset('third-party/scripts/config.lazyload.js') }}"></script>

    <script src="{{ asset('third-party/scripts/palette.js') }}"></script>
    <script src="{{ asset('third-party/scripts/ui-load.js') }}"></script>
    <script src="{{ asset('third-party/scripts/ui-jp.js') }}"></script>
    <script src="{{ asset('third-party/scripts/ui-include.js') }}"></script>
    <script src="{{ asset('third-party/scripts/ui-device.js') }}"></script>
    <script src="{{ asset('third-party/scripts/ui-form.js') }}"></script>
    <script src="{{ asset('third-party/scripts/ui-nav.js') }}"></script>
    <script src="{{ asset('third-party/scripts/ui-screenfull.js') }}"></script>
    <script src="{{ asset('third-party/scripts/ui-scroll-to.js') }}"></script>
    <script src="{{ asset('third-party/scripts/ui-toggle-class.js') }}"></script>

    <script src="{{ asset('third-party/scripts/app.js') }}"></script>

    <!-- ajax -->
    {{-- <script src="{{ asset('third-party/jquery-pjax/jquery.pjax.js') }}"></script> --}}
    {{-- <script src="{{ asset('third-party/scripts/ajax.js') }}"></script> --}}
    <!-- endbuild -->

    @yield('scripts')
</body>
</html>