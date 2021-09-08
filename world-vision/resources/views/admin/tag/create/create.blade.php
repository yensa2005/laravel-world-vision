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
            <button type="submit" class="btn btn-primary">Làm mới</button>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection
