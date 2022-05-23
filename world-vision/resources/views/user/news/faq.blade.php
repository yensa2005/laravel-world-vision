@extends('layouts.uer_layout')

@section('title', 'FAQ - AKINA CENTER')

@section('content')
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-12">
                {{-- <img src="https://images.pexels.com/photos/208494/pexels-photo-208494.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""> --}}
                <div class="text-center">
                    <h1 class="text-center mt-5">
                        Câu hỏi thường gặp
                    </h1>
                    <p class="text-secondary fs-15 mb-3 pb-3">

                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default my-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseOne"><i class="bi bi-question-circle-fill"></i> Tôi phải làm thế nào để gửi
                                bài viết cho AKINA CENTER?</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body my-4 mx-5">
                            <p> Để gửi bài viết cho AKINA CENTER, bạn vui lòng thực hiện theo các bước sau đây:</p>
                            <p><b>Bước 1:</b> Chuẩn bị thông tin/ bài viết.</p>
                            <p><b>Bước 2:</b> Chọn chuyên mục phù hợp với thông tin/ bài viết để gửi.</p>
                            <ul>
                                <li>Trẻ hóa da: <span>trehoada@akinacenter.com</span></li>
                                <li>Điều trị nám: <span>dieutrinam@akinacenter.com</span></li>
                                <li>Điều trị mụn và sẹo rỗ: <span>dieutrimunvaseoro@akinacenter.com</span></li>
                                <li>Kiến thức làm đẹp: <span>kienthuclamdep@akinacenter.com</span></li>
                                <li>Tin tức sự kiện: <span>tintucsukien@akinacenter.com</span></li>
                            </ul>
                            <p><b>Bước 3:</b> Thông tin/ bài viết sau khi được gửi lên sẽ qua khâu duyệt tin của chủ mục.
                            </p>
                            <p>- Nếu thông tin không phù hợp, bạn hãy thử sức ở bài viết sau.s</p>
                            <p>- Nếu thông tin phù hợp và được đăng tải. Bạn sẽ nhận được nhuận bút trong vòng 24h nếu cung
                                cấp đủ và chính xác các thông tin cá nhân.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default my-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTen"><i class="bi bi-question-circle-fill"></i> Làm thế nào để tôi biết thông
                                tin/ bài viết cộng tác của mình có được đăng tải trên AKINA CENTER hay không?</a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse">
                        <div class="panel-body my-4 mx-5">
                            Thông thường, ngay khi thông tin/ bài viết của bạn được duyệt, người phụ trách chuyên mục của
                            AKINA CENTER sẽ gửi thư xác nhận tới địa chỉ email của bạn. Sau khi kiểm duyệt và biên tập
                            lại,
                            chúng tôi sẽ đăng tải thông tin/ bài viết của bạn trong thời gian sớm nhất.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default my-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseEleven"><i class="bi bi-question-circle-fill"></i> Quy trình thanh toán nhuận
                                bút sau khi thông tin/ bài viết được đăng tải diễn ra như thế nào?</a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body my-4 mx-5">
                            <p>Nếu thông tin/ bài viết của bạn được duyệt và đăng tải, AKINA CENTER sẽ thanh toán nhuận bút cho
                                bạn trong thời gian 24 giờ nếu bạn cung cấp đầy đủ thông tin cá nhân sau cho chúng tôi:</p>
                            <p>- Họ tên:</p>
                            <p>- Số CMND:</p>
                            <p>- Số điện thoại:</p>
                            <p>- Email:</p>
                            <p>- Số tài khoản ngân hàng:</p>
                            <p>- Tên ngân hàng:</p>
                            <p>- Chi nhánh ngân hàng:</p>
                            <p>- Địa chỉ của chi nhánh ngân hàng:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* img{
                                                width: 100%;
                                            } */
        .accordion-toggle {
            color: #000;
        }

        .accordion-toggle:hover,
        .accordion-toggle:active {
            color: #d4aa51;
            text-decoration: none;
        }

    </style>
@endsection
