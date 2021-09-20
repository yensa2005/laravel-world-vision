<footer>
    {{-- <div class="col-sm-12">
        <div class="border-top"></div>
    </div> --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="d-flex justify-content-between align-items-center mt-5 mb-2">
                <img src="{{ asset('assets/images/logo.svg') }}" class="footer-logo" alt="" />
                <ul class="navbar-nav d-lg-flex justify-content-center align-items-center"
                    style="flex-direction: inherit;">
                    <li class="nav-item mx-4"><a class="nav-link text-dark" href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="nav-item mx-4"><a class="nav-link text-dark" href="{{ route('news.faq') }}">FAQ</a></li>
                    <li class="nav-item mx-4"><a class="nav-link text-dark" href="{{ route('news.about-us') }}">Về chúng
                            tôi</a>
                    </li>
                    <li class="nav-item mx-2"><a class="nav-link text-dark" href="{{ route('news.contact') }}">Liên hệ</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-center footer-social">
                    <ul class="social-media">
                        <li><a href="https://instagram.com"><i class="mdi mdi-instagram mdi-icon"></i></a></li>
                        <li><a href="https://facebook.com"><i class="mdi mdi-facebook mdi-icon"></i></a></li>
                        <li><a href="https://youtube.com"><i class="mdi mdi-youtube mdi-icon"></i></a></li>
                        <li><a href="https://linkedin.com"><i class="mdi mdi-linkedin mdi-icon"></i></a></li>
                        <li><a href="https://twitter.com"><i class="mdi mdi-twitter mdi-icon"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="d-lg-flex justify-content-between align-items-center border-top mt-4 footer-bottom">
                <ul class="footer-horizontal-menu">
                    <li><a href="#">Terms of Use.</a></li>
                    <li><a href="#">Privacy Policy.</a></li>
                    <li><a href="#">Accessibility & CC.</a></li>
                    <li><a href="#">AdChoices.</a></li>
                    <li><a href="#">Advertise with us Transcripts.</a></li>
                    <li><a href="#">License.</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
                <p class="font-weight-medium">
                    © 2021 .All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
    <style>
        .nav-link:hover {
            font-weight: bold;
        }

        .mdi-icon {
            color: #000;
        }

        .mdi-icon:hover {
            color: #0a62fb;
        }

    </style>
</footer>
