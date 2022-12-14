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
                <div class="user-nav d-sm-flex d-none text-bg-danger"><span class=" font-weight-bold login-panel">{{ Auth::user()->name }}</span>
                </div>
                <a>
                    <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                        @csrf
                        <a style="color: red;font-weight: bold;" href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="me-10" data-feather="power"></i>
                            {{ __('Đăng xuất') }}
                        </a>
                    </form>
                </a>
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
                            <form action="{{url('tim-kiem')}}" method="GET">
                            @csrf
                            <input type="text"  name="key_pro_name" placeholder="Tìm kiếm sản phẩm...">
                            <button style="margin-right:-120px" type="submit" name="timkiem"><i class="ti-search"></i></button>
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
                        {{-- <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-pic"><img src="/user/img/instag-1.jpg"></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.000.000 x 1</p>
                                                        <h6>Kabing Beside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic"><img src="/user/img/instag-2.jpg"></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>60.000.000 x 1</p>
                                                        <h6>Kabing Beside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>Tổng tiền:</span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{ url('/cart/show_cart/') }} }}" class="primary-btn view-card">Giỏ hàng</a>
                                    <a href="/check-out.html" class="primary-btn checkout-btn">Thanh toán</a>
                                </div>
                            </div>
                        </li> --}}
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
