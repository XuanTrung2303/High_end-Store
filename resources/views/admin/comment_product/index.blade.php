@extends('layouts.admin')
@section('content')
<div class="row">
    @if (Session::has('success'))
    <div class="text-secondary font-weight-bold text-xs">
        <input class="btn btn-info w-30" value="{{Session::get('success')}}">
    </div>
    @endif
    <div style="margin-left: 700px ">
        <form style="float: left;" class="form-inline" action="{{route('search6')}}" method="GET">
            @csrf
            <select name="key_user_id" class="custom-select my-1 mr-sm-2" id="cate" onchange="this.form.submit()">
                <option selected>Lọc theo người dùng</option>
                <option value="">Tất cả bình luận</option>
                @foreach($users as $key => $user)
                <option data-id="{{$user->id}}" value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </form>
        <form style="float: left;" class="form-inline" action="{{route('search7')}}" method="GET">
            @csrf
            <select name="key_pro_id" class="custom-select my-1 mr-sm-2" id="cate" onchange="this.form.submit()">
                <option selected>Lọc theo sản phẩm</option>
                <option value="">Tất cả bình luận</option>
                @foreach($products as $key => $product)
                <option data-id="{{$product->id}}" value="{{$product->id}}">{{$product->name_product}}</option>
                @endforeach
            </select>
        </form>
    </div>
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3 text-center">Danh sách bình luận sản phẩm</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Mã sản phẩm</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Mã khách hàng</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Tên sản phẩm</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Tên khách hàng</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Nội dung bình luận</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số sao bình luận</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($comment_products as $comment_product)
                                <td>
                                    <div class="text-center">
                                        <b class="text-center">{{$comment_product->id}}</b>
                                    </div>
                                </td>
                                <td>
                                    <div class=" text-center">
                                        <b>{{$comment_product->product_id}}</b>
                                    </div>
                                </td>
                                <td>
                                    <div class=" text-center">
                                        <b>{{$comment_product->user_id}}</b>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$comment_product->product->name_product}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$comment_product->user->name}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$comment_product->massages}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$comment_product->rating}}</b>
                                </td>
                                <td class="align-middle">
                                    <form action="{{route('comment_products.destroy',[$comment_product->id])}}" method="POST">
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
