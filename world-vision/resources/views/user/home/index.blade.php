@extends('layouts.uer_layout_home')

@section('title', 'HomePage')

{{-- Main Content --}}
@section('content')
    <div class="world-news">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                    <h3 class="section-title">Tiêu điểm tuần</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/dashboard/travel.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">ỨNG DỤNG</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    Apple cảnh báo thói quen làm camera iPhone xuống cấp
                </h5>
                <p class="fs-15 font-weight-normal">
                    Nếu bạn thường xuyên làm hành động này, hãy thay đổi ngay nếu không muốn iPhone chụp ảnh ngày càng xấu
                    đi.
                </p>
                <a href="/news/detail" class="font-weight-bold text-dark pt-2">Đọc thêm</a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/dashboard/news.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">MOBILE</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    iPhone 13 rò rỉ concept toàn bộ 6 màu sắc: màu hồng...
                </h5>
                <p class="fs-15 font-weight-normal">
                    Bạn đang chờ đợi iPhone 13 phiên bản màu hồng hay màu cam?Apple đã chính thức đăng tải thư mời sự
                    kiện...
                </p>
                <a href="/news/detail2" class="font-weight-bold text-dark pt-2">Đọc thêm</a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/dashboard/art.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">CONCEPT</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    Hé lộ concept iPhone 13 màu cam đồng cực kỳ hút mắt...
                </h5>
                <p class="fs-15 font-weight-normal">
                    Cư dân mạng đang xôn xao về một phiên bản màu cam đồng mới của iPhone 13 series, nhìn cái là muốn "chốt
                    đơn".
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2">Đọc thêm</a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/dashboard/business.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">CÔNG NGHỆ VUI</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    Đăng ảnh sexy khoe body "căng đét", Jennie...
                </h5>
                <p class="fs-15 font-weight-normal">
                    Tuy có số người theo dõi trên Instagram thấp hơn Lisa nhưng lượng tương tác của Jennie lại cực kì đáng
                    gờm.
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2">Đọc thêm</a>
            </div>
        </div>
    </div>
    <div class="editors-news">
        <div class="row">
            <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                    <h3 class="section-title">MỚI NHẤT</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/dashboard/glob.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">MOBILE</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                    Thêm 1 lý do để người dùng iPhone muốn chuyển qua dùng Samsung
                </h1>
                <p class="fs-15 font-weight-normal">
                    Tính năng đồng bộ hoá lịch sử tin nhắn WhatsApp từ iPhone sang Android hiện chỉ hỗ trợ cho các máy
                    Samsung.
                </p>
            </div>
            <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="row">
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-5.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">CONCEPT</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Cận kề ngày ra mắt, ngoài màu hồng iPhone 13 còn rò rỉ...
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Theo các nguồn tin rò rỉ, iPhone 13 năm nay sẽ có thêm 2 phiên bản màu sắc mới là hồng và cam.
                        </p>
                    </div>
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-6.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">THỦ THUẬT</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Hướng dẫn in sao kê online: Nhanh chóng, dễ làm mà...
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Có thể bạn chưa biết, chủ tài khoản có thể trực tiếp sao kê online các giao dịch ngân hàng.
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-7.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">CÔNG NGHỆ VUI</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Ariana Grande bị "bà trùm trang điểm 24 tuổi" vượt...
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Sau khi người này tung video xác nhận mang thai đã tạo nên sự "bùng nổ" trên MXH, số follower...
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-8.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">ỨNG DỤNG</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Những thiết lập đơn giản giúp chụp ảnh đẹp hơn...
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Bạn sẽ chụp ảnh đẹp hơn trên iPhone nếu thực hiện 08 cài đặt máy ảnh trong bài viết này.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popular-news">
        <div class="row">
            <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                    <h3 class="section-title">XEM NHIỀU NHẤT</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-sm-4  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-9.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">THỦ THUẬT</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Thủ thuật đơn giản này sẽ giúp iPhone của bạn tránh bị "đột tử" khi cạn pin
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-10.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">ỨNG DỤNG</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Google Maps buộc người dùng phải chia sẻ dữ liệu di chuyển để có thể dùng...
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-11.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">CONCEPT</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Apple Watch Series 7 sẽ có hai kích thước 41mm và 45mm
                        </h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-12.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">MOBILE</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Nóng: Apple chính thức công bố ngày ra mắt iPhone 13
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-13.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">CÔNG NGHỆ VUI</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Lắp thêm bếp từ chung với bếp ga, tôi bất ngờ nhận ra tiền điện gần như...
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-14.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">CONCEPT</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Lộ diện mô hình MacBook Pro với khay chứa bút cảm ứng
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="position-relative mb-3">
                    <img src="assets/images/dashboard/star-magazine-15.jpg" class="img-fluid" alt="world-news" />
                    <div class="video-thumb text-muted">
                        <span><i class="mdi mdi-menu-right"></i></span>LIVE
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex position-relative float-left">
                            <h3 class="section-title">Tin mới nhất</h3>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="border-bottom pb-3">
                            <h5 class="font-weight-600 mt-0 mb-0">
                                iPhone 13 bị lộ tất tần tật 6 màu sắc trên website đại lý bán lẻ
                            </h5>
                            <p class="text-color m-0 d-flex align-items-center">
                                <span class="fs-10 mr-1">2 hours ago</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">126</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="border-bottom pt-4 pb-3">
                            <h5 class="font-weight-600 mt-0 mb-0">
                                iPhone 13 bị lộ tất tần tật 6 màu sắc trên website đại lý bán lẻ
                            </h5>
                            <p class="text-color m-0 d-flex align-items-center">
                                <span class="fs-10 mr-1">2 hours ago</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">126</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="border-bottom pt-4 pb-3">
                            <h5 class="font-weight-600 mt-0 mb-0">
                                iPhone 13 bị lộ tất tần tật 6 màu sắc trên website đại lý bán lẻ
                            </h5>
                            <p class="text-color m-0 d-flex align-items-center">
                                <span class="fs-10 mr-1">2 hours ago</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">126</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                    </div><div class="col-sm-12">
                        <div class="pt-4 pb-3">
                            <h5 class="font-weight-600 mt-0 mb-0">
                                iPhone 13 bị lộ tất tần tật 6 màu sắc trên website đại lý bán lẻ
                            </h5>
                            <p class="text-color m-0 d-flex align-items-center">
                                <span class="fs-10 mr-1">2 hours ago</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">126</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
