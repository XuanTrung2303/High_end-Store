@extends('layouts.admin')
@section('content')
<div class="row">
    @if (Session::has('success'))
    <div class="text-secondary font-weight-bold text-xs">
        <input class="btn btn-info w-30" value="{{Session::get('success')}}">
    </div>
    @endif
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
                            @foreach ( $orderdetails as $orderdetail )
                            <tr>
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
