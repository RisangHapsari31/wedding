<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Daftar Hadir Undangan Pernikahan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="{{asset('/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('/assets/css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet"> -->
    <link href="{{asset('/assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <!-- <img class="logo-abbr" style="width:200px;height:100px" src="./images/logos.png" alt=""> -->
                <img class="logo-compact" src="./images/text2.png" alt="">
                <!-- <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">  -->
                <img class="brand-title" src="./images/text2.png" alt=""> 
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile ">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('logout')}}" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Tamu</li>
                    <li><a class="has-arrow" href="" aria-expanded="false"><iclass="icon icon-layout-25"></i><span class="nav-text">Data Tamu</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-body">
        @include('sweetalert::alert')
        @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div> -->
    </div>
    <!-- Required vendors -->
    <script src="{{asset('/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('/js/quixnav-init.js')}}"></script>
    <script src="{{asset('/js/custom.min.js')}}"></script>

    <!-- Datatable -->
    <script src="{{asset('/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/js/plugins-init/datatables.init.js')}}"></script>
    
    <!-- Sweet Alert -->
    <!-- <script src="{{asset('/assets/js/lib/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('/assets/js/lib/sweetalert/sweetalert.init.js')}}"></script> -->
    <script src="{{asset('/assets/js/lib/bootstrap.min.js')}}"></script>

     <!-- jquery vendor -->
     <script src="{{asset('/assets/js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{asset('/assets/js/lib/menubar/sidebar.js')}}"></script>
    @stack('scripts')
</body>

</html>