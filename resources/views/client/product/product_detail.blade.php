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
                                <img src="{{ asset('/storage/'. $products->image_product)}}" alt="" class="product-big-img">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="{{ asset('/storage/'. $products->image_product) }}">
                                        <img src="{{ asset('/storage/'. $products->image_product) }}" alt="">
                                    </div>
                                    <div class="pt" data-imgbigurl="{{ asset('/storage/'. $products->image_product) }}">
                                        <img src="{{ asset('/storage/'. $products->image_product) }}" alt="">
                                    </div>
                                    <div class="pt" data-imgbigurl="{{ asset('/storage/'. $products->image_product) }}">
                                        <img src="{{ asset('/storage/'. $products->image_product) }}" alt="">
                                    </div>
                                    <div class="pt" data-imgbigurl="{{ asset('/storage/'. $products->image_product) }}">
                                        <img src="{{ asset('/storage/'. $products->image_product) }}" alt="">
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
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p>{{ $products->brand->name_brands }}</p>
                                    <h4>{{ $products->price }}.000.000 VNĐ</h4>
                                </div>

                                <div class="quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                        <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                    </div>
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
                                    <li><a class="active" href="#tab-1" data-toggle="tab"
                                            role="tab">Mô tả sản phẩm</a></li>
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
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span>(5)</span>
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
                                            <h4>2 Comments</h4>
                                            <div class="comment-option">
                                                <div class="co-item">
                                                    <div class="avatar-pic">
                                                        <img src="img/product-single/avatar-1.png" alt="">
                                                    </div>
                                                    <div class="avatar-text">
                                                        <div class="at-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <h5>Brandon Kelley <span>27 Aug 2022</span></h5>
                                                        <div class="at-reply">Nice !</div>
                                                    </div>
                                                </div>
                                                <div class="co-item">
                                                    <div class="avatar-pic">
                                                        <img src="img/product-single/avatar-1.png" alt="">
                                                    </div>
                                                    <div class="avatar-text">
                                                        <div class="at-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <h5>Brandon Kelley <span>27 Aug 2022</span></h5>
                                                        <div class="at-reply">Nice !</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="personal-rating">
                                                <h6>Your Rating</h6>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="leave-comment">
                                                <h4>Leave A Comment</h4>
                                                <form action="" class="comment-form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" placeholder="Email">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <textarea placeholder="Messages"></textarea>
                                                            <button type="submit" class="site-btn">Send message</button>
                                                        </div>
                                                    </div>
                                                </form>
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
                @foreach($product_related as $key =>$same_kind)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('/storage/' .$same_kind->image_product) }}" alt="">
                            <div class="sale pp-sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="{{route('showProductClient',$same_kind->id)}}">+ Quick View</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$same_kind->brand->name_brands }}</div>
                            <a href="">
                                <h5>{{$same_kind->name_product }}</h5>
                            </a>
                            <div class="product-price">
                                {{$same_kind->price }}.000.000 VNĐ
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->
@endsection
