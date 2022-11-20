@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3 text-center">Danh sách người dùng </h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ">Tên đăng nhập</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ">Email</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ">Hình ảnh</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ">Số điện thoại</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ">Địa chỉ</th>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ">Role</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($users as $user)
                                <td>
                                    <div class="text-center">
                                        <b>{{$user->id}}</b>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <b>{{$user->name}}</b>
                                </td>
                                <td class="text-center">
                                    <span class="text-xs font-weight-bold">{{$user->email}}</span>
                                </td>

                                <td class="text-center">
                                    <span class="text-xs font-weight-bold">{{$user->phone}}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-xs font-weight-bold">{{$user->address}}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-xs font-weight-bold">{{$user->role_as}}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('showUser', $user->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        <input type="submit" value="Cập nhật" class="btn btn-success">
                                    </a>
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
