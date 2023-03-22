<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow border-0" style="background-color: #141619">
    <div class="container">
        <a class="navbar__logo" href="/" style="width: 140px"><img src="./img/Logo.gif" alt="logo" style="width: 80%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <form action="tim-kiem" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm xe ngay..." aria-label="Search" name="q">
                <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fas fa-solid fa-magnifying-glass"></i> Tìm</button>
                <style>
                    .btn-dark {
                        color: #222;
                        background-color: #3ac5c9
                    }
                </style>
            </form>
            <ul class="navbar-nav ml-3">
                <li class="nav-item mr-2">
                    <a class="nav-link"
                    href="tel: +84 949 077 392"><i class="fas fa-sharp fa-solid fa-phone">  </i>    Hotline: +84 949 077 392</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link" href="/thue-xe"><i class="fas fa-solid fa-car"></i>   THUÊ XE NGAY</a>
                </li>
                    <style>
                        .navbar-dark .navbar-nav .nav-link {
                            color: #fff;
                            font-weight: 500
                        }
                        .navbar-dark .navbar-nav .nav-link:hover {
                            color: #3ac5c9;}
                    </style>
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth

                    @can('is_admin')
                        <li class="nav-item mr-2">
                            <a class="nav-link" href="/admin/thong-ke">Quản trị</a>
                        </li>
                    @endcan

                    <li class="nav-item mr-2">
                        <a class="nav-link" href="/trang-ca-nhan">{{ auth()->user()->ho_ten }}</a>
                    </li>
                    <li class="nav-item ml-2">
                        <form action="{{ route('auth.dang-xuat') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link text-white" style="text-decoration: none">Đăng xuất</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="/dang-nhap">Đăng nhập</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link" href="/dang-ky">Đăng ký</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
