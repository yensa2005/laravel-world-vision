<header id="header">
    <div class="container">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                    <li>Wed, March 4, 2020</li>
                    <li>30°C,London</li>
                </ul>
                <div>
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.svg" alt="" /></a>
                </div>
                <div class="d-flex">
                    <ul class="navbar-right" style="padding-right: 30px">
                        <li>
                            <a href="#">Đăng nhập</a>
                        </li>
                        <li>
                            <a href="#">Đăng ký</a>
                        </li>
                    </ul>
                    <form id="content">
                        <input type="text" name="input" class="input" id="search-input" placeholder="search" style="width:130px; height:28px; font-size:12px;">
                        <a href=""><i class="bi bi-search ml-2"></i></a>
                    </form>
                </div>
            </div>
            @include('layouts.user_partial.menu')
        </nav>
    </div>
</header>
