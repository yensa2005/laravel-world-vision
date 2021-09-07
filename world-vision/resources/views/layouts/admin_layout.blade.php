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
    <div class="container-fluid" style="padding: 0">
        <div class="main-panel">
            <!-- header -->
            @include('layouts.admin_partial.header')
            <!-- end of header -->
            <div class="container-fluid" style="padding: 40px 50px">
                    <div class="row">
                        <!--siderbar -->
                        @include('layouts.admin_partial.siderbar')
                        <!-- end of siderbar -->
                        <!-- news -->
                        @yield('content')
                        <!-- end of news -->

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
