<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('layouts.admin_partial.head')
    @yield('javascrip-header')
</head>

<body>
    @yield('content')
    @include('layouts.admin_partial.importijs')
</body>
