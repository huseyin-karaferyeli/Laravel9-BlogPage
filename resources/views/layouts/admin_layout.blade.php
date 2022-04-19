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

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        @include('admin.sidebar')

        <div class="layout-page">

            @include('admin.header')

            <div class="container-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                </div>

                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>

</div>

@include('admin.scrpt')

</body>

</html>
