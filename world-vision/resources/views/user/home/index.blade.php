@extends('layouts.uer_layout_home')

@section('title', 'AKINA CENTER')

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
                    <span class="thumb-title">ĐIỀU TRỊ MỤN VÀ SẸO</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    Điều Trị Mụn Nang Tại Nhà Được Không?
                </h5>
                <p class="fs-15 font-weight-normal">
                    Mụn nang là một trong nỗi ám ảnh, tự ti lớn đối với những ai mắc phải. Bởi việc điều...
                </p>
                <a href="/news/detail" class="font-weight-bold text-dark pt-2">Đọc thêm</a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/dashboard/news.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    Trung tâm điều trị mụn cho nam hiệu quả tại Huế
                </h5>
                <p class="fs-15 font-weight-normal">
                    1. Vì sao nam giới cũng bị mụn? 1.1 Sự bài tiết bã nhờn Đây là một trong những nguyên...
                </p>
                <a href="/news/detail" class="font-weight-bold text-dark pt-2">Đọc thêm</a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/dashboard/art.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">TRẺ HÓA DA</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    Sóng RF tác dụng trẻ hóa da như thế nào?
                </h5>
                <p class="fs-15 font-weight-normal">
                    Trẻ hóa da bằng sóng RF là gì? Tác dụng trẻ hóa của sóng RF như thế nào? Là những...
                </p>
                <a href="/news/detail" class="font-weight-bold text-dark pt-2">Đọc thêm</a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img src="assets/images/dashboard/business.jpg" class="img-fluid" alt="world-news" />
                    <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    Liệu pháp căng chỉ collagen trẻ hóa phù hợp với ai?
                </h5>
                <p class="fs-15 font-weight-normal">
                    Phụ nữ khi bước sang tuổi 25, lượng Collagen sẽ giảm sản sinh khiến cho làn da bắt đầu mất...
                </p>
                <a href="/news/detail" class="font-weight-bold text-dark pt-2">Đọc thêm</a>
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
                    <span class="thumb-title">ĐIỀU TRỊ MỤN VÀ SẸO</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                    Bác Sĩ Cao Nguyên Giải Đáp Thắc Mắc Điều Trị Sẹo Rỗ
                </h1>
                <p class="fs-15 font-weight-normal">
                    Điều trị sẹo rỗ là từ khóa hot hiện nay được đại đa số các bạn trẻ quan tâm. Trong...
                </p>
            </div>
            <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="row">
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-5.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            5 ưu điểm của trẻ hóa da bằng liệu pháp căng chỉ full face
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Trẻ hóa da bằng liệu pháp căng chỉ full face là một trong những chủ đề được quan tâm hàng...
                        </p>
                    </div>
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-6.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">ĐIỀU TRỊ MỤN VÀ SẸO</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Peel da là gì? Có nên thực hiện peel da hay không?
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Có thể bạn đã từng gặp nhiều người đang sở hữu da đầy tỳ vết nhưng bỗng chốc lột xác...
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6  mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-7.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Điều trị mụn tại Huế theo phác đồ của bác sĩ Cao Nguyên
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Mụn là căn bệnh mạn tính, rất khó điều trị và rất dễ tái phát sau điều trị. Vì vậy,...
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-8.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            6 sai lầm trong điều trị mụn gây hậu quả nghiêm trọng
                        </h5>
                        <p class="fs-15 font-weight-normal">
                            Sở hữu làn da mịn màng, tươi trẻ là điều ai cũng mong muốn. Nhưng mụn như kẻ thù truyền...
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
                            <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Có nên nặn mụn tại nhà hay không? Địa chỉ điều trị mụn uy tín tại Huế
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-10.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Lưu ý gì khi Peel da xóa mụn, xóa nám, trẻ hóa da?
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-11.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Nám da sau sinh tác nhân dẫn đến trầm cảm
                        </h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-12.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            Điều trị mụn trứng cá không nên bỏ dở giữa chừng
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-13.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            BẠN BIẾT GÌ VỀ ĐỒI MỒI TRÊN DA?
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img src="assets/images/dashboard/star-magazine-14.jpg" class="img-fluid"
                                alt="world-news" />
                            <span class="thumb-title">KIẾN THỨC DA LIỄU</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            VIÊM NANG LÔNG VÀ NHỮNG ĐIỀU BẠN CHƯA BIẾT
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="position-relative mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207"
                            allowfullscreen></iframe>
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
                                Điều trị mụn trứng cá không nên bỏ dở giữa chừng
                            </h5>
                            <p class="text-color m-0 d-flex align-items-center">
                                <span class="fs-10 mr-1">2 giờ trước</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">126</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="border-bottom pt-4 pb-3">
                            <h5 class="font-weight-600 mt-0 mb-0">
                                Đau đầu vì trị nám da tái lại không dứt điểm
                            </h5>
                            <p class="text-color m-0 d-flex align-items-center">
                                <span class="fs-10 mr-1">1 phút trước</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">12</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="border-bottom pt-4 pb-3">
                            <h5 class="font-weight-600 mt-0 mb-0">
                                7 lý do khiến tình trạng da mụn “đeo bám” mãi không dứt
                            </h5>
                            <p class="text-color m-0 d-flex align-items-center">
                                <span class="fs-10 mr-1">4 phút trước</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">27</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="pt-4">
                            <h5 class="font-weight-600 mt-0 mb-0">
                                Đón đầu xu hướng trị nám chân sâu bằng công nghệ Laser kết hợp
                            </h5>
                            <p class="text-color m-0 d-flex align-items-center">
                                <span class="fs-10 mr-1">7 giờ trước</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">156</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
