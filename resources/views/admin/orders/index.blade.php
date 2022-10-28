@extends('layouts.admin')
@section('content')
<div class="row">
    @if (Session::has('success'))
    <div class="text-secondary font-weight-bold text-xs">
        <input class="btn btn-info w-30" value="{{Session::get('success')}}">
    </div>
    @endif
    <div style="margin-left: 700px ">
        <form style="float: left;" class="form-inline" action="{{route('search4')}}" method="GET">
            @csrf
            <select name="key_user_id" class="custom-select my-1 mr-sm-2" id="cate" onchange="this.form.submit()">
                <option selected>Lọc theo người dùng</option>
                <option value="">Tất cả đơn hàng</option>
                @foreach($users as $key => $user)
                <option data-id="{{$user->id}}" value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </form>
    </div>
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3 text-center">Danh sách đơn hàng</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Mã người dùng</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Tên người dùng</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Ngày đặt hàng</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái đơn hàng</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($orders as $order)
                                <td>
                                    <div class="text-center">
                                        <b class="text-center">{{$order->id}}</b>
                                    </div>
                                </td>
                                <td>
                                    <div class=" text-center">
                                        <b>{{$order->user_id}}</b>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$order->user->name}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$order->date_order}}</b>
                                </td>
                                <td class="text-center">
                                    <b class="text-xs text-secondary mb-0">{{$order->order_status}}</b>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('showOrder', $order->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit order">
                                        <input type="submit" class="btn btn-success" value="Cập nhật">
                                    </a>
                                    <form action="{{route('orders.destroy',[$order->id])}}" method="POST">
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
        <a class="btn btn-info mb-2" class="text-white" href="{{url('admin/orderdetails/index')}}">Xem đơn hàng chi tiết</a>
    </div>
</div>
@endsection
