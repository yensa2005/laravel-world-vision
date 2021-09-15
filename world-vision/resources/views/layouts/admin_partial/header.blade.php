<header id="header">
    <div class="container-fluid" style="padding: 0 50px">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                    <li>30°C, Hue, 29-08-2021</li>
                    {{-- <li>30°C,Hue</li> --}}
                </ul>
                <div>
                    <a class="navbar-brand" href="/home"><img src="{{ asset('assets/images/logo-01.png') }}" alt=""
                            width="300"></a>
                </div>
                {{-- <div class="d-flex justify-content-between align-items-center">
                    <a class="icon-nav" href=""><i class="bi bi-chat-left mx-3"><span
                                class="badge c">3</span></i></a>
                    <a class="icon-nav" href=""><i class="bi bi-bell mx-2"><i class="bi bi-bell mx-2"><span
                                class="badge">6</span></i></i></a>
                    <p class="fs-12 d-flex justify-content-center align-items-center m-0 ml-3">
                        <img src="{{ asset('assets/images/dashboard/Profile_1.jpg') }}" alt=""
                            class="img-rounded mr-2" width="30" />Hoang Phuong
                    </p>
                </div> --}}
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown d-none d-md-flex mr-2">
                        <a href="#" class="nav-link icon-nav px-0" data-toggle="dropdown">
                            <i class="fs-16 bi bi-chat-left mx-2"><span class="badge badge-chat">3</span></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="card-body-items d-flex justify-content-between align-items-center px-3 pb-1">
                                        <div class="card-body-content mr-1">
                                            <p class="fs-14 font-weight-bold m-0">Tin nhắn</p>
                                        </div>
                                        <div class="card-body-content">
                                            <a class="fs-12 font-weight-bold m-0" href="">Tất cả</a>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div
                                        class="card-body-items d-flex justify-content-between align-items-center p-3 bg-light">
                                        <div class="d-flex">
                                            <div class="card-body-img mr-1">
                                                <img src="{{ asset('assets/images/dashboard/Profile_1.jpg') }}" alt=""
                                                    class="img-rounded mr-2" width="40" />
                                            </div>
                                            <div class="card-body-content">
                                                <p class="fs-12 m-0 font-weight-bold">Chuong Phuong</p>
                                                <p class="fs-12 m-0 font-weight-bold">Cho mình xin thông tin bài này của bạn...</p>
                                            </div>
                                        </div>
                                        <h3><i class="bi bi-three-dots text-muted"></i></h3>
                                    </div>
                                    <hr class="m-0">
                                    <div
                                        class="card-body-items d-flex justify-content-between align-items-center p-3 bg-light">
                                        <div class="d-flex">
                                            <div class="card-body-img mr-1">
                                                <img src="{{ asset('assets/images/dashboard/Profile_2.jpg') }}" alt=""
                                                    class="img-rounded mr-2" width="40" />
                                            </div>
                                            <div class="card-body-content">
                                                <p class="fs-12 m-0 font-weight-bold">Quoc Tuan</p>
                                                <p class="fs-12 m-0 font-weight-bold">Chiều nay bạn có thời gian không?</p>
                                            </div>
                                        </div>
                                        <h3><i class="bi bi-three-dots text-muted"></i></h3>
                                    </div>
                                    <hr class="m-0">
                                    <div
                                        class="card-body-items d-flex justify-content-between align-items-center p-3 bg-light">
                                        <div class="d-flex">
                                            <div class="card-body-img mr-1">
                                                <img src="{{ asset('assets/images/dashboard/Profile_3.jpg') }}" alt=""
                                                    class="img-rounded mr-2" width="40" />
                                            </div>
                                            <div class="card-body-content">
                                                <p class="fs-12 m-0 font-weight-bold">Phuong Anh</p>
                                                <p class="fs-12 m-0 font-weight-bold">Mình đã đọc bài viết của bạn, mình muốn...</p>
                                            </div>
                                        </div>
                                        <h3><i class="bi bi-three-dots text-muted"></i></h3>
                                    </div>
                                    <hr class="m-0">
                                    <div class="card-body-items d-flex justify-content-between align-items-center p-3">
                                        <div class="d-flex">
                                            <div class="card-body-img mr-1">
                                                <img src="{{ asset('assets/images/dashboard/Profile_4.jpg') }}" alt=""
                                                    class="img-rounded mr-2" width="40" />
                                            </div>
                                            <div class="card-body-content">
                                                <p class="fs-12 m-0 font-weight-bold">Hai Bat</p>
                                                <p class="fs-12 m-0">Cảm ơn bạn nha</p>
                                            </div>
                                        </div>
                                        <h3><i class="bi bi-three-dots text-muted"></i></h3>
                                    </div>
                                    <hr class="m-0">
                                    <div class="card-body-items d-flex justify-content-between align-items-center p-3">
                                        <div class="d-flex">
                                            <div class="card-body-img mr-1">
                                                <img src="{{ asset('assets/images/dashboard/Profile_5.jpg') }}" alt=""
                                                    class="img-rounded mr-2" width="40" />
                                            </div>
                                            <div class="card-body-content">
                                                <p class="fs-12 m-0 font-weight-bold">Huong Van</p>
                                                <p class="fs-12 m-0">Oke bạn</p>
                                            </div>
                                        </div>
                                        <h3><i class="bi bi-three-dots text-muted"></i></h3>
                                    </div>
                                    <hr class="m-0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown d-none d-md-flex mr-2">
                        <a href="#" class="nav-link icon-nav px-0" data-toggle="dropdown">
                            <i class="fs-16 bi bi-bell mx-2"><span class="badge">1</span></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="card-body-items d-flex justify-content-between align-items-center px-3 pb-1">
                                        <div class="card-body-content mr-1">
                                            <p class="fs-14 font-weight-bold m-0">Thông báo</p>
                                        </div>
                                        <div class="card-body-content">
                                            <a class="fs-12 font-weight-bold m-0" href="">Tất cả</a>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div
                                        class="card-body-items d-flex justify-content-between align-items-center p-3 bg-light">
                                        <div class="d-flex">
                                            <div class="card-body-img mr-1">
                                                <img src="{{ asset('assets/images/dashboard/Profile_1.jpg') }}" alt=""
                                                    class="img-rounded mr-2" width="40" />
                                            </div>
                                            <div class="card-body-content">
                                                <p class="fs-12 m-0"><span class="font-weight-bold">Hoang
                                                        Anh</span>
                                                    đã bình luận bài viết của bạn.</p>
                                                <p class="fs-12 m-0">15 phút trước</p>
                                            </div>
                                        </div>
                                        <h3><i class="bi bi-chat-quote text-muted"></i></h3>
                                    </div>
                                    <hr class="m-0">

                                    <div class="card-body-items d-flex justify-content-between align-items-center p-3">
                                        <div class="d-flex">
                                            <div class="card-body-img mr-1">
                                                <img src="{{ asset('assets/images/dashboard/Profile_3.jpg') }}" alt=""
                                                    class="img-rounded mr-2" width="40" />
                                            </div>
                                            <div class="card-body-content">
                                                <p class="fs-12 m-0"><span class="font-weight-bold">Lan
                                                        Phuong</span>
                                                    đã thích bài viết của bạn.</p>
                                                <p class="fs-12 m-0">35 phút trước</p>
                                            </div>
                                        </div>
                                        <h3><i class="bi bi-heart text-muted"></i></h3>
                                    </div>
                                    <hr class="m-0">
                                    <div class="card-body-items d-flex justify-content-between align-items-center p-3">
                                        <div class="d-flex">
                                            <div class="card-body-img mr-1">
                                                <img src="{{ asset('assets/images/dashboard/Profile_2.jpg') }}" alt=""
                                                    class="img-rounded mr-2" width="40" />
                                            </div>
                                            <div class="card-body-content">
                                                <p class="fs-12 m-0"><span class="font-weight-bold">Quoc
                                                        Tuan</span>
                                                    đã bình luận bài viết của bạn.</p>
                                                <p class="fs-12 m-0">1 giờ trước</p>
                                            </div>
                                        </div>
                                        <h3><i class="bi bi-chat-quote text-muted"></i></h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown d-flex justify-content-center align-items-center ">
                        <a href="#" class="fs-12 d-flex justify-content-center align-items-center m-0 ml-3 text-dark"
                            data-toggle="dropdown"><img src="{{ asset('assets/images/dashboard/Profile_1.jpg') }}"
                                alt="" class="img-rounded mr-2" width="30" />Hoang Phuong
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="fs-12 dropdown-item" href="/home">Cài đặt</a>
                            <a class="fs-12 dropdown-item" href="/admin/profile">Quản lý tài khoản</a>
                            <hr class="m-1">
                            <a class="fs-12 dropdown-item" href="/home">Đăng xuất</a>
                        </div>
                    </div>
                </div>
        </nav>
    </div>
</header>
<style>
    .icon-nav {
        font-size: 20px;
        color: #000;
    }

    .badge {
        position: absolute;
        border-radius: 50%;
        background: red;
        /* top: 37px;
        right: 154px; */
        top: 7px;
        right: 7px;
        color: white;
        font-size: 9px;
    }

    .badge-chat {
        right: 3px;
    }

    .card .card-body {
        width: 400px;
        padding: 0;
    }

</style>
