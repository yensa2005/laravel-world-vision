@extends('layouts.uer_layout_news_detail_create')

@section('title', 'Create Detail')

@section('content')
    <div class="col-lg-4">
        <p>Ảnh cover bài viết</p>
        <div class="file-upload-btn">
            <img src="https://www.bgcdc.org/wordpress/wp-content/uploads/2020/08/900x400.png" alt="">
        </div>
        <div class="condition">
            <b>For better design, please use:</b>
            <ul>
                <li>Minimum width image size 1200</li>
                <li>The best size is 900x400 ratio</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Tiêu đề bài viết</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="category">Danh mục (Bạn có thể chọn tối đa 4 mục phù hợp)</label>
                <select class="dropdown form-control" id="sel1" name="sellist1">
                    <option value="" disabled selected>Chọn danh mục</option>
                    <option>Sports</option>
                    <option>Art</option>
                    <option>Buiness</option>
                    <option>Politics</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comment">Mô tả</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <div class="form-group">
                <label for="content">Nội dung bài viết</label>
                <textarea class="form-control" id="editor" name="editor"></textarea>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">Tôi đồng ý với <a href="#">điều khoản</a> của World
                    Vision
                </label>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">Bài viết sẽ được gửi cho admin duyệt, vui lòng kiểm tra
                    kỹ trước khi gửi
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <style>
        ul {
            padding-left: 20px;
            padding-top: 3px;
        }

        li {
            font-size: 0.85rem;
            padding-top: 3px;
        }

        .file-upload-btn img {
            margin: 10px 0;
            width: 350px;
            height: 100%;
        }


        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #3e8e41;
        }

        #myInput {
            box-sizing: border-box;
            background-image: url('searchicon.png');
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            padding: 14px 20px 12px 45px;
            border: none;
            border-bottom: 1px solid #ddd;
        }

        #myInput:focus {
            outline: 3px solid #ddd;
        }

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

        .show {
            display: block;
        }

        .dropdown {
            padding-top: 0;
            padding-bottom: 0;

        }
    </style>
    <script>
        SKEDITOR.replace('editor');
    </script>
@endsection
