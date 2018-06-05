<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/ico/favicon.png">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="css/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jqvmap.css" rel="stylesheet" type="text/css"/>
        <link href="css/tasks.css" rel="stylesheet" type="text/css"/>
        <link href="css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="css/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-logo page-sidebar-fixed page-container-bg-solid page-footer-fixed">
<div class="page-container">
        <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                @include('partials.sidebar')
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        
    <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE BREADCRUMB -->
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE CONTENT INNER -->

                <!-- BEGIN CONTENIDO PRINCIPAL -->
                    <section class="content"  id="contenido_principal">
                        @yield('content')
                    </section>
                <!-- END  CONTENIDO PRINCIPAL -->
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
    
    </div>

    <footer>
     <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="js/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="js/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    
    <!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
    <script src="js/morris.min.js" type="text/javascript"></script>
    <script src="js/raphael-min.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="js/metronic.js" type="text/javascript"></script>
    <script src="js/layout.js" type="text/javascript"></script>
    <script src="js/demo.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>
    <script src="js/tasks.js" type="text/javascript"></script>
    <script src="js/charts-amcharts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="js/amcharts.js" type="text/javascript"></script>
    <script src="js/serial.js" type="text/javascript"></script>
    <script src="js/pie.js" type="text/javascript"></script>
    <script src="js/radar.js" type="text/javascript"></script>
    <script src="js/light.js" type="text/javascript"></script>
    <script src="js/patterns.js" type="text/javascript"></script>
    <script src="js/chalk.js" type="text/javascript"></script>
    <script src="js/ammap.js" type="text/javascript"></script>
    <script src="js/worldLow.js" type="text/javascript"></script>
    <script src="js/amstock.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="js/responsive.bootstrap.min.js" type="text/javascript"></script>
    <script src="js/responsive.bootstrap.min.js" type="text/javascript"></script>
    <script src="js/funciones.js"> </script>


    <script>
    jQuery(document).ready(function() {    
       Metronic.init(); // init metronic core componets
       Layout.init(); // init layout
       Demo.init(); // init demo features    
       Index.init(); // init index page
       Tasks.initDashboardWidget(); // init tash dashboard widget  
    });
    </script>

    </footer>




</body>

</html>
