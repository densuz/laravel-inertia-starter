<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <!-- Head Section -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- jsvectormap css -->
     <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

     <!--Swiper slider css-->
     <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
 
     <!-- Layout config Js -->
     <script src="assets/js/layout.js"></script>

     <!-- Bootstrap Css -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <!-- Icons Css -->
     <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <!-- App Css-->
     <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
     <!-- custom Css-->
     <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <!-- Styles -->
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Inertia -->
    @inertia

    <!-- Additional Styles/Scripts -->
    <!-- Include any additional styles or scripts needed for your application -->

</head>
<body>
    <!-- Inertia -->
    @inertia

    <!-- Additional Scripts -->
    <!-- Include any additional scripts needed for your application -->
      <!-- JAVASCRIPT -->
      <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/libs/simplebar/simplebar.min.js"></script>
      <script src="assets/libs/node-waves/waves.min.js"></script>
      <script src="assets/libs/feather-icons/feather.min.js"></script>
      <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
      <script src="assets/js/plugins.js"></script>

       <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Ensure to load the main JavaScript file compiled by Laravel Mix -->
</body>
</html>
