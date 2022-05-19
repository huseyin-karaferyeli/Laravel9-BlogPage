<!DOCTYPE html>

<html

    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset("assets")}}/admin/"
    data-template="vertical-menu-template-free"
>

<head>
    @include('admin.head')
    @yield('head')
</head>

<body>
    <div class="container-xxl flex-grow-1 container-p-y">
        @yield('content')
    </div>

    @include('admin.scrpt')

</body>

</html>
