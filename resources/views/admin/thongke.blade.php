@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-7 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <h2 class="font-weight-bolder mb-0">THỐNG KÊ</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-sm-5">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Sản Phẩm</p>
                                    <h4 class="mb-0">{{ $product_count }}</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                        </div>

                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">leaderboard</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Bình luận sản phẩm</p>
                                    <h4 class="mb-0">{{ $product_comment_count }}</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                        </div>

                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Bài Viết</p>
                                    <h4 class="mb-0">{{ $blog_count }}</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                        </div>
                    </div>

                    <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">store</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Đơn hàng</p>
                                    <h4 class="mb-0 ">{{ $order_count }}</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark">
                        </div>

                        <div class="card mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person_add</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Người dùng</p>
                                    <h4 class="mb-0 ">{{ $user_count }}</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark">
                        </div>

                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">store</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Bình luận Bài viết</p>
                                    <h4 class="mb-0 ">{{ $blog_comment_count }}</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark">
                        </div>
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">store</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Số tiền đã bán được </p></p>
                                    <h4 class="mb-0 ">{{ $countall_price }}.000 VNĐ</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
