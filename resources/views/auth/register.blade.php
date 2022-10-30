@extends('layouts.register')
@section('content')
    <div class="container">

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <!-- Register Section Begin -->
            <div class="register-login-section spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="register-form">
                                <h2>Đăng ký</h2>
                                <form action="#">
                                    <div class="group-input">
                                        <label for="username">Tên tài khoản</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="group-input">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="group-input">
                                        <label for="address">Địa chỉ</label>
                                        <input id="address" type="address"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}" required autocomplete="address">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="group-input">
                                        <label for="phone">Phone</label>
                                        <input id="phone" type="phone"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" required autocomplete="phone">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="group-input">
                                        <label for="image">Hình ảnh</label>
                                        <input name="image" id="image" type="file" class="form-control"
                                            id="formGroupExampleInput">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="group-input">
                                        <label for="pass">Mật khẩu</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="group-input">
                                        <label for="con-pass">Xác nhận mật khẩu *</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <button type="submit" class="site-btn btn">ĐĂNG KÝ</button>
                                </form>
                                <div class="switch-login">
                                    <a href="{{ asset('/login') }}" class="Or-login">Hoặc Đăng nhập</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    @endsection
