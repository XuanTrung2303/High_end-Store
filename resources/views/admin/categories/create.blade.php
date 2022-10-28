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
                        <h6 class="text-white text-capitalize text-center ps-3">Thêm danh mục</h6>
                    </div>
                </div>
                <form action="{{route('storeCategory')}}" method="post" class="card-body px-5">
                    @csrf
                    <div class="table-responsive p-0">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tên danh mục</label>
                            <input name="name_category" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tên danh mục...">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Mô tả danh mục</label>
                            <input name="description" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập mô tả danh mục...">
                        </div>
                    </div>
                    <div class="px-5">
                        <button class="btn btn-success" type="submit">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
