@extends('layouts.user')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ asset('/') }}"><i class="fa fa-home"></i>Trang Chủ</a>
                        <a href="product.html">Chi tiết sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Loại Trang Sức</h4>
                        @foreach ($categories as $category)
                            <ul class="filter-catagories">
                                <li><a href="#">{{ $category->name_category }}</a></li>
                            </ul>
                        @endforeach
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Thương Hiệu</h4>
                        @foreach ($brands as $brand)
                            <div class="fw-brand-check">
                                <div class="bc-item"><label for="bc-calvin">
                                        {{ $brand->name_brands }}
                                    </label></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-9">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img src="{{ asset('/storage/' . $products->image_product) }}" alt=""
                                    class="product-big-img">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active"
                                        data-imgbigurl="{{ asset('/storage/' . $products->image_product) }}">
                                        <img src="{{ asset('/storage/' . $products->image_product) }}" alt="">
                                    </div>
                                    <div class="pt"
                                        data-imgbigurl="{{ asset('/storage/' . $products->image_product) }}">
                                        <img src="{{ asset('/storage/' . $products->image_product) }}" alt="">
                                    </div>
                                    <div class="pt"
                                        data-imgbigurl="{{ asset('/storage/' . $products->image_product) }}">
                                        <img src="{{ asset('/storage/' . $products->image_product) }}" alt="">
                                    </div>
                                    <div class="pt"
                                        data-imgbigurl="{{ asset('/storage/' . $products->image_product) }}">
                                        <img src="{{ asset('/storage/' . $products->image_product) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <h3>{{ $products->name_product }}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    @for ($i = 0; $i < $Round; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    <span>({{ $Round }})</span>
                                </div>
                                <div class="pd-desc">
                                    <p>{{ $products->brand->name_brands }}</p>
                                    <h4>{{ $products->price }}.000.000 VNĐ</h4>
                                </div>

                                <div class="quantity">
                                    <form action="{{ url('/cart') }}" method="POST">
                                        @csrf
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input name="qty" type="text" value="1">
                                                <input name="productId_hidden" type="hidden" value="{{ $products->id }}">
                                            </div>
                                            @if (Route::has('login'))
                                                @auth
                                                    <button type="submit" class="primary-btn pd-cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                @else
                                                @endauth
                                            @endif
                                        </div>
                                    </form>
                                </div>
                                <div class="pd-tags">

                                </div>
                                <div class="pd-share">
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab">
                            <div class="tab-item">
                                <ul class="nav" role="tablist">
                                    <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">Mô tả sản phẩm</a>
                                    </li>
                                    <li><a href="#tab-2" data-toggle="tab" role="tab">Chi tiết sản phẩm</a></li>
                                    <li><a href="#tab-3" data-toggle="tab" role="tab">Đánh giá sản phẩm</a></li>
                                </ul>
                            </div>
                            <div class="tab-item-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                        <div class="product-content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <h5>{{ $products->description }}</h5>
                                                </div>
                                                <div class="col-lg-5">
                                                    <img src="img/product-single/tab-desc.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                        <div class="specification-table">
                                            <table>
                                                <tr>
                                                    <td class="p-catagory">Đánh giá sao</td>
                                                    <td>
                                                        <div class="pd-rating">
                                                            @for ($i = 0; $i < $Round; $i++)
                                                                <i class="fa fa-star"></i>
                                                            @endfor
                                                            <span>({{ $Round }})</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Giá</td>
                                                    <td>
                                                        <div class="p-price">
                                                            {{ $products->price }}.000.000 VNĐ
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Số lượng</td>
                                                    <td>
                                                        <div class="p-stock">{{ $products->amount }} Cái</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Trọng lượng</td>
                                                    <td>
                                                        <div class="p-weight">{{ $products->weight }}gr</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">Chất liệu</td>
                                                    <td>
                                                        <div class="font-weight-bold">{{ $products->cate }}</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                        <div class="customer-review-option">
                                            <h4>
                                                {{ $countcomment }} Bình luận
                                            </h4>
                                            <div class="comment-option">
                                                @foreach ($comm as $com)
                                                    <div class="co-item">
                                                        <div class="avatar-pic">
                                                            <img src="{{ asset('/storage/' . $com->user->image) }}"
                                                                alt="">
                                                        </div>
                                                        <div class="avatar-text">
                                                            <div class="at-rating">
                                                                @for ($i = 0; $i < $com->rating; $i++)
                                                                    <i class="fa fa-star"></i>
                                                                @endfor
                                                            </div>
                                                            <h5>{{ $com->user->name }}<span>{{ $com->created_at }}</span>
                                                            </h5>
                                                            <div class="at-reply">{{ $com->massages }}</div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div>
                                                @if (Route::has('login'))
                                                    @auth
                                                        <div id="comRate">
                                                            @if (Route::has('login'))
                                                                @auth
                                                                    <div id="comRate">
                                                                        <div class="personal-rating">
                                                                            <div class="leave-comment">
                                                                                <h4>Đánh giá sao và bình luận</h4>
                                                                                <form method="POST" id="ratingForm"
                                                                                    action="/product_detail/comment/{{ $products->id }}"
                                                                                    class="comment-form">
                                                                                    @method('POST')
                                                                                    @csrf
                                                                                    <div class="rating-css">
                                                                                        <div name="rating" id="rating"
                                                                                            class="star-icon">
                                                                                            <input type="radio" value="1"
                                                                                                name="rating" id="rating1">
                                                                                            <label for="rating1"
                                                                                                class="fa fa-star"></label>
                                                                                            <input type="radio" value="2"
                                                                                                name="rating" id="rating2">
                                                                                            <label for="rating2"
                                                                                                class="fa fa-star"></label>
                                                                                            <input type="radio" value="3"
                                                                                                name="rating" id="rating3">
                                                                                            <label for="rating3"
                                                                                                class="fa fa-star"></label>
                                                                                            <input type="radio" value="4"
                                                                                                name="rating" id="rating4">
                                                                                            <label for="rating4"
                                                                                                class="fa fa-star"></label>
                                                                                            <input type="radio" value="5"
                                                                                                name="rating" id="rating5">
                                                                                            <label for="rating5"
                                                                                                class="fa fa-star"></label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <textarea name="massages" placeholder="Nhập nội dung bình luận..."></textarea>
                                                                                            <button type="submit"
                                                                                                class="site-btn">Gửi bình
                                                                                                luận</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                @else
                                                                    <div id="comRate1"></div>
                                                                @endauth
                                                            @endif
                                                        </div>
                                                    @else
                                                        <div id="comRate1"></div>
                                                    @endauth
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
    <!-- Related Products Section Begin -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM CÙNG LOẠI</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($product_related as $key => $same_kind)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{ asset('/storage/' . $same_kind->image_product) }}" alt="">
                                <div class="sale pp-sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ route('showProductClient', $same_kind->id) }}">+
                                            Chi Tiết</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{ $same_kind->brand->name_brands }}</div>
                                <a href="">
                                    <h5>{{ $same_kind->name_product }}</h5>
                                </a>
                                <div class="product-price">
                                    {{ $same_kind->price }}.000.000 VNĐ
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->
    <script>
        $(function() {
            $("#comRate").comRate({
                rating: 0,
                normalFill: "#A0A0A0",
                ratedFill: "#ffff00"
            }).on('comrate.set', function(e, data) {
                $('#rating').val(data.rating);
                $('#formRating').submit();
            });
            $("#comRate1").comRate({
                rating: 0,
                normalFill: "#A0A0A0",
                ratedFill: "#ffff00"
            }).on('comrate.set', function(e, data) {
                alert('Bạn vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng!');
            });
        });
    </script>
@endsection
