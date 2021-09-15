@extends('layouts.admin_layout')

@section('title', 'Create Tag')

@section('content')
    <div class="col-lg-10">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Tên thẻ</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="title">Đường dẫn</label>
                <input type="text" class="form-control" id="title">
            </div>
            <a href="/admin/category/create"><button type="submit" class="btn btn-outline-dark">Làm mới</button></a>
            <button type="submit" class="btn btn-dark">Thêm</button>
        </form>
    </div>
@endsection
