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
                    <h6 class="text-white text-capitalize ps-3 text-center">Danh sách thương hiệu</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7">Tên thương hiệu</th>
                                <th class="text-uppercase text-center text-xxs font-weight-bolder opacity-7">Mô tả thương hiệu</th>
                                <th class="text-center text-uppercase text-center text-xxs font-weight-bolder opacity-7">Ngày tạo</th>
                                <th class="text-center text-uppercase text-center text-xxs font-weight-bolder opacity-7">Ngày cập nhật</th>
                                <th class="text-center opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($brands as $brand)
                                <td class="text-center">
                                    <div>
                                        <b>{{$brand->id}}</b>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <b>{{$brand->name_brands}}</b>
                                </td>
                                <td class="text-center">
                                    <b>{{$brand->description}}</b>
                                </td>
                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$brand->created_at}}</span>
                                </td>

                                <td class="text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$brand->updated_at}}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('showBrand', $brand->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit brand">
                                        <input type="submit" class="btn btn-success" value="Cập nhật">
                                    </a>
                                    <form action="{{route('brands.destroy',[$brand->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a class="text-secondary font-weight-bold text-xs">
                                            <input type="submit" value="Xóa" class="btn btn-danger" data-toggle="tooltip" data-original-title="Delete brand">
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
