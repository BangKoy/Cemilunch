<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ecolife - Multipurpose eCommerce HTML Template</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&display=swap" rel="stylesheet" />

        <!-- All CSS Flies   -->
        <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/ionicons.min.css') }}" />
        <!--===== Plugins CSS (All Plugins Files) =====-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/meanmenu.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}" />

        @yield('css_page')

        <!--===== Main Css Files =====-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <!-- ===== Responsive Css Files ===== -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

        <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="assets/css/responsive.min.css"> -->
</head>
<body class="home-furniture home-15">
    <div id="main">
        @include('layouts.header') <!-- Include header -->
        @yield('content') <!-- Main content will be injected here -->
        @include('layouts.footer') <!-- Include footer -->
    </div>
    @yield('modal')
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/elevateZoom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/range-script.js') }}"></script>

    @yield('js_page')

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>