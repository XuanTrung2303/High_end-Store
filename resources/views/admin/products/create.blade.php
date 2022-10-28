@extends('layouts.admin')
@section('content')
<div class="row">
    @if (Session::has('success'))
    <div class="text-secondary font-weight-bold text-xs">
        <input class="btn btn-info w-30" value="{{Session::get('success')}}">
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize text-center ps-3">Thêm sản phẩm</h6>
                    </div>
                </div>
                <form action="{{route('storeProduct')}}" enctype="multipart/form-data" method="post" class="card-body px-5">
                    @method('POST')
                    @csrf
                    <div class="table-responsive p-0">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tên sản phẩm</label>
                            <input name="name_product" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tên sản phẩm...">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Mô tả sản phẩm</label>
                            <textarea name="description" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập mô tả sản phẩm..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Hình ảnh sản phẩm</label>
                            <input name="image_product" type="file" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Giá sản phẩm</label>
                            <input name="price" type="number" class="form-control" id="formGroupExampleInput" placeholder="Nhập giá sản phẩm...">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Số lượng sản phẩm</label>
                            <input name="amount" type="number" class="form-control" id="formGroupExampleInput" placeholder="Nhập số lượng sản phẩm...">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Trọng lượng sản phẩm</label>
                            <input name="weight" type="number" class="form-control" id="formGroupExampleInput" placeholder="Nhập trọng lượng sản phẩm...">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Mã giảm giá sản phẩm</label>
                            <input name="discount_code" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập mã giảm giá...">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Phân loại sản phẩm</label>
                            <input name="cate" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập đặc sắc sản phẩm...">
                        </div>
                        <div class="mb-3">
                            <label for="title">Danh mục sản phẩm</label>
                            <select name="product_category_id" class="form-control">
                                @foreach($category as $key => $cate)
                                <option value="{{$cate->id}}">{{$cate->name_category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="title">Thương hiệu sản phẩm</label>
                            <select name="brand_id" class="form-control">
                                @foreach($brands as $key => $brand)
                                <option value="{{$brand->id}}">{{$brand->name_brands}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="px-5">
                        <button class="btn btn-success" type="submit">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
