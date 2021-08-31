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
        <form action="">
            <div class="form-group">
                <label for="title">Tiêu đề bài viết</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                <div id="myDropdown" class="dropdown-content">
                    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                    <a href="#about">About</a>
                    <a href="#base">Base</a>
                    <a href="#blog">Blog</a>
                    <a href="#contact">Contact</a>
                    <a href="#custom">Custom</a>
                    <a href="#support">Support</a>
                    <a href="#tools">Tools</a>
                </div>
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
        }

        li {
            font-size: 0.85rem;
        }

        .file-upload-btn img {
            margin: 10px 0;
            width: 350px;
            height: 100%;
        }

        .condition {
            margin-left: 20px;
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

    </style>
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>
@endsection
