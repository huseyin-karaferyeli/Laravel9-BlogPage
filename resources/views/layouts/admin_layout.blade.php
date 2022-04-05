<!DOCTYPE html>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("assets")}}/admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset("assets")}}/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset("assets")}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset("assets")}}/admin/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset("assets")}}/admin/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset("assets")}}/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset("assets")}}/admin/images/favicon.png" />

    @yield('head')
</head>

<body>

<div class="container-scroller">
    @include('admin.header')

    <div class="container-fluid page-body-wrapper">

        @include('admin.sidebar')

        <div class="main-panel">

            <div class="content-wrapper">
                @yield('content')
            </div>

            @include('admin.footer')

        </div>

    </div>

    @include('admin.scrpt')

</div>

</body>

</html>
