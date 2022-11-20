@extends('layouts.user')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Trang Chủ</a>
                        <span>Sản Phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product-Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 products-sidebar-filer">
                    {{-- <h3>Từ khóa tìm kiếm: {{$keywords}}</h3> --}}
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
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 float-right">
                                <div class="select-option">
                                    <form action="{{ route('search') }}" method="GET">
                                        @csrf
                                        <select name="key_cate_id" id="cate" onchange="this.form.submit()"
                                            class="sorting">
                                            <option value="">Sản phẩm mặc định</option>
                                            @foreach ($categories as $category)
                                                <option data-id="{{ $category->id }}" value="{{ $category->id }}">
                                                    {{ $category->name_category }}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                    <form action="{{ route('search11') }}" method="GET">
                                        @csrf
                                        <select name="key_brand_id" id="cate" onchange="this.form.submit()"
                                            class="sorting">
                                            <option value="">Sản phẩm mặc định</option>
                                            @foreach ($brands as $brand)
                                                <option data-id="{{ $brand->id }}" value="{{ $brand->id }}">
                                                    {{ $brand->name_brands }}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach ($category_product as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="{{ asset('/storage/' . $product->image_product) }}" alt="">
                                            <div class="sale pp-sale">Sale</div>
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a href="{{route('showProductClient', $product->id)}}"> + Chi tiết</a></li>
                                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{ $product->brand->name_brands }}</div>
                                            <a href="">
                                                <h5>{{ $product->name_product }}</h5>
                                            </a>
                                            <div class="product-price">
                                                {{ $product->price }}.000.000 VNĐ
                                            </div>
                                            <div class="catagory-name">
                                                Chất liệu: {{ $product->cate }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product-Shop Section End -->
@endsection
