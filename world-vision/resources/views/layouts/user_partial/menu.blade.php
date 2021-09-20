<div class="navbar-bottom-menu">
    <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
            <li>
                <button class="navbar-close">
                    <i class="mdi mdi-close"></i>
                </button>
            </li>
            <li class="nav-item active">
                <a class="nav-link active" href="{{ route('home') }}>Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news.mobile') }}">Mobile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news.concept') }}">Concept</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news.ung-dung') }}">Ứng dụng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news.thu-thuat') }}">Thủ thuật</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('news.cong-nghe-vui') }}">Công nghệ vui</a>
            </li>
            <li>
                <input class="search-nav" type="text" name="search" placeholder="Search..">
                <i class="bi bi-search"></i>
            </li>
        </ul>
    </div>
</div>
<style>
    .search-nav {
        width: 200px;
        font-size: 12px;
        border: none;
        border-bottom: 1px solid #000;
    }

</style>
