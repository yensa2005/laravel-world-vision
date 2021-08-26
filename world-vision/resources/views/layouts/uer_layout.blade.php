<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    {{-- include HTML Head --}}
    @include('layouts.user_partial.head')
    {{-- Header javascript define --}}
    @yield('javascrip-header')
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- header -->
            @include('layouts.user_partial.header')
            <!-- end of header -->
            <div class="container">
                <div class="row">
                <!-- slide -->
                @include('layouts.user_partial.slide')
                <!-- end of slide -->
                @include('layouts.user_partial.siderbar')
                </div>
                @yield('content')
                {{-- @include('news.pages.home') --}}

                <!-- footer -->
                @include('layouts.user_partial.footer')
                <!-- partial -->
            </div>
        </div>
        @include('layouts.user_partial.importijs')
        @yield('javascript-end')
        <div></div>
</body>
