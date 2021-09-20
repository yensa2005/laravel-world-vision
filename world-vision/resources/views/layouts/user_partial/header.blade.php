<header id="header">
    <div class="container">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                    <li>30°C, Hue, 29-08-2021</li>
                    {{-- <li>30°C,Hue</li> --}}
                </ul>
                <div>
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-01.png') }}" alt=""
                            width="300"></a>
                </div>
                <div class="d-flex">
                    <ul class="navbar-right">
                        <li>
                            <a href="{{ route('admin.dang-nhap') }}">Đăng nhập</a>
                        </li>
                        <li>
                            <a href="{{ route('join') }}">Đăng ký</a>
                        </li>
                    </ul>

                </div>
            </div>
            @include('layouts.user_partial.menu')
        </nav>
    </div>
</header>
