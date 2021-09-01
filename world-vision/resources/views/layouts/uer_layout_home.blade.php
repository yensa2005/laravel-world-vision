<!DOCTYPE html>
<html lang="en">

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
                <!-- footer -->
                @include('layouts.user_partial.footer')
                <!-- partial -->
            </div>
        </div>
        @include('layouts.user_partial.importijs')
        @yield('javascript-end')
        <div></div>
</body>
