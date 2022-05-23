@extends('layouts.admin_layout')

@section('title', 'Create Category')

@section('content')
    <div class="col-lg-10">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Tên chuyên mục</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="title">Đường dẫn</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="category">Thuộc chuyên mục</label>
                <select class="dropdown form-control" id="sel1" name="sellist1">
                    <option value="" disabled selected>Chuyên mục cha</option>
                    <option>Trẻ hóa da</option>
                    <option>Điều trị nám</option>
                    <option>Điều trị mụn và sẹo</option>
                    <option>Kiến thức da liễu</option>
                    <option>Tin tức sự kiện</option>
                </select>
            </div>
            <a href="/admin/category/create"><button type="submit" class="btn btn-outline-dark">Làm mới</button></a>
            <button type="submit" class="btn btn-dark">Thêm</button>
        </form>
    </div>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f6f6f6;
            min-width: 230px;
            overflow: auto;
            border: 1px solid #ddd;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            background-color: #ddd;
        }

        .dropdown {
            padding-top: 0;
            padding-bottom: 0;

        }

    </style>
@endsection
