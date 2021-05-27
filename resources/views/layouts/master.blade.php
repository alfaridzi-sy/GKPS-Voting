<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('page_title')</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ Session::token() }}">
        <link rel="stylesheet" href="{{asset('master/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('master/css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{asset('master/css/fullcalendar.css')}}" />
        <link rel="stylesheet" href="{{asset('master/css/matrix-style.css')}}" />
        <link rel="stylesheet" href="{{asset('master/css/matrix-media.css')}}" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('master/css/jquery.gritter.css')}}" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    </head>
<body onload="user_agent()">

    <!--Header-part-->
        <div id="header">
            <h1><a href="dashboard.html">Matrix Admin</a></h1>
        </div>
    <!--close-Header-part-->


    <!--top-Header-menu-->
        @include('layouts.partial.header')
    <!--close-top-Header-menu-->

    <!--sidebar-menu-->
        @include('layouts.partial.sidebar')
    <!--sidebar-menu-->

    <!--main-container-part-->
        <div id="content">
            <!--breadcrumbs-->
                <div id="content-header">
                    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
                </div>
            <!--End-breadcrumbs-->

            <h2 style="text-align: center">@yield('page_header')</h2>
            @yield('content')
        </div>
    <!--end-main-container-part-->

    <!--Footer-part-->
        @include('layouts.partial.footer')
    <!--end-Footer-part-->

    @include('layouts.partial.script')

    @stack('scripts')
</body>
</html>
