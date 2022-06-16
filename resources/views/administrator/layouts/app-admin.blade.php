<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('assets-admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('assets-admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('assets-admin/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('assets-admin/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('assets-admin/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('assets-admin/css/estilos.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{asset('assets-admin/css/dragdrop.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('assets-admin/css/themes/all-themes.css')}}" rel="stylesheet" />

        <!-- JQuery DataTable Css -->
    <link href="{{asset('assets-admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">


    @if(Request::is('administrador/home'))
        {{$inicio="active"}}
    @else
        {{$inicio=""}}
    @endif


    
    <!-- Bootstrap Select Css -->
    <!--<link href="{{asset('assets-admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />-->

       <!-- Jquery Core Js -->
    <script src="{{asset('assets-admin/plugins/jquery/jquery.min.js')}}"></script>

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=n4iap2xxp9k30rgpm3adng2ja45xu9ljbwnz7o1xgi8j6fs1"></script>
<style>
    .mt-0{margin-top: 0px!important;}
</style>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
<!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
@if(!empty(Auth('admin')->user()->id))
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{route('administrador/home')}}">Dinamica F1</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">

            </div>

        </div>
    </nav>
 
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    @if(!empty(Auth('admin')->user()->foto))
                    <img src="{{asset('assets-admin/images/administradores/').'/'.Auth('admin')->user()->foto}}" width="48" height="48" alt="User" />
                    @else
                    <img src="{{asset('assets-admin/images/user.png')}}" width="48" height="48" alt="User" />
                    @endif
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{utf8_decode(Auth('admin')->user()->nombre)}}</div>
                    <div class="email"> {{Auth('admin')->user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{route('administrador/usuarios')}}"><i class="material-icons">group</i>Usuarios</a></li>
                            
                            <li><a href="{{route('administrador/logout')}}"><i class="material-icons">input</i>Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    


                    <li class="{{$inicio}}">
                        <a href="{{route('administrador/home')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li class="">
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block toggled">
                            <i class="material-icons">widgets</i>
                            <span>Secciones Inicio</span>
                        </a>
                        <ul class="ml-menu" style="display: block;">
                            <li class="">
                                <a href="#">
                                    <i class="material-icons mt-0">panorama</i>
                                    <span>Dinamica</span>
                                </a>
                            </li> 
                            <li class="">
                                <a href="{{route('administrador/questions')}}">
                                    <i class="material-icons mt-0">panorama</i>
                                    <span>Questions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->

            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </section>
@endif


    @yield('content')





    <!-- Bootstrap Core Js -->
    <script src="{{asset('assets-admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <!--<script src="{{asset('assets-admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>-->

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('assets-admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('assets-admin/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('assets-admin/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('assets-admin/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{asset('assets-admin/plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('assets-admin/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>


    @if(Request::is('administrador/home'))
    <!-- Flot Charts Plugin Js -->
    <script src="{{asset('assets-admin/plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('assets-admin/plugins/flot-charts/jquery.flot.time.js')}}"></script>
    <!--<script src="{{asset('assets-admin/js/pages/index.js')}}"></script>-->

    @endif


    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('assets-admin/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets-admin/js/admin.js')}}"></script>
    <script src="{{asset('assets-admin/js/pages/tables/jquery-datatable.js')}}"></script>


    <!-- Demo Js -->
    <script src="{{asset('assets-admin/js/demo.js')}}"></script>

    <script src="{{asset('assets-admin/js/script.js')}}"></script>

    <script src="{{asset('assets-admin/js/script2.js')}}"></script>

    <script src="{{asset('assets-admin/js/dragdrop.js')}}"></script>


    <script src="{{asset('assets-admin/js/tiny.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            //Widgets count
            $('.count-to').countTo();

            //Sales count to
            $('.sales-count-to').countTo({
                formatter: function (value, options) {
                    return '$' + value.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, ' ').replace('.', ',');
                }
            });
        });
    </script>
    @if(Request::is('administrador/home'))
    <script type="text/javascript">
        $(function () {
            initRealTimeChart();
            initDonutChart();
            initSparkline();
        });
    </script>
    @endif
</body>

</html>