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

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            @yield('content')
        </div>
    </div>
</div>

@include('admin.scrpt')

</body>

</html>
