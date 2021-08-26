<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    {{-- include HTML Head --}}
    @include('layouts.admin_partial.head')
    {{-- Header javascript define --}}
    @yield('javascrip-header')
</head>

<body>

    <body class="header-fixed">
        <!-- header -->
        @include('layouts.admin_partial.header')
        <!-- end of header -->
        <div class="page-body">
            @include('layouts.admin_partial.siderbar')
            @yield('content')
            <!-- footer -->
            @include('layouts.user_partial.footer')
            <!-- partial -->
        </div>
        @include('layouts.user_partial.importijs')
        @yield('javascript-end')
        <div></div>
    </body>
