<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Sistema - ERP</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('theme/'.auth()->user()->theme.'/images/favicon.ico')}}" />

        <link href="{{asset('plugin/bootstrap-4.6.0/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugin/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">

        <!-- Typography CSS -->
        <link rel="stylesheet" href="{{asset('theme/'.auth()->user()->theme.'/css/typography.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('theme/'.auth()->user()->theme.'/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('theme/'.auth()->user()->theme.'/css/responsive.css')}}">
        <!-- Full calendar -->
        <link href='{{asset('theme/'.auth()->user()->theme.'/fullcalendar/core/main.css')}}' rel='stylesheet' />
        <link href='{{asset('theme/'.auth()->user()->theme.'/fullcalendar/daygrid/main.css')}}' rel='stylesheet' />
        <link href='{{asset('theme/'.auth()->user()->theme.'/fullcalendar/timegrid/main.css')}}' rel='stylesheet' />
        <link href='{{asset('theme/'.auth()->user()->theme.'/fullcalendar/list/main.css')}}' rel='stylesheet' />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

        <link rel="stylesheet" href="{{asset('plugin/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugin/datatables-responsive/css/responsive.bootstrap4.min.css')}}">


        <!-- DateRangerPicker -->
        <link rel="stylesheet" href="{{asset('plugin/daterangepicker/daterangepicker.css')}}">

        {{-- Custom --}}
        <link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
    </head>
    <body class="top-tab-horizontal">
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>

        <div class="wrapper">
            <!-- TOP Nav Bar -->
            <div class="iq-top-navbar">
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="iq-navbar-custom-menu d-flex align-items-center justify-content-between">
                                    <div class="iq-sidebar-logo">
                                        <div class="top-logo">
                                            <a href="{{route('dashboard')}}" class="logo">
                                                <img src="{{asset('theme/'.auth()->user()->theme.'/images/logo.gif')}}" class="img-fluid" alt="">
                                                <span>vito</span>
                                            </a>
                                        </div>
                                    </div>
                                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <i class="ri-menu-3-line"></i>
                                        </button>
                                        <div class="iq-menu-bt align-self-center">
                                            <div class="wrapper-menu">
                                                <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                                                <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                                            </div>
                                        </div>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav ml-auto navbar-list">
                                                {{-- <li class="nav-item">
                                                    <a class="search-toggle iq-waves-effect language-title" href="#">
                                                        <img src="{{asset('theme/'.auth()->user()->theme.'/images/small/flag-07.png')}}" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> Potugues <i class="ri-arrow-down-s-line"></i>
                                                    </a>
                                                    <div class="iq-sub-dropdown">
                                                        <a class="iq-sub-card" href="#"><img src="{{asset('theme/'.auth()->user()->theme.'/images/small/flag-01.png')}}" alt="img-flaf" class="img-fluid mr-2" />English</a>
                                                    </div>
                                                </li> --}}
                                                <li class="nav-item">
                                                    <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
                                                    <form action="#" class="search-box">
                                                        <input type="text" class="text search-input" placeholder="Digite o que procura...">
                                                    </form>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="search-toggle iq-waves-effect">
                                                        <div id="lottie-beil"></div>
                                                        <span class="bg-danger dots"></span>
                                                    </a>
                                                    <div class="iq-sub-dropdown">
                                                        <div class="iq-card shadow-none m-0">
                                                            <div class="iq-card-body p-0 ">
                                                                <div class="bg-primary p-3">
                                                                    <h5 class="mb-0 text-white">Todas as Notificações<small class="badge  badge-light float-right pt-1">4</small></h5>
                                                                </div>
                                                                <a href="#" class="iq-sub-card" >
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 ">Emma Watson Nik</h6>
                                                                            <small class="float-right font-size-12">Just Now</small>
                                                                            <p class="mb-0">95 MB</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="iq-sub-card" >
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 ">New customer is join</h6>
                                                                            <small class="float-right font-size-12">5 days ago</small>
                                                                            <p class="mb-0">Jond Nik</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="iq-sub-card" >
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 ">Two customer is left</h6>
                                                                            <small class="float-right font-size-12">2 days ago</small>
                                                                            <p class="mb-0">Jond Nik</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="iq-sub-card" >
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                                            <small class="float-right font-size-12">3 days ago</small>
                                                                            <p class="mb-0">Jond Nik</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a href="#" class="search-toggle iq-waves-effect">
                                                        <div id="lottie-mail"></div>
                                                        <span class="bg-primary count-mail"></span>
                                                    </a>
                                                    <div class="iq-sub-dropdown">
                                                        <div class="iq-card shadow-none m-0">
                                                            <div class="iq-card-body p-0 ">
                                                                <div class="bg-primary p-3">
                                                                    <h5 class="mb-0 text-white">Todas as Mensagens<small class="badge  badge-light float-right pt-1">5</small></h5>
                                                                </div>
                                                                <a href="#" class="iq-sub-card" >
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 ">Nik Emma Watson</h6>
                                                                            <small class="float-left font-size-12">13 Jun</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="iq-sub-card" >
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                                            <small class="float-left font-size-12">20 Apr</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="iq-sub-card" >
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 ">Why do we use it?</h6>
                                                                            <small class="float-left font-size-12">30 Jun</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="iq-sub-card" >
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 ">Variations Passages</h6>
                                                                            <small class="float-left font-size-12">12 Sep</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="iq-sub-card" >
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                                            <small class="float-left font-size-12">5 Dec</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="navbar-list">
                                            <li>
                                                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                                    <div class="caption">
                                                        <h6 class="mb-0 line-height">{{explode(' ', auth()->user()->name)[0]}}</h6>
                                                        <span class="font-size-12">Acessível</span>
                                                    </div>
                                                </a>
                                                <div class="iq-sub-dropdown iq-user-dropdown">
                                                    <div class="iq-card shadow-none m-0">
                                                        <div class="iq-card-body p-0 ">
                                                            <div class="bg-primary p-3">
                                                                <h5 class="mb-0 text-white line-height">Hello {{auth()->user()->name}}</h5>
                                                                <span class="text-white font-size-12">Acessível</span>
                                                            </div>
                                                            <a href="{{route('profile.my')}}" class="iq-sub-card iq-bg-primary-hover">
                                                                <div class="media align-items-center">
                                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                                        <i class="ri-file-user-line"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Meu Perfil</h6>
                                                                        <p class="mb-0 font-size-12">Ver detalhes do perfil pesssoal.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('profile.edit')}}" class="iq-sub-card iq-bg-primary-hover">
                                                                <div class="media align-items-center">
                                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                                        <i class="ri-profile-line"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Editar Perfl</h6>
                                                                        <p class="mb-0 font-size-12">Modifique seus dados pessoais.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="d-inline-block w-100 text-center p-3">
                                                                <button type="button"class="bg-primary iq-sign-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="button">Sair<i class="ri-login-box-line ml-2"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-menu-horizontal">
                    <div class="container">
                        <div class="row">
                            <div class="iq-menu-horizontal-tab">
                                <nav class="iq-sidebar-menu">
                                    <ul id="iq-sidebar-toggle" class="iq-menu d-flex justify-content-left">
                                        <li class="{{Request::is('/') ? 'active' : ''}}">
                                            <a href="#dashboard" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                            <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                                <li class="{{Request::is('/') ? 'active' : ''}}"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                            </ul>
                                        </li>
                                        @foreach (menuOptions() as $main_access)
                                            <li class="{{Request::is($main_access->menu_route.'/*') ? 'active' : ''}}">
                                                <a href="#{{$main_access->menu_route}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="{{$main_access->icon}}"></i><span>{{$main_access->menu_name}}</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                                <ul id="{{$main_access->menu_route}}" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                                    @isset ($main_access->modules)
                                                        @foreach ($main_access->modules as $modules)
                                                            <li class="{{Request::is($main_access->menu_route.'/'.$modules->module_route.'/*') ? 'active' : ''}}">
                                                                <a href="#{{$modules->module_route}}" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><span>{{$modules->module_name}}</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                                                <ul id="{{$modules->module_route}}" class="iq-submenu iq-submenu-data collapse" data-parent="#{{$main_access->menu_route}}">
                                                                    @isset ($modules->programs)
                                                                        @foreach ($modules->programs as $programs)
                                                                            <li class="{{Request::routeIs($programs->route_name) ? 'active' : ''}}"><a href="{{route($programs->route_name)}}">{{$programs->program_name}}</a></li>
                                                                        @endforeach
                                                                    @endisset
                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                    @endisset
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TOP Nav Bar END -->

            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="bg-white iq-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Politica de Privacidade</a></li>
                            <li class="list-inline-item"><a href="#">Termos de Uso</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 text-center">
                        Versão <b>BETA</b>
                    </div>
                    <div class="col-lg-4 text-right">
                        {{date('Y')}} <i class="ri-copyright-line"></i> <a href="#">ERP</a> Todos os direitos reservados.
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END -->

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <script src="{{asset('plugin/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('plugin/bootstrap-4.6.0/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('plugin/sweetalert2/sweetalert2.all.min.js')}}"></script>
        <script src="{{asset('plugin/mask.jquery.js')}}"></script>
        <script src="{{asset('plugin/valida_cpf_cnpj.js')}}"></script>
        
        <!-- Moment -->
        <script src="{{asset('plugin/moment/moment.min.js')}}"></script>
        <!-- DateRangerPicker -->
        <script src="{{asset('plugin/daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{asset('js/script.min.js')}}"></script>

        <!-- Appear JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/jquery.appear.js')}}"></script>
        <!-- Countdown JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/countdown.min.js')}}"></script>
        <!-- Counterup JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/waypoints.min.js')}}"></script>
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/jquery.counterup.min.js')}}"></script>
        <!-- Wow JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/wow.min.js')}}"></script>
        <!-- Apexcharts JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/apexcharts.js')}}"></script>
        <!-- Slick JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/slick.min.js')}}"></script>
        <!-- Select2 JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/select2.min.js')}}"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/smooth-scrollbar.js')}}"></script>
        <!-- lottie JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/lottie.js')}}"></script>
        <!-- am core JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/core.js')}}"></script>
        <!-- am charts JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/charts.js')}}"></script>
        <!-- am animated JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/animated.js')}}"></script>
        <!-- am kelly JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/kelly.js')}}"></script>
        <!-- Flatpicker Js -->
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <!-- Chart Custom JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/chart-custom.js')}}"></script>
        <!-- Custom JavaScript -->
        <script src="{{asset('theme/'.auth()->user()->theme.'/js/custom.js')}}"></script>

        <script src="{{asset('plugin/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('plugin/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('plugin/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>

        @yield('script')
    </body>
</html>
