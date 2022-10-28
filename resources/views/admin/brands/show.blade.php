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
                        <h6 class="text-white text-capitalize text-center ps-3">Cập nhật thương hiệu</h6>
                    </div>
                </div>
                <form action="{{route('updateBrand', $brands->id)}}" method="POST" class="card-body px-5">
                    @csrf
                    <div class="table-responsive p-0">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tên thương hiệu</label>
                            <input name="name_brands" value="{{$brands->name_brands}}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tên thương hiệu...">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Mô tả thương hiệu</label>
                            <input name="description" value="{{$brands->description}}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập mô tả thương hiệu...">
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
