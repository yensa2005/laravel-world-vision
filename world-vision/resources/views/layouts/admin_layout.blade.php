<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    {{-- include HTML Head --}}
    @include('layouts.admin_partial.head')
    {{-- Header javascript define --}}
    @yield('javascrip-header')
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- header -->
            @include('layouts.admin_partial.header')
            <!-- end of header -->
            <div class="container">
                <div class="popular-news">
                    <div class="row">
                        <!--siderbar -->
                        @include('layouts.admin_partial.siderbar')
                        <!-- end of siderbar -->
                        <!-- news -->
                        @yield('content')
                        <!-- end of news -->

                    </div>
                </div>
            </div>
            <!-- footer -->
            @include('layouts.admin_partial.footer')
            <!-- partial -->
        </div>
    </div>
    @include('layouts.admin_partial.importijs')
    @yield('javascript-end')
    <div></div>
</body>
