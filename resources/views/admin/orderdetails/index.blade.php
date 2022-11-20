@extends('layouts.admin')
@section('content')
<div class="row">
    @if (Session::has('success'))
    <div class="text-secondary font-weight-bold text-xs">
        <input class="btn btn-info w-30" value="{{Session::get('success')}}">
    </div>
    @endif
    <div style="margin-left: 700px ">
        <form style="float: left;" class="form-inline" action="{{route('search5')}}" method="GET">
            @csrf
            <select name="key_pro_id" class="custom-select my-1 mr-sm-2" id="product" onchange="this.form.submit()">
                <option selected>Lọc theo sản phẩm</option>
                <option value="">Tất cả đơn hàng</option>
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
                    <h6 class="text-white text-capitalize ps-3 text-center">Danh sách đơn hàng chi tiết</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Mã đơn hàng</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Mã sản phẩm</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Mã người dùng</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Tên sản phẩm</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Ngày tạo đơn</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Trạng thái đơn hàng</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số lượng</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Giá sản phẩm</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($orderdetails as $orderdetail)
                                <td>
                                    <div class="text-center">
                                        <b class="text-center">{{$orderdetail->id}}</b>
                                    </div>
                                </td>
                                <td>
                                    <div class=" text-center">
                                        <b>{{$orderdetail->order_id}}</b>
                                    </div>
                                </td>
                                <td>
                                    <div class=" text-center">
                                        <b>{{$orderdetail->product_id}}</b>
                                    </div>
                                </td>
                                <td>
                                    <div class=" text-center">
                                        <b>{{$orderdetail->order->user_id}}</b>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$orderdetail->product->name_product}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$orderdetail->created_at}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$orderdetail->order->order_status}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$orderdetail->qty}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$orderdetail->order_price}}VNĐ</b>
                                </td>
                                <td class="align-middle">
                                    <form action="{{route('orderdetails.destroy',[$orderdetail->id])}}" method="POST">
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
