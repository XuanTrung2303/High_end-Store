@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Chỉnh sửa phân quyền người dùng</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">

                    <form action="{{route('updateUser', $users->id)}}" method="POST">
                        @csrf
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <div class="input-group w-70" style="margin-left: 15%;">
                                        <span class="input-group-text" id="addon-wrapping">Role</span>
                                        <input name="role_as" type="text" class="form-control" value="{{$users->role_as}}" placeholder="Role" aria-label="Role" aria-describedby="addon-wrapping">
                                        <button class="btn btn-success" type="submit">Cập nhật</button>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
