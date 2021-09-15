@extends('layouts.login_layout')

@section('title', 'Đăng nhập')

@section('content')
    <div class="d-lg-flex half justify-content-between">
        <div class="bg order-1 order-md-2" style="background-image: url('../assets/images/admin/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 mt-5">
                        <a class="navbar-brand mb-5" href="/home"><img src="{{ asset('assets/images/logo-01.png') }}"
                                alt="" width="200"></a>
                        <h3 class="font-weight-bold">Đăng nhập</h3>
                        <p class="fs-14 mb-4">Chào mừng bạn đã quay trở lại.</p>
                        <form action="#" method="post">
                            <div class="form-group first">
                                <label for="username">@ID</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Ghi nhớ tài
                                        khoản</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Quên mật khẩu?</a></span>
                            </div>

                            <input type="submit" value="Đăng nhập" class="btn btn-block btn-dark">
                            <p class="fs-14 mt-4 text-center">Bạn chưa có tài khoản? <a href="/join">Tham gia</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .half,
        .half .container>.row {
            height: 100vh;
        }

        @media (max-width: 991.98px) {
            .half .bg {
                height: 500px;
            }
        }

        .half .contents,
        .half .bg {
            width: 50%;
        }

        @media (max-width: 1199.98px) {

            .half .contents,
            .half .bg {
                width: 100%;
            }
        }

        .half .contents .form-group,
        .half .bg .form-group {
            margin-bottom: 0;
            border: 1px solid #efefef;
            padding: 15px 15px;
            border-bottom: none;
        }

        .half .contents .form-group.first,
        .half .bg .form-group.first {
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
        }

        .half .contents .form-group.last,
        .half .bg .form-group.last {
            border-bottom: 1px solid #efefef;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
        }

        .half .contents .form-group label,
        .half .bg .form-group label {
            font-size: 12px;
            display: block;
            margin-bottom: 0;
            color: #b3b3b3;
        }

        .half .contents .form-control,
        .half .bg .form-control {
            border: none;
            padding: 0;
            font-size: 14px;
            border-radius: 0;
        }

        .half .contents .form-control:active,
        .half .contents .form-control:focus,
        .half .bg .form-control:active,
        .half .bg .form-control:focus {
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .half .bg {
            background-size: cover;
            background-position: center;
        }

        .half a {
            color: #888;
            text-decoration: underline;
        }

        .half .btn {
            height: 54px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .half .forgot-pass {
            position: relative;
            top: 2px;
            font-size: 12px;
        }

        .control {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            cursor: pointer;
            font-size: 12px;
        }

        .control .caption {
            position: relative;
            top: .2rem;
            color: #888;
        }

        .control input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .control__indicator {
            position: absolute;
            top: 2px;
            left: 0;
            height: 20px;
            width: 20px;
            background: #e6e6e6;
            border-radius: 4px;
        }

        .control--radio .control__indicator {
            border-radius: 50%;
        }

        .control:hover input~.control__indicator,
        .control input:focus~.control__indicator {
            background: #ccc;
        }

        .control input:checked~.control__indicator {
            background: #000;
        }

        .control:hover input:not([disabled]):checked~.control__indicator,
        .control input:checked:focus~.control__indicator {
            background: #000;
        }

        .control input:disabled~.control__indicator {
            background: #e6e6e6;
            opacity: 0.9;
            pointer-events: none;
        }

        .control__indicator:after {
            font-family: 'icomoon';
            content: '';
            position: absolute;
            display: none;
            font-size: 16px;
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        .control input:checked~.control__indicator:after {
            display: block;
            color: #fff;
        }

        .control--checkbox .control__indicator:after {
            top: 50%;
            left: 50%;
            margin-top: -1px;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .control--checkbox input:disabled~.control__indicator:after {
            border-color: #7b7b7b;
        }

        .control--checkbox input:disabled:checked~.control__indicator {
            background-color: #000;
            opacity: .2;
        }

    </style>
@endsection
