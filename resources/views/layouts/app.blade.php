<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('backend/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
    <link href="{{ asset('backend/css/material-dashboard-rtl.css?v=1.1')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('backend/demo/demo.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('css')

  <!-- Style Just for persian demo purpose, don't include it in your project -->
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4 {
      font-family: "Cairo";
    }
  </style>
</head>
<body>

    <div id="app">
        <div class="wrapper ">
          @if(Request::is('admin*'))
            @include('layouts.parials.sidebar')
          @endif
            <div class="main-panel">
                @if(Request::is('admin*'))
                  @include('layouts.parials.topbar')
                @endif
                <div class="content">
                  <div class="container-fluid">
                    @yield('content')
                  </div>
                </div>
                @if(Request::is('admin*'))
                  @include('layouts.parials.footer')
                @endif
            </div>
        </div>
    </div>


     <!--   Core JS Files   -->
     <script src="{{ asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
     <script src="{{ asset('js/core/popper.min.js')}}" type="text/javascript"></script>
     <script src="{{ asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
     <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
     <!--  Google Maps Plugin    -->
     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
     <!-- Chartist JS -->
     <script src="{{ asset('js/plugins/chartist.min.js')}}"></script>
     <!--  Notifications Plugin    -->
     <script src="{{ asset('js/plugins/bootstrap-notify.js')}}"></script>
     <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
     <script src="{{ asset('js/material-dashboard.min.js?v=2.1.0')}}" type="text/javascript"></script>
     <!-- Material Dashboard DEMO methods, don't include it in your project! -->
     <script src="{{ asset('demo/demo.js')}}"></script>
     <script>
       $(document).ready(function () {
         // Javascript method's body can be found in assets/js/demos.js
         md.initDashboardPageCharts();

       });
     </script>

    @stack('scripts')


</body>
</html>
