@extends('layouts.admin_layout')

@section('title', 'Profile')

@section('content')
    <div class="col-lg-10">
        <div class="rela-block">
            <div class="rela-block profile-card">
                <div class="profile-pic" id="profile_pic"></div>
                <div class="rela-block profile-name-container">
                    Hoang Phuong
                </div>
                <div class="d-flex justify-content-center footer-social">
                    <ul class="social-media">
                        <li><a href="https://instagram.com"><i class="mdi mdi-instagram mdi-icon"></i></a></li>
                        <li><a href="https://facebook.com"><i class="mdi mdi-facebook mdi-icon"></i></a></li>
                        <li><a href="https://youtube.com"><i class="mdi mdi-youtube mdi-icon"></i></a></li>
                        <li><a href="https://linkedin.com"><i class="mdi mdi-linkedin mdi-icon"></i></a></li>
                        <li><a href="https://twitter.com"><i class="mdi mdi-twitter mdi-icon"></i></a></li>
                    </ul>
                </div>
                <div class="rela-block profile-card-stats">
                    <div class="floated profile-stat works" id="num_works">8<br></div>
                    <div class="floated profile-stat followers" id="num_followers">112<br></div>
                    <div class="floated profile-stat following" id="num_following">245<br></div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.editProfile') }}" class="d-flex justify-content-center my-4 text-dark"><i
                class="bi bi-pencil-square mr-2"></i>Cập nhật trang cá nhân</a>
        <div class="pb-3">
            <b>Danh sách bài viết</b>
        </div>
        <div class="row mb-4">
            <div class="col-sm-3  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="../assets/images/business/Business_18.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">CÔNG NGHỆ VUI</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Đây là 4 tính năng camera "xịn xò" sẽ xuất...
                </h5>
            </div>
            <div class="col-sm-3 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="../assets/images/dashboard/star-magazine-14.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">CONCEPT</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Lộ diện mô hình MacBook Pro với khay chứa bút cảm ứng
                </h5>
            </div>
            <div class="col-sm-3  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="../assets/images/business/Business_20.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">ỨNG DỤNG</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    iPhone 13 sắp ra mắt sẽ có những tính năng...
                </h5>
            </div>
            <div class="col-sm-3  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="../assets/images/business/Business_21.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">THỦ THUẬT</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Hãy bán iPhone 12 của bạn ngay bây giờ nếu...
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="../assets/images/dashboard/star-magazine-9.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">THỦ THUẬT</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Thủ thuật đơn giản này sẽ giúp iPhone của bạn tránh bị "đột tử" khi cạn pin
                </h5>
            </div>
            <div class="col-sm-3 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="../assets/images/dashboard/star-magazine-10.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">ỨNG DỤNG</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Google Maps buộc người dùng phải chia sẻ dữ liệu di chuyển để có thể dùng...
                </h5>
            </div>
            <div class="col-sm-3 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="../assets/images/dashboard/star-magazine-11.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">CONCEPT</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Apple Watch Series 7 sẽ có hai kích thước 41mm và 45mm
                </h5>
            </div>
            <div class="col-sm-3 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="../assets/images/dashboard/star-magazine-12.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">MOBILE</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    Nóng: Apple chính thức công bố ngày ra mắt iPhone 13
                </h5>
            </div>
        </div>
    </div>
    <style>
        .rela-block {
            display: block;
            position: relative;
            margin: auto;
        }

        .floated {
            display: inline-block;
            position: relative;
            margin: false;
            float: left;
        }

        .profile-card {
            width: calc(100% - 40px);
            padding-top: 100px;
            margin: 70px 0 0;
            width: 100%;
            border: 1px solid;
            border-radius: 10px 10px 0 0;
        }

        .profile-pic {
            display: false;
            position: absolute;
            margin: false;
            top: -90px;
            left: 50%;
            right: false;
            bottom: false;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            height: 180px;
            width: 180px;
            border: 2px solid #fff;
            border-radius: 100%;
            background: url("../assets/images/dashboard/Profile_1.jpg") center no-repeat;
            background-size: cover;
            box-shadow: 0 2px 6px -2px rgba(0, 0, 0, 0.26);

        }

        .profile-name-container {
            margin: 0 auto 10px;
            padding: 10px;
            text-align: center;
            font-weight: 500;
            font-size: 1.5rem;
        }

        .user-name {
            font-family: "Montserrat";
            font-size: 18px;
            font-weight: 500;
            line-height: 30px;
            margin-bottom: 10px;
        }

        .profile-card-stats {
            height: 75px;
            padding: 10px 0px;
            text-align: center;
            overflow: hidden;
            margin: 20px 0px 0px;
        }

        .profile-stat {
            height: 100%;
            width: 33.3333%;
        }

        .profile-stat:after {
            color: #999;
        }

        .works::after {
            content: "bài viết";
        }

        .followers::after {
            content: "bình luận";
        }

        .following::after {
            content: "theo dõi";
        }

        .social-media {
            padding-left: 0;
        }

        .social-media li a i {
            font-size: 15px;
        }

        .mdi-icon {
            color: #000;
        }

        .mdi-icon:hover {
            color: #0a62fb;
        }

    </style>
@endsection
