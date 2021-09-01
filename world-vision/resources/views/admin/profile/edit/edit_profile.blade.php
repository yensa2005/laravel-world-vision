@extends('layouts.admin_layout')

@section('title', 'Edit Profile')

@section('content')
    <div class="col-lg-9">
        <div class="rela-block">
            <div class="rela-block profile-card">
                <div class="profile-pic" id="profile_pic"></div>
                <b class="pl-5">Thông tin cơ bản</b>
                <div class="profile-content pl-5 pr-5 pb-5 pt-3">
                    <div class="row">
                        <div class="col-lg-6 px-3">
                            <div class="form-wrapper">
                                <input type="text" placeholder="Tên hiển thị" class="form-control">
                            </div>
                            <div class="form-wrapper">
                                <input type="text" placeholder="@ID" class="form-control">
                            </div>
                            <div class="form-wrapper">
                                <select name="" id="" class="form-control">
                                    <option value="" disabled selected>Gender</option>
                                    <option value="male">Male</option>
                                    <option value="femal">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 px-3">
                            <div class="form-wrapper">
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-wrapper">
                                <input type="date" placeholder="Ngày sinh" class="form-control">
                            </div>
                            <div class="form-wrapper">
                                <input type="text" placeholder="Số điện thoại" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rela-block profile-card-2">
                <b class="pl-5">Social media</b>
                <div class="profile-content pl-5 pr-5 pb-5 pt-3">
                    <div class="row">
                        <div class="col-lg-6 px-3">
                            <div class="form-wrapper">
                                <input type="text" class="form-control">
                                <i class="bi bi-facebook"></i>
                            </div>
                            <div class="form-wrapper">
                                <input type="text" class="form-control">
                                <i class="bi bi-linkedin"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 px-3">
                            <div class="form-wrapper">
                                <input type="text" class="form-control">
                                <i class="bi bi-instagram"></i>
                            </div>
                            <div class="form-wrapper">
                                <input type="text" class="form-control">
                                <i class="bi bi-twitter"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-button">
                <button type="button" class="btn btn-outline-dark m-2">Hủy</button>
                <button type="button" class="btn btn-dark m-2">Lưu thông tin</button>
            </div>
            <div class="rela-block profile-card-2">
                <b class="pl-5">Thay đổi mật khẩu</b>
                <div class="profile-content pl-5 pr-5 pb-5 pt-3">
                    <div class="row">
                        <div class="col-lg-12 px-3">
                            <div class="form-wrapper">
                                <input type="password" placeholder="Mật khẩu cũ" class="form-control">
                            </div>
                            <div class="form-wrapper">
                                <input type="password" placeholder="Mật khẩu mới" class="form-control">
                            </div>
                            <div class="form-wrapper">
                                <input type="password" placeholder="Nhập lại mật khẩu mới" class="form-control">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-button">
                <button type="button" class="btn btn-outline-dark m-2">Hủy</button>
                <button type="button" class="btn btn-dark m-2">Đổi mật khẩu</button>
            </div>
        </div>

    </div>
    <style>
        input,
        textarea,
        select,
        option,
        button {
            color: #000;
            font-size: 13px;
        }

        .profile-button {
            display: flex;
            justify-content: center;
            margin: 20px;
        }

        .rela-block {
            display: block;
            position: relative;
            margin: auto;
        }

        .profile-card {
            width: calc(100% - 40px);
            padding-top: 100px;
            margin: 70px 0 0;
            width: 100%;
            border: 1px solid;
            border-radius: 10px;
        }

        .profile-card-2 {
            width: calc(100% - 40px);
            padding-top: 30px;
            margin: 30px 0 0;
            width: 100%;
            border: 1px solid;
            border-radius: 10px;
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
            background: url("https://images.unsplash.com/photo-1630251007907-55cc2a3d3b13?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80") center no-repeat;
            background-size: cover;
            box-shadow: 0 2px 6px -2px rgba(0, 0, 0, 0.26);
        }

        .form-wrapper {
            position: relative;
        }

        .form-wrapper i {
            position: absolute;
            bottom: 9px;
            right: 0;
        }

        .form-control {
            border: 1px solid #333;
            border-top: none;
            border-right: none;
            border-left: none;
            display: block;
            width: 100%;
            height: 30px;
            padding: 0;
            margin-bottom: 25px;
        }

        .form-control::-webkit-input-placeholder {
            font-size: 13px;
            color: #000;
        }

        .form-control::-moz-placeholder {
            font-size: 13px;
            color: #000;
        }

        .form-control:-ms-input-placeholder {
            font-size: 13px;
            color: #000;
        }

        .form-control:-moz-placeholder {
            font-size: 13px;
            color: #333;
        }

    </style>
@endsection
