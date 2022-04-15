<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>m-inventory </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin') }}/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="{{ asset('admin') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet">



</head>

<body>

    <div id="app">

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

            <div class="nav-header" v-show="$route.path === '/'? false:true " id="headPoint" style="display: none;">
                <a href="#" class="brand-logo">
                    <img class="logo-abbr" src="{{ asset('admin') }}/images/logo.png" alt="">
                    <img class="logo-compact" src="{{ asset('admin') }}/images/logo-text.png" alt="">
                    <img class="brand-title" src="{{ asset('admin') }}/images/logo-text.png" alt="">
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span
                            class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
            Nav header end
        ***********************************-->

            <!--**********************************
            Header start
        ***********************************-->
            <div class="header" id="topbar" v-show="$route.path === '/' ? false:true " style="display: none;">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">

                            </div>

                            <ul class="navbar-nav header-right">
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <i class="mdi mdi-account"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="app-profile.html" class="dropdown-item">
                                            <i class="icon-user"></i>
                                            <span class="ml-2">Profile </span>
                                        </a>
                                        <a href="email-inbox.html" class="dropdown-item">
                                            <i class="icon-envelope-open"></i>
                                            <span class="ml-2">Inbox </span>
                                        </a>
                                        <router-link to="/logout" class="dropdown-item"> <i class="icon-key"></i>
                                            <span class="ml-2">Logout </span>
                                        </router-link>

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
            <nav id="sidebar" v-show="$route.path === '/'? false:true " style="display: none;">

                <div class="quixnav">


                    <div class="quixnav-scroll">
                        <ul class="metismenu" id="menu">
                            {{-- <li class="nav-label first">Main Menu</li> --}}
                            <li>
                                <router-link to="/dashboard"><i
                                        class="icon icon-single-04"></i><span
                                        class="nav-text">Dashboard</span></router-link>
                            </li>

                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-app-store"></i><span class="nav-text">User</span></a>
                                <ul aria-expanded="false">
                                    <li>
                                        <router-link to="/add-user">Add-User</router-link>
                                    <li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                </div>
            </nav>
            <!--**********************************
            Sidebar end
        ***********************************-->

            <!--**********************************
            Content body start
        ***********************************-->
            <div class="content-body">

                <router-view></router-view>
            </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p> Designed &amp; Developed by <a href="#" target="_blank">Amirul Islam</a><?php echo date('Y'); ?></p>

                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->

            <!--**********************************
           Support ticket button start
        ***********************************-->

            <!--**********************************
           Support ticket button end
        ***********************************-->


        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('admin') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('admin') }}/js/quixnav-init.js"></script>
    <script src="{{ asset('admin') }}/js/custom.min.js"></script>

    <script>
        let token = localStorage.getItem('token');
        if (token) {
            $("#sidebar").css("display", "");
            $("#topbar").css("display", "");
            $("#headPoint").css("display", "");
        }
    </script>


    <!-- Vectormap -->
    <script src="{{ asset('admin') }}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/morris/morris.min.js"></script>


    <script src="{{ asset('admin') }}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="{{ asset('admin') }}/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('admin') }}/vendor/flot/jquery.flot.js"></script>
    <script src="{{ asset('admin') }}/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('admin') }}/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="{{ asset('admin') }}/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="{{ asset('admin') }}/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="{{ asset('admin') }}/js/dashboard/dashboard-1.js"></script>

</body>

</html>
