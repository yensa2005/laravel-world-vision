<header id="header">
    <div class="container-fluid" style="padding: 0 50px">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                    <li>Wed, March 4, 2020</li>
                    {{-- <li>30°C,Hue</li> --}}
                </ul>
                <div>
                    <a class="navbar-brand" href="/home"><img src="{{ asset('assets/images/logo-01.png') }}" alt=""
                            width="300"></a>
                </div>
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="icon-nav" href=""><i class="bi bi-chat-left mx-3"><span
                                    class="badge badge-bell">3</span></i></a>
                        <a class="icon-nav" href=""><i class="bi bi-bell mx-2"><span
                                    class="badge">6</span></i></a>
                        <p class="fs-12 d-flex justify-content-center align-items-center m-0 ml-3">
                            <img src="../assets/images/dashboard/Profile_1.jpg" alt="" class="img-rounded mr-2"
                                width="30" />Hoang Phuong
                        </p>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<style>
    .icon-nav {
        font-size: 20px;
        color: #000;
    }

    .badge {
        position: absolute;
        border-radius: 50%;
        background: red;
        top: 37px;
        right: 154px;
        color: white;
        font-size: 9px;
    }

    .badge-bell {
        right: 195px;
    }

</style>
