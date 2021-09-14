@extends('layouts.admin_layout')

@section('title', 'Author')

@section('content')
    <div class="form-card col-lg-10">
        <div class="row ">
            <div class="card-items col-lg-3">
                <div class="card-item">
                    <div class="card">
                        <p>Bài viết</p>
                        <h1>255</h1>
                    </div>
                    <h1><i class="bi bi-pencil pr-4"></i></h1>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <a href="/admin/post">
                        <p class="view-detail">Xem thêm</p>
                    </a>
                    <a href="/admin/post"><i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="card-items col-lg-3">
                <div class="card-item">
                    <div class="card">
                        <p>Chuyên mục</p>
                        <h1>5</h1>
                    </div>
                    <h1><i class="bi bi-card-list pr-4"></i></h1>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <a href="/admin/post">
                        <p class="view-detail">Xem thêm</p>
                    </a>
                    <a href="/admin/post"><i class="bi bi-arrow-right-circle"></i></a>
                </div>

            </div>
            <div class="card-items col-lg-3">
                <div class="card-item">
                    <div class="card">
                        <p>Thẻ</p>
                        <h1>25</h1>
                    </div>
                    <h1><i class="bi bi-tags pr-4"></i></h1>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <a href="/admin/post">
                        <p class="view-detail">Xem thêm</p>
                    </a>
                    <a href="/admin/post"><i class="bi bi-arrow-right-circle"></i></a>
                </div>

            </div>
            <div class="card-items col-lg-3">
                <div class="card-item">
                    <div class="card">
                        <p>Người quản trị</p>
                        <h1>2</h1>
                    </div>
                    <h1><i class="bi bi-people pr-4"></i></h1>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <a href="/admin/post">
                        <p class="view-detail">Xem thêm</p>
                    </a>
                    <a href="/admin/post"><i class="bi bi-arrow-right-circle"></i></a>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="card-profile col-lg-5">
                <div class="card-item">
                    <p class="card-view-detail">Người dùng</p>
                    <a href="/admin/author/list"><i class="bi bi-arrow-right-circle"></i></a>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-img">
                        <div class="card-img-left">
                            <img src="assets/images/dashboard/Profile_1.png" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Yen Sa</p>
                                <p class="fs-14 m-0">ttysa98tcv@gmail.com</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-img">
                        <div class="card-img-left">
                            <img src="assets/images/dashboard/Profile_2.png" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Luong Hoang</p>
                                <p class="fs-14 m-0">luonghoang@gmail.com</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-img">
                        <div class="card-img-left">
                            <img src="assets/images/dashboard/Profile_3.png" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Cao Tuan</p>
                                <p class="fs-14 m-0">caotuan@gmail.com</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-img">
                        <div class="card-img-left">
                            <img src="assets/images/dashboard/Profile_4.png" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Chuan Hai</p>
                                <p class="fs-14 m-0">chuanhai@gmail.com</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-img">
                        <div class="card-img-left">
                            <img src="assets/images/dashboard/Profile_5.png" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Thuy Trang</p>
                                <p class="fs-14 m-0">thuytrang@gmail.com</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="card-post col-lg-7">
                <div class="card-item">
                    <p class="card-view-detail">Bài viết</p>
                    <a href="/admin/author/list"><i class="bi bi-arrow-right-circle"></i></a>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-post-img">
                        <div class="card-img-left">
                            <img src="assets/images/admin/post/facebook.jpg" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Thử màn hình cảm ứng trên Windows 11</p>
                                <p class="fs-14 m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-post-img">
                        <div class="card-img-left">
                            <img src="assets/images/admin/post/telegram.jpg" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Hi hữu: Một ứng dụng của Google có...</p>
                                <p class="fs-14 m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-post-img">
                        <div class="card-img-left">
                            <img src="assets/images/admin/post/map.jpg" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Telegram vừa ra mắt một loạt tính...</p>
                                <p class="fs-14 m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-post-img">
                        <div class="card-img-left">
                            <img src="assets/images/admin/post/win11.jpg" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Google Maps buộc người dùng phải...</p>
                                <p class="fs-14 m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr class="m-0">
                <div class="card-item">
                    <div class="card-post-img">
                        <div class="card-img-left">
                            <img src="assets/images/admin/post/google.jpg" alt="">
                            <div class="content pl-3">
                                <p class="m-0 font-weight-bold">Facebook vinh danh 9 hacker Việt...</p>
                                <p class="fs-14 m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="card-img-right">
                            <h2><i class="bi bi-three-dots"></i></h2>
                        </div>
                    </div>
                    <hr>
                </div>

            </div>
        </div>
    </div>
    <style>
        .form-card {
            margin-top: 55px;
        }

        .card-items {
            border: 1px solid #000;
            border-radius: 10px;
            margin: 15px 5px 15px 5px;
            max-width: 280px;
        }

        .card-items:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }

        .card-item {
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .card {
            padding: 10px 25px;
        }

        .card p {
            font-size: 0.75rem;
            text-transform: uppercase;
            color: rgb(158, 158, 158);
            margin: 0;
        }

        .card h1 {
            margin: 0;
            color: #007bff;
        }

        .view-detail {
            font-size: 0.75rem;
            margin: 0;
            padding: 5px;
            color: rgb(158, 158, 158);
        }

        .card-view-detail {
            font-size: 0.85rem;
            margin: 0;
            padding: 5px;
            font-weight: 500;
        }

        .card-profile {
            border: 1px solid #000;
            border-radius: 10px;
            margin: 5px;
        }

        .card-post {
            border: 1px solid #000;
            border-radius: 10px;
            margin: 5px;
            max-width: 650px;
        }

        .card-img,
        .card-post-img {
            padding: 10px 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .card-img-left {
            display: flex;
        }

        .card-img-right {
            color: rgb(158, 158, 158);
        }

        .card-img img {
            width: 12%;
            height: 12%;
        }

        .card-post-img img {
            width: 20%;
            height: 20%;
        }

    </style>
@endsection
