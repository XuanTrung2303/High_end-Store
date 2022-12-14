@extends('layouts.admin')
@section('content')
<div class="row">
    @if (Session::has('success'))
    <div class="text-secondary font-weight-bold text-xs">
        <input class="btn btn-info w-30" value="{{Session::get('success')}}">
    </div>
    @endif
    <div style="margin-left: 600px ">
        <form style="float: left;" class="form-inline" action="{{route('search1')}}" method="GET">
            @csrf
            <select name="key_cate_id" class="custom-select my-1 mr-sm-2" id="cate" onchange="this.form.submit()">
                <option selected>Lọc theo danh mục</option>
                <option value="">Tất cả sản phẩm</option>
                @foreach($category as $key => $cate)
                <option data-id="{{$cate->id}}" value="{{$cate->id}}">{{$cate->name_category}}</option>
                @endforeach
            </select>
        </form>
        <div class="col-md-3" style="float: left; padding-left: 10px; margin-bottom:50px; ">
            <form class="form-inline" action="{{route('search2')}}" method="GET">
                @csrf
                <select name="key_brand_id" class="custom-select my-1 mr-sm-2" id="cate" onchange="this.form.submit()">
                    <option selected>Lọc theo thương hiệu</option>
                    <option value="">Tất cả sản phẩm</option>
                    @foreach($brands as $key => $brand)
                    <option data-id="{{$brand->id}}" value="{{$brand->id}}">{{$brand->name_brands}}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3 text-center">Danh sách sản phẩm</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7">Tên thương hiệu</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7">Tên danh mục</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 ps-2">Tên sản phẩm</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 ps-2">Mô tả sản phẩm</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 ps-2">Hình ảnh sản phẩm</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 ps-2">Giá sản phẩm</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 ps-2">Số lượng sản phẩm</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 ps-2">Trọng lượng</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 ps-2">Mã giảm giá</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7 ps-2">Phân loại sản phẩm</th>
                                <th class="text-center text-uppercase text-center text-xxs font-weight-bolder opacity-7">Ngày tạo</th>
                                <th class="text-center text-uppercase text-center text-xxs font-weight-bolder opacity-7">Ngày cập nhật</th>
                                <th class="text-center opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($products as $product)
                                <td>
                                    <div class="text-center">
                                        <b>{{$product->id}}</b>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <b>{{$product->brand->name_brands}}</b>
                                        <!-- Tên biến trỏ đến function liên kết đến khóa ngoại rồi trỏ đến tên trường trong bảng  -->
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <b>{{$product->category_product->name_category}}</b>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs">{{$product->name_product}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs">{{$product->description}}</b>
                                </td>
                                <td class="text-center">
                                    <img width="200px" src="{{asset('/storage/'.$product->image_product)}}">
                                    <b class="text-xs"></b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs">{{$product->price}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs">{{$product->amount}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs">{{$product->weight}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs">{{$product->discount_code}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs">{{$product->cate}}</b>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">{{$product->created_at}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$product->updated_at}}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('showProduct', $product->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit product">
                                        <input type="submit" class="btn btn-success" value="Cập nhật">
                                    </a>
                                    <form action="{{route('products.destroy',[$product->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a class="text-secondary font-weight-bold text-xs">
                                            <input type="submit" value="Xóa" class="btn btn-danger" data-toggle="tooltip" data-original-title="Delete category">
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
