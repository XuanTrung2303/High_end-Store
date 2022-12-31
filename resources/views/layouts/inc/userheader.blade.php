<div id="preloder">
    <div class="loader"></div>
</div>
<!--header section begin-->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    highendstore@gmail.com
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    0909090909
                </div>
            </div>

            <div class="ht-right">
                @if (Route::has('login'))
                    @auth
                        <i class="fa fa-user me-sm-1"></i>
                        <span style="color: green; text-align:center">Xin chào {{ Auth::user()->name }}</span>
                        <div style="color: black; font-weight:bold;">
                            <a style="color: black; font-weight:bold;" href="{{ asset('/userorder/index/') }}">Xem đơn hàng</a> |
                            @if (Auth::user()->role_as == '1')
                                <a style="color: black; font-weight:bold;" target="page" href="{{ asset('/dashboard') }}">
                                    <span>Trang quản trị</span> </a> |
                            @elseif (Auth::user()->role_as == '0')
                            @endif
                            <a style="color: black; font-weight:bold;" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Đăng xuất') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </a>
                        </div>
                </div>

            </div>
        @else
            <a href="{{ route('login') }}" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="login-panel mr-3"><i class="fa fa-user"></i>Đăng ký</a>
            @endif
            <!-- </a> -->
        @endauth
        @endif
    </div>
    </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="/user/img/logooooo.png" height="38px" width="140px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="advanced-search ">
                        <div class="input-group">
                            <form action="{{ url('tim-kiem') }}" method="GET">
                                @csrf
                                <input type="text" name="key_pro_name" placeholder="Tìm kiếm sản phẩm...">
                                <button style="margin-right:-120px" type="submit" name="timkiem"><i
                                        class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-right">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu mr-5">
                <ul>
                    <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                    <li><a href="{{ url('/product') }}">Sản Phẩm</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/contact/index') }}">Liên Hệ</a></li>
                    <li><a href="{{ url('/cart/show_cart/') }}">Giỏ Hàng</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!--header section end-->
