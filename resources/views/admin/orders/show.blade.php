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
                        <h6 class="text-white text-capitalize text-center ps-3">Cập nhật trạng thái đơn hàng</h6>
                    </div>
                </div>
                <form action="{{route('updateOrder', $orders->id)}}" method="POST" class="card-body px-5">
                    @csrf
                    <div class="table-responsive p-0">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Trạng thái đơn hàng</label>
                            <select name="order_status" id="" class="form-control input-inline" style="width: 200px">
                                <option value="Chưa giao">Chưa giao</option>
                                <option value="Đang giao">Đang giao</option>
                                <option value="Đã giao">Đã giao</option>
                            </select>
                            {{-- <input  value="{{$orders->order_status}}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập trạng thái đơn hàng..."> --}}
                        </div>
                    </div>
                    <div class="px-5">
                        <button class="btn btn-success" type="submit">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
