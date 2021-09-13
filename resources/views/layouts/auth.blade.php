<!doctype html>
<html lang="pt-br">
    <head>
        {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
        {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sistema - ERP</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('theme/dark-html/images/favicon.ico')}}" />
        
        <link href="{{asset('plugin/bootstrap-4.6.0/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugin/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
        <!-- Typography CSS -->
        <link rel="stylesheet" href="{{asset('theme/dark-html/css/typography.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('theme/dark-html/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('theme/dark-html/css/responsive.css')}}">
    </head>

    <body>
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>

        @yield('content')

        <script src="{{asset('plugin/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('plugin/bootstrap-4.6.0/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('plugin/sweetalert2/sweetalert2.all.min.js')}}"></script>
        <script src="{{asset('plugin/mask.jquery.js')}}"></script>
        <script src="{{asset('plugin/valida_cpf_cnpj.js')}}"></script>

        <!-- Appear JavaScript -->
        <script src="{{asset('theme/dark-html/js/jquery.appear.js')}}"></script>
        <!-- Countdown JavaScript -->
        <script src="{{asset('theme/dark-html/js/countdown.min.js')}}"></script>
        <!-- Counterup JavaScript -->
        <script src="{{asset('theme/dark-html/js/waypoints.min.js')}}"></script>
        <script src="{{asset('theme/dark-html/js/jquery.counterup.min.js')}}"></script>
        <!-- Wow JavaScript -->
        <script src="{{asset('theme/dark-html/js/wow.min.js')}}"></script>
        <!-- Apexcharts JavaScript -->
        <script src="{{asset('theme/dark-html/js/apexcharts.js')}}"></script>
        <!-- Slick JavaScript -->
        <script src="{{asset('theme/dark-html/js/slick.min.js')}}"></script>
        <!-- Select2 JavaScript -->
        <script src="{{asset('theme/dark-html/js/select2.min.js')}}"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="{{asset('theme/dark-html/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="{{asset('theme/dark-html/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="{{asset('theme/dark-html/js/smooth-scrollbar.js')}}"></script>
        <!-- Chart Custom JavaScript -->
        <script src="{{asset('theme/dark-html/js/chart-custom.js')}}"></script>
        <!-- Custom JavaScript -->
        <script src="{{asset('theme/dark-html/js/custom.js')}}"></script>
    </body>
</html>