@extends('layouts.uer_layout_profile')

@section('title', 'Profile')

@section('content')
    <div class="col-lg-9">
        <div class="rela-block">
            <div class="rela-block profile-card">
                <div class="profile-pic" id="profile_pic"></div>
                <div class="rela-block profile-name-container">
                    <div class="rela-block user-name" id="user_name">User Name Here</div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex justify-content-center footer-social">
                                <ul class="social-media">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rela-block profile-card-stats">
                    <div class="floated profile-stat works" id="num_works">6<br></div>
                    <div class="floated profile-stat followers" id="num_followers">112<br></div>
                    <div class="floated profile-stat following" id="num_following">245<br></div>
                </div>
            </div>
        </div>
        <a href="/profile/edit" style="display: flex;
            justify-content: center;
            margin: 20px 0;
            color: #000;"><i class="bi bi-pencil-square mr-2"></i>Chỉnh sửa trang cá nhân</a>
        <div class="pb-3">
            <b>Danh sách bài viết</b>
        </div>
        <div class="row">
            <div class="col-lg-12  mb-5 mb-sm-2">
                <div class="row">
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-5.jpg" class="img-fluid" alt="world-news" />
                            <span class="thumb-title">POLITICS</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            A look at California's eerie plane graveyards
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Lorem Ipsum has been the industry's standard dummy text
                        </p>
                    </div>
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-6.jpg" class="img-fluid" alt="world-news" />
                            <span class="thumb-title">TRAVEL</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            The world's most beautiful racecourses
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Lorem Ipsum has been the industry's standard dummy text
                        </p>
                    </div>
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-5.jpg" class="img-fluid" alt="world-news" />
                            <span class="thumb-title">POLITICS</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            A look at California's eerie plane graveyards
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Lorem Ipsum has been the industry's standard dummy text
                        </p>
                    </div>
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-6.jpg" class="img-fluid" alt="world-news" />
                            <span class="thumb-title">TRAVEL</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            The world's most beautiful racecourses
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Lorem Ipsum has been the industry's standard dummy text
                        </p>
                    </div>
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-5.jpg" class="img-fluid" alt="world-news" />
                            <span class="thumb-title">POLITICS</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            A look at California's eerie plane graveyards
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Lorem Ipsum has been the industry's standard dummy text
                        </p>
                    </div>
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-6.jpg" class="img-fluid" alt="world-news" />
                            <span class="thumb-title">TRAVEL</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            The world's most beautiful racecourses
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Lorem Ipsum has been the industry's standard dummy text
                        </p>
                    </div>
                </div>
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
            background: url("https://pbs.twimg.com/media/CdbiubzVIAANj8J.jpg") center no-repeat;
            background-size: cover;
            box-shadow: 0 2px 6px -2px rgba(0, 0, 0, 0.26);

        }

        .profile-name-container {
            margin: 0 auto 10px;
            padding: 10px;
            text-align: center;

        }

        .user-name {
            font-family: "Montserrat";
            font-size: 18px;
            font-weight: 500;
            line-height: 30px;
            margin-bottom: 10px;
        }

        .user-desc {

            color: #999;
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

        .image {
            width: 240px;
            height: 200px;
            cursor: pointer;
            margin: 0 20px 40px;
            overflow: hidden;
            border-radius: 5px;
            border: 10px solid #fff;
            box-shadow: 0 2px 6px -2px rgba(0, 0, 0, 0.26);
            background-color: rgba(0, 0, 0, 0.4);
            background-size: cover !important;
            -webkit-transition: 0.2s cubic-bezier(0.5, 0, 0.2, 1);
            transition: 0.2s cubic-bezier(0.5, 0, 0.2, 1);
        }

        .image:hover {
            -webkit-transform: scale(1.06);
            transform: scale(1.06);
            box-shadow: 0 2px 18px -2px rgba(0, 0, 0, 0.3);
        }

        .image.hidden {
            height: 0;
            width: 0px;
            margin: 0px;
            border: 0px solid #fff;
        }

        .social-media {
            padding-left: 0;
        }

    </style>
@endsection
