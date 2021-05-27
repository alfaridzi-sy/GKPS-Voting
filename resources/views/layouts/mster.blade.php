<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.part.css')
    @stack('scripts')
</head>

<body class="darklayout">

    <!-- Semua bagian Body-->
    <div class="wrapper-pro">

        <!-- Sidebar-->
        @include('layouts.part.sidebar')
        <!-- Sidebar-->

        <!-- Semua Bagian Taskbar Atas-->
        @include('layouts.part.taskbar')
        <!-- Semua Bagian Taskbar Atas-->

        <!-- Semua Bagian Kontent-->
        <div class="content-inner-all">
            @yield('content')
        </div>
        <!--taskbar atas, kontent utama-->

    </div>

    <!-- Footer-->
    @include('layouts.part.footer')
    <!-- Footer-->

    <!-- Chat Box-->
    @include('layouts.part.chatbox')
    <!-- Chat Box-->

    @include('layouts.part.js')
</body>

@stack('script')

</html>
