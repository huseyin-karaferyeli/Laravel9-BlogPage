<!DOCTYPE html>
<html>

<head>

    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{asset("assets")}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="{{asset("assets")}}/js/jquery.min.js"></script>
    <!---strat-slider---->
    <link rel="stylesheet" type="text/css" href="{{asset("assets")}}/css/slider.css" />
    <script type="text/javascript" src="{{asset("assets")}}/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="{{asset("assets")}}/js/jquery.cslider.js"></script>
    <script type="text/javascript">
        $(function() {

            $('#da-slider').cslider({
                autoplay	: true,
                bgincrement	: 450
            });

        });
    </script>
    <!---//strat-slider---->
    <script src="{{asset("assets")}}/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <link href="{{asset("assets")}}/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>

    @yield('head')

</head>

<body>

<div class="wrap">
    @include('home.header')
    @yield('slider')
</div>

<div class="main">
    @yield('content')
</div>

@include('home.footer')

</body>

</html>
