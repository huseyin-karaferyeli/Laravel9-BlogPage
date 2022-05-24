<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="Hüseyin Karaferyeli" />
    <link rel="icon" type="image/x-icon" href="@yield('icon')">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset("assets")}}/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset("assets")}}/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset("assets")}}/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset("assets")}}/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset("assets")}}/css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset("assets")}}/css/style.css">

    <!-- Modernizr JS -->
    <script src="{{asset("assets")}}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]> -->
    <script src="{{asset("assets")}}/js/respond.min.js"></script>
    <![endif]-->

    @yield('head')

</head>

<body>

<div class="fh5co-loader"></div>


<div id="page">

    @include('home.header')

    <div class="container-wrap">

        @yield('slider')

        @yield('content')

    </div>

    @include('home.footer')

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

@include('home.scrpt')

</body>

</html>
