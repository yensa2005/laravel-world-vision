@extends('layouts.admin_layout')

@section('title', 'Create Post')

@section('content')
    <div class="col-lg-10">
        <div class="row">

            <div class="col-lg-8" style="padding-top: 45px;">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Tiêu đề bài viết</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="category">Danh mục</label>
                        <select class="dropdown form-control" id="sel1" name="sellist1">
                            <option value="" disabled selected>Chọn danh mục</option>
                            <option>Trẻ hóa da</option>
                            <option>Điều trị nám</option>
                            <option>Điều trị mụn và sẹo</option>
                            <option>Kiến thức da liễu</option>
                            <option>Tin tức sự kiện</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment">Mô tả</label>
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung bài viết</label>
                        {{-- <textarea class="form-control" id="editor" name="editor"></textarea> --}}
                        <div id="editor"></div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">Tôi đồng ý với <a href="#">điều khoản</a> của
                            AKINA CENTER
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">Bài viết sẽ được gửi cho admin duyệt, vui lòng
                            kiểm tra
                            kỹ trước khi gửi
                        </label>
                    </div>
                    <button type="submit" class="btn btn-dark">Đăng bài</button>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="title-info">
                    <p>Ảnh cover bài viết</p>
                    {{-- <div class="file-upload-btn pb-3">
                        <img src="https://www.bgcdc.org/wordpress/wp-content/uploads/2020/08/900x400.png" alt="">
                    </div> --}}
                    <div class="input-group">
                        <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                        <label id="upload-label" for="upload" class="fs-12 font-weight-light text-dark"></label>
                        <div class="input-group-append">
                            <label for="upload" class="btn btn-light m-0 px-4"><small class="fs-12 text-white">Chọn
                                    ảnh</small></label>
                        </div>
                    </div>
                    <div class="image-area my-4"><img id="imageResult" src="#" alt=""
                            class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                    <div class="condition">
                        <div>
                            <b>Để có thiết kế tốt hơn, vui lòng sử dụng:</b>
                            <ul>
                                <li>Kích thước chiều rộng tối thiểu 1200px</li>
                                <li>Kích thước tốt nhất là tỷ lệ 900x400</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <style>
        .input-group {
            border: 1px solid #000;
        }

        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            position: relative;
        }

        .image-area::before {
            content: '';
            color: #000;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }

        .btn-dark,
        .btn-light,
        .btn-light:hover {
            color: #fff;
            background: #000;
        }

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
            width: 100%;
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

        .dropdown {
            padding-top: 0;
            padding-bottom: 0;

        }

    </style>
@endsection
@section('javascript-end')
    <script>
        // SKEDITOR.replace('editor');
        // $(document).ready(function() {
        //     $('[data-toggle="tooltip"]').tooltip();
        // });
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error)
            });
        //upload img
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function() {
            $('#upload').on('change', function() {
                readURL(input);
            });
        });
        var input = document.getElementById('upload');
        var infoArea = document.getElementById('upload-label');

        input.addEventListener('change', showFileName);

        function showFileName(event) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = fileName;
        }
    </script>
    <script src="ckeditor/ckfinder/ckfinder.js"></script>

@endsection
