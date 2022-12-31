@extends('layouts.user')

@section('content')
    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>MÃ ĐƠN HÀNG</th>
                                        <th>MÃ SẢN PHẨM</th>
                                        <th>TÊN SẢN PHẨM</th>
                                        <th>SỐ LƯỢNG</th>
                                        <th>TRẠNG THÁI ĐƠN HÀNG</th>
                                        <th>THÀNH TIỀN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $userorders as $userorder )
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                <b class="text-center">{{$userorder->id}}</b>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=" text-center">
                                                <b>{{$userorder->product_id}}</b>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <b class="text-xs text-secondary mb-0">{{$userorder->product->name_product}}</b>
                                        </td>
                                        <td class="text-center">
                                            <b class="text-xs text-secondary mb-0">{{$userorder->qty}}</b>
                                        </td>
                                        <td class="text-center">
                                            <b class="text-xs text-secondary mb-0">{{$userorder->order->order_status}}</b>
                                        </td>
                                        <td class="text-center">
                                            <b class="text-xs text-secondary mb-0">{{$userorder->order_price}}VNĐ</b>
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
