@extends('layouts.user')

@section('content')
<div class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <form method="POST" action="/cart/order">
                        @method('POST')
                        @csrf
                        <?php
                            $carts = Cart::content();
                        ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình Ảnh</th>
                                    <th style="padding-left:100px;" class="p-name">Tên Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng giá</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ( $carts as $cart)
                                <tr>
                                    <td style="padding-left:15px;" class="cart-pic first-row"><img src="{{ asset('/storage/'. $cart->options->image_product) }}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5 style="color: blue; font-weight:bold; padding-left:100px;">{{ $cart->name }}</h5>
                                    </td>
                                    <td name="price" class="p-price first-row">{{ number_format( $cart->price).' '.'VNĐ'}}</td>
                                    <td class="qua-col first-row">
                                        <div class="quanlity">
                                            <div class="pro-qty" style="margin-left: 30px">
                                                <input name="qty"  type="text" value="{{ $cart->qty }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">
                                        <?php
                                        $subtotal = $cart->price*$cart->qty;
                                        echo number_format($subtotal).' '.'vnđ';
                                        ?>
                                    </td>
                                    <input type="hidden" name="product_id" value="{{ $cart->id }}">
                                    <td class="close-td first-row"><a href="{{ url('/cart/delete-cart/'.$cart->rowId )}}"><i class="ti-close" style="color: red; font-weight:bold;"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="cart-buttons">
                                    <a href="{{ url('/product') }}" class="primary-btn up-cart">Tiếp tục mua hàng</a>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-4">
                                <div class="proceed-checkout">
                                    <ul>
                                        <li name="total" class="cart-total">Tổng giá<span>{{Cart::total().' '.'vnđ'}}</span></li>
                                    </ul>
                                    <button class="proceed-btn">Thanh Toán</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="{{url('/vnpay_payment/')}}" method="POST">
                        @csrf
                        <button class="primary-btn up-cart" type="submit" name="redirect"> Thanh toán bằng VNPAY</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
