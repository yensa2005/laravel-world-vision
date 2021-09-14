@extends('layouts.uer_layout')

@section('title', 'Liên hệ - World Vision 2 Tek')

@section('content')
    <div class="col-lg-9">

        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="text-center mt-5">
                        Liên hệ với chúng tôi
                    </h1>
                    <p class="text-secondary fs-15 mb-5 pb-3">
                        This text can be added in the category Description field in
                        dashboard
                    </p>
                </div>
            </div>
            <div class="mb-5 col-lg-12">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" aria-describedby="name"
                                    placeholder="Họ và tên" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" aria-describedby="email"
                                    placeholder="Email" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" aria-describedby="Subject"
                                    placeholder="Chủ đề" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control textarea" placeholder="Lời nhắn" id="message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <a href="#" class="btn btn-lg btn-dark font-weight-bold">Submit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-2">
                <div class="contact-right-padding">
                    <div class="row">
                        <div class="col-sm-12 text-center my-2">
                            <h1>Thông tin liên hệ</h1>
                            <p class="mb-5 fs-15 text-center">
                                This text can be added in the category Description field
                                in dashboard
                            </p>
                            <div class="row">
                                <div class="col-lg-5 mt-4">
                                    <p class="mb-0 font-weight-bold fs-14 d-flex">
                                        TÊN DOANH NGHIỆP
                                    </p>
                                    <p class="mb-4 font-weight-medium fs-14 d-flex">
                                        World Vision 2 Tek
                                    </p>
                                    <p class="mb-0 font-weight-bold fs-14 d-flex">
                                        ĐỊA CHỈ
                                    </p>
                                    <p class="mb-4 font-weight-medium fs-14 d-flex">
                                        329 South Street Court - Albany, NY 83741
                                    </p>
                                    <p class="mb-0 font-weight-bold fs-14 d-flex">
                                        SỐ ĐIỆN THOẠI
                                    </p>
                                    <p class="mb-4 font-weight-medium fs-14 d-flex">
                                        (123) 456 - 7890
                                    </p>
                                    <p class="mb-0 font-weight-bold fs-14 d-flex">
                                        EMAIL
                                    </p>
                                    <p class="mb-4 font-weight-medium fs-14 d-flex">
                                        2tek@worldvision.com
                                    </p>
                                </div>
                                <div class="col-lg-7">
                                    <img class="img-contact"
                                        src="https://images.unsplash.com/photo-1520923642038-b4259acecbd7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=706&q=80"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .form-control {
            border: none;
            border-bottom: 1px solid rgb(189, 189, 189);
            height: 60px;
            padding: 1rem;
        }

        .form-group .form-control.textarea {
            height: 150px;
        }

        .form-control:focus,
        .form-control:active {
            border-bottom: 1px solid #0a62fb;
        }

        .img-contact {
            width: 100%;
            border-radius:10px;
        }

    </style>
@endsection
