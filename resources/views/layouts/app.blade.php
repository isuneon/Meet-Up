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
       
        <!--  favicon -->
        <link rel="shortcut icon" href="assets/img/ico/favicon.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- FontAwesome CSS -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Material Icons CSS -->
        <link href="{{ asset('css/material-icons.css') }}" rel="stylesheet">
        <!-- animate CSS -->
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
         <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
         <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
         <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
        <!-- materialize -->
        <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- shortcodes -->
        <link href="{{ asset('css/shortcodes.css') }}" rel="stylesheet">
        <!-- Style CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body id="top" data-spy="scroll" data-target="#materialize-menu" data-offset="100">
                    <section>
                        @yield('content')
                    </section>
             
        
    
   
</body>







</html>
