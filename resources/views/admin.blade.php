<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="dist/images/icon/favicon.ico">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/themify-icons.css">
    <link rel="stylesheet" href="dist/css/metisMenu.css">
    <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="dist/css/typography.css">
    <link rel="stylesheet" href="dist/css/default-css.css">
    <link rel="stylesheet" href="dist/css/styles.css">
    <link rel="stylesheet" href="dist/css/responsive.css">
    <!-- modernizr css -->
    <script src="dist/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
        .pic {
            display: inline-block;
            margin: 10px 10px 0 0;
            position: relative;
        }

        .close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 9999;
        }

    </style>
</head>

<body>
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <!-- Brand Logo -->
                    <a href="/home" class="brand-link">
                        <img src="dist/img/icon.png" alt="Bota Lume" class="brand-image img-circle elevation-0"
                            style="opacity: .8; width: 40px">
                        <span style="color: #fff"> BOTA LUME</span>
                    </a>
                </div>
            </div>
            <div class="sidebar-header">
                <div class="logo">
                    <!-- User -->
                    <a class="brand-link">
                        <img src="dist/img/user.png" alt="Bota Lume" class="brand-image img-circle elevation-0"
                            style="opacity: .9; width: 40px">
                        <span style="color: #fff">{{ Auth::user()->name }}</span>
                    </a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-calendar"></i><span>Eventos</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ url('/ProjetosFotos/create') }}">Novo Evento</a></li>
                                    <li><a href="{{ url('/ProjetosFotos/show') }}">Listar Eventos</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-id-badge"></i><span>Sobre</span></a>
                                <ul class="collapse">
                                    <li><a href="index.html">Editar Sobre</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-receipt"></i><span>Notícias</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ url('/Noticias/create') }}">Nova Notícia</a></li>
                                    <li><a href="{{ url('/Noticias/show') }}">Gerir Notícias</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Copyright &copy; 2021 All right reserved <strong>|</strong> Development & Design by Nuno Miguel
                </p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="dist/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/owl.carousel.min.js"></script>
    <script src="dist/js/metisMenu.min.js"></script>
    <script src="dist/js/jquery.slimscroll.min.js"></script>
    <script src="dist/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="dist/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="dist/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="dist/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="dist/js/maps.js"></script>
    <!-- others plugins -->
    <script src="dist/js/plugins.js"></script>
    <script src="dist/js/scripts.js"></script>
</body>

</html>
