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
                        <h6 class="text-white text-capitalize text-center ps-3">Thêm bài viết</h6>
                    </div>
                </div>
                <form action="{{route('storeBlog')}}" enctype="multipart/form-data" method="post" class="card-body px-5">
                    @method('POST')
                    @csrf
                    <div class="table-responsive p-0">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tiêu đề bài viết</label>
                            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tiêu đề bài viết...">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nội dung bài viết</label>
                            <textarea name="content" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập nội dung bài viết..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Hình ảnh bài viết</label>
                            <input name="image" type="file" class="form-control" id="formGroupExampleInput">
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
