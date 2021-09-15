@extends('layouts.admin_layout')

@section('title', 'Post')

@section('content')
    <div class="col-lg-10">
        <div class="row">
            <div class="col-md-offset-1 col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-sm-3 col-xs-12">
                                <h4 class="title">Danh sách</h4>
                            </div>
                            <div class="col-sm-9 col-xs-12 text-right p-0">
                                <div class="btn_group">
                                    <input type="text" class="form-control">
                                    <a href="/admin/post"><button class="btn btn-default mx-2">Làm mới</button></a>
                                    <a href="post/create"><button class="btn btn-default">Thêm</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> <label class="customcheckbox m-b-20"> <input type="checkbox" id="mainCheckbox">
                                            <span class="checkmark"></span> </label> </th>
                                    <th>#</th>
                                    <th>Tiêu đề</th>
                                    <th>Nổi bật</th>
                                    <th>Trạng thái</th>
                                    <th>Tags</th>
                                    <th>Chuyên mục</th>
                                    <th>Views</th>
                                    <th>Ngày đăng</th>
                                    <th>Ảnh chính</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th> <label class="customcheckbox"> <input type="checkbox" class="listCheckbox"> <span
                                                class="checkmark"></span> </label> </th>
                                    <td>1</td>
                                    <td>Thử màn hình cảm ứng trên Windows 11</td>
                                    <td class="icon-on"><i class="bi bi-check-square-fill pr-2"></i></td>
                                    <td class="icon-off"><i class="bi bi-x-square-fill pr-2"></i></td>
                                    <td>đánh giá, windows 11</td>
                                    <td>Ứng dụng</td>
                                    <td>34</td>
                                    <td>20:49:51 14/05/2021</td>
                                    <td><img src="../assets/images/admin/post/win11.jpg" class="img-fluid"
                                            width="300" /></td>
                                    <td>
                                        <ul class="action-list">
                                            <li><a href="#" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th> <label class="customcheckbox"> <input type="checkbox" class="listCheckbox"> <span
                                                class="checkmark"></span> </label> </th>
                                    <td>2</td>
                                    <td>Hi hữu: Một ứng dụng của Google có thể khiến nhiều người mất việc</td>
                                    <td class="icon-on"><i class="bi bi-check-square-fill pr-2"></i></td>
                                    <td class="icon-on"><i class="bi bi-check-square-fill pr-2"></i></td>
                                    <td>google</td>
                                    <td>Ứng dụng</td>
                                    <td>465875</td>
                                    <td>20:49:51 14/05/2021</td>
                                    <td><img src="../assets/images/admin/post/google.jpg" class="img-fluid"
                                            width="300" /></td>
                                    <td>
                                        <ul class="action-list">
                                            <li><a href="#" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th> <label class="customcheckbox"> <input type="checkbox" class="listCheckbox"> <span
                                                class="checkmark"></span> </label> </th>
                                    <td>3</td>
                                    <td>Telegram vừa ra mắt một loạt tính năng mới</td>
                                    <td class="icon-off"><i class="bi bi-x-square-fill pr-2"></i></td>
                                    <td class="icon-off"><i class="bi bi-x-square-fill pr-2"></i></td>
                                    <td>giới thiệu, telegram</td>
                                    <td>Ứng dụng</td>
                                    <td>834</td>
                                    <td>20:49:51 14/05/2021</td>
                                    <td><img src="../assets/images/admin/post/telegram.jpg" class="img-fluid"
                                            width="300" /></td>
                                    <td>
                                        <ul class="action-list">
                                            <li><a href="#" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th> <label class="customcheckbox"> <input type="checkbox" class="listCheckbox"> <span
                                                class="checkmark"></span> </label> </th>
                                    <td>4</td>
                                    <td>Google Maps buộc người dùng phải chia sẻ dữ liệu di chuyển để có thể dùng tính năng
                                        dẫn đường trực tiếp</td>
                                    <td class="icon-on"><i class="bi bi-check-square-fill pr-2"></i></td>
                                    <td class="icon-off"><i class="bi bi-x-square-fill pr-2"></i></td>
                                    <td>map</td>
                                    <td>Ứng dụng</td>
                                    <td>35648</td>
                                    <td>20:49:51 14/05/2021</td>
                                    <td><img src="../assets/images/admin/post/map.jpg" class="img-fluid" width="300" />
                                    </td>
                                    <td>
                                        <ul class="action-list">
                                            <li><a href="#" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th> <label class="customcheckbox"> <input type="checkbox" class="listCheckbox"> <span
                                                class="checkmark"></span> </label> </th>
                                    <td>5</td>
                                    <td>Facebook vinh danh 9 hacker Việt Nam vì góp phần thông báo "lỗ hổng" ứng dụng</td>
                                    <td class="icon-on"><i class="bi bi-check-square-fill pr-2"></i></td>
                                    <td class="icon-off"><i class="bi bi-x-square-fill pr-2"></i></td>
                                    <td>facebook</td>
                                    <td>Ứng dụng</td>
                                    <td>34</td>
                                    <td>20:49:51 14/05/2021</td>
                                    <td><img src="../assets/images/admin/post/facebook.jpg" class="img-fluid"
                                            width="300" /></td>
                                    <td>
                                        <ul class="action-list">
                                            <li><a href="#" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col col-sm-6 col-xs-6">showing <b>5</b> out of <b>25</b> entries</div>
                            <div class="col-sm-6 col-xs-6">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#">«</a></li>
                                    <li class="active"><a href="#">1 <span
                                                class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .btn_group {
            display: flex;
            justify-content: flex-end;
        }

        .pagination {
            display: flex;
            justify-content: flex-end;
            padding: 0;

        }

        .pagination>li>a,
        .pagination>li>span {
            font-weight: 100;
            margin: 0 5px;
            color: #000;
        }

        .pagination>li>a:hover,
        .pagination>li>span:hover {
            margin: 0 5px;
            color: #007bff;
        }

        .fa-trash,
        .icon-off {
            color: #B61919;
        }

        .fa-edit,
        .icon-on {
            color: #66DE93;
        }

        .panel {
            padding: 0;
            border-radius: 10px;
            border: none;
        }

        .panel .panel-heading {
            padding: 15px;
            border-radius: 10px 10px 0 0;
            margin: 0;
        }

        .panel .panel-heading .title {
            font-size: 22px;
            font-weight: 500;
            line-height: 40px;
            margin: 0;
        }

        .panel .panel-heading .btn {
            color: #000;
            background: transparent;
            /* font-size: 16px; */
            border: 1px solid #000;
            /* border-radius: 50px; */
            transition: all 0.3s ease 0s;
            height: 40px;
        }

        .panel .panel-heading .btn:hover {
            color: #fff;
            background: #000;
        }

        .panel .panel-heading .form-control {
            background-color: transparent;
            width: 35%;
            height: 40px;
            border: 1px solid #000;
            display: inline-block;
            transition: all 0.3s ease 0s;
            box-sizing: border-box;
            padding: 12px 20px 12px 40px;
            background-repeat: no-repeat;
            background-position: 10px 9px;
            background-size: 20px;
            background-image: url('https://icons-for-free.com/iconfiles/png/512/search+icon-1320183705543171170.png');

        }

        .panel .panel-heading .form-control:focus {
            box-shadow: none;
            outline: none;
        }

        .panel .panel-heading .form-control::placeholder {
            color: #000;
            font-size: 15px;
            font-weight: 500;
        }

        .panel .panel-body {
            padding: 0;
            border: 1px solid #000;
            border-radius: 10px;
        }

        .panel .panel-body .table thead tr th {
            background-color: rgba(255, 255, 255, 0.2);
            font-size: 16px;
            font-weight: 500;
        }

        .table th {
            padding: 1rem;
            border-top: 1px solid #dee2e6;
        }

        .panel .panel-body .table tbody tr td {
            font-size: 15px;
            padding: 10px 12px;
            vertical-align: middle;
        }

        .panel .panel-body .table tbody tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .panel .panel-body .table tbody .action-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .panel .panel-body .table tbody .action-list li {
            display: inline-block;
            margin: 0 5px;
        }

        .panel .panel-body .table tbody .action-list li a {
            font-size: 15px;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-body .table tbody .action-list li a:hover {
            color: #fff;
        }

        .panel .panel-body .table tbody .action-list li a:before,
        .panel .panel-body .table tbody .action-list li a:after {
            content: attr(data-tip);
            background-color: #111;
            font-size: 12px;
            padding: 5px 7px;
            border-radius: 4px;
            display: none;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -32px;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-body .table tbody .action-list li a:after {
            content: '';
            height: 15px;
            width: 15px;
            padding: 0;
            border-radius: 0;
            transform: translateX(-50%) rotate(45deg);
            top: -18px;
            z-index: -1;
        }

        .panel .panel-body .table tbody .action-list li a:hover:before,
        .panel .panel-body .table tbody .action-list li a:hover:after {
            display: block;
        }

        .panel .panel-footer {
            background-color: transparent;
            padding: 15px;
            border: none;
        }

        .panel .panel-footer .col {
            line-height: 35px;
        }

        .pagination {
            margin: 0;
        }

        .pagination li a {
            background-color: transparent;
            border: 2px solid transparent;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            line-height: 31px;
            width: 35px;
            height: 35px;
            padding: 0;
            margin: 0 3px;
            border-radius: 50px;
            transition: all 0.3s ease 0s;
        }

        .pagination li a:hover {
            background-color: transparent;
            border-color: rgba(255, 255, 255, 0.2);
        }

        .pagination li a:focus,
        .pagination li.active a,
        .pagination li.active a:hover {
            background-color: transparent;
            border-color: #fff;
        }

        .pagination li:first-child a,
        .pagination li:last-child a {
            border-radius: 50%;
        }

        @media only screen and (max-width:767px) {
            .panel .panel-heading .title {
                text-align: center;
                margin: 0 0 10px;
            }

            .panel .panel-heading .btn_group {
                text-align: center;
            }
        }

        .customcheckbox {
            display: block;
            position: relative;
            padding-left: 24px;
            font-weight: 100;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .customcheckbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer
        }

        .checkmark {
            position: absolute;
            top: -3px;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #CDCDCD;
            border-radius: 6px
        }

        .customcheckbox input:checked~.checkmark {
            background-color: #2196BB
        }

        .customcheckbox .checkmark:after {
            left: 8px;
            top: 4px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg)
        }

    </style>
@endsection
