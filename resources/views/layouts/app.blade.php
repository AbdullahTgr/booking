<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Span Travel') }}</title>

    <!-- Scripts --> 
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>سبان </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link rel="icon" href="assets/img/span.jpg" type="image/gif">
    <link href="assets/img/span.jpg" rel="">
    <!-- Styles -->
<!-- CSS only -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
<link rel="shortcut icon" type="image/icon" href="assets/img/span.jpg"/>
<!--font-awesome.min.css-->
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

<!--animate.css-->
<link rel="stylesheet" href="assets/css/animate.css" />

<!--hover.css-->
<link rel="stylesheet" href="assets/css/hover-min.css">

<!--datepicker.css-->
<link rel="stylesheet"  href="assets/css/datepicker.css" >

<!--owl.carousel.css-->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

<!-- range css-->
<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

<!--bootstrap.min.css-->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

<!-- bootsnav -->
<link rel="stylesheet" href="assets/css/bootsnav.css"/>

<!--style.css-->
<link rel="stylesheet" href="assets/css/style.css" />

<!--responsive.css-->
<link rel="stylesheet" href="assets/css/responsive.css" />

<link rel="stylesheet" href="css/tasks.css" />
<link rel="stylesheet" href="{{asset('assets/css/booking_trip.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/select_box.css')}}" />



</head> 
<body>
    <div id="app">
        
         @include('layouts.navbar')

        <main class="py-4 {{Auth::check() ? 'main-con' : ''}}">
            @yield('content')
        </main>
    </div>

    @yield('scripts')  
    @if (!isset($nav_trans))
        <style>
             .header-area:after{
    position:absolute;
    content:'';
    background: rgba(77,78,84,1);
    height:100%;
    width:100%;
    top:0;
    left:0;
    z-index:-1;
    -webkit-transition:all 0.5s linear;
    -moz-transition:all 0.5s linear;
    -ms-transition:all 0.5s linear;
    -o-transition:all 0.5s linear;
             }
             .header-area{
                width: 1903px; position: fixed; top: 0px; z-index: inherit;
             }
        </style>
    @endif


</body>
</html>
