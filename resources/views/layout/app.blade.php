<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- plugin css -->
    <link href="{{ asset('assets/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/mermaid.min.css') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/fontend.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="{{ asset('assets2/js/jquery.min.js') }}"></script>


</head>

<body data-topbar="light">



    {{-- <head>
        
                <meta charset="utf-8" />
                <title>Vertical | Vuesy - Admin & Dashboard Template</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="Themesdesign" name="author" />
                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.png">
        
                <!-- plugin css -->
                <link href="assets/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
        
                <!-- swiper css -->
                <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
                
                <link rel="stylesheet" href="assets/css/mermaid.min.css">
        
                <!-- Bootstrap Css -->
                <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
                <!-- Icons Css -->
                <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
                <!-- App Css-->
                <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
                
                <link href="assets/css/fontend.css" rel="stylesheet" type="text/css" />
        
            </head> --}}

    <body data-topbar="light">

        @include('layout.header')
        @include('layout.sidebar')
        @yield('content')
        @include('layout.footer')


        <!-- JAVASCRIPT -->
       
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/metismenujs.min.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/alertify.min.js') }}"></script>
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
        <script src="{{ asset('assets/js/rater.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/wNumb.min.js') }}"></script>
        <script src="{{ asset('assets/js/gridjs.umd.js') }}"></script>

        <!-- apexcharts -->
        {{-- <script src="{{asset('assets/js/apexcharts.min.js')}}"></script> --}}

        <!-- for basic area chart -->
        <script src="{{ asset('assets/js/stock-prices.js') }}"></script>
        <!-- for github style chart -->
        <script src="{{ asset('assets/js/github-data.js') }}"></script>
        <!-- for irregular timeseries chart -->
        <script src="{{ asset('assets/js/irregular-data-series.js') }}"></script>
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>


        <!-- Vector map-->
        <script src="assets/js/jsvectormap.min.js"></script>
        <script src="assets/js/world-merc.js"></script>

        <!-- swiper js -->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <script src="assets/js/pages/all.init.js"></script>

        {{-- <script src="{{asset('assets/js/pages/apexcharts-boxplot.init.js')}}"></script> --}}

        <script src="assets/js/pages/gridjs.init.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('assets/js/method.js') }}"></script>

    </body>

</html>
