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
                <div class="popular-news">
                    <div class="row">
                        <!-- create news detail -->
                        @yield('content')
                        <!-- end of create news detail -->
                    </div>
                </div>
                <!-- footer -->
                @include('layouts.user_partial.footer')
                <!-- partial -->
            </div>
        </div>
        @include('layouts.user_partial.importijs')
        @yield('javascript-end')
        <div></div>
</body>
