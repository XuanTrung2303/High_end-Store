@extends('layouts.user')
@section('content')
            <!-- Breadcrumb Section Begin -->
            <div class="breacrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-text">
                                <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                <span>Blog</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Section End -->
            <!-- Blog Section Begin -->
            <section class="blog-section- spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                            <div class="blog-sidebar">
                                <div class="recent-post">
                                    <h4>Bài viết gần đây</h4>
                                    @foreach ($blogs as $blog )
                                    <div class="recent-blog">
                                        <a href="#" class="rb-item">
                                            <div class="rb-pic">
                                            <img src="{{ asset('/storage/' . $blog->image) }}" alt="">
                                            </div>
                                            <div class="rb-text">
                                                <h6>{{ $blog->title }}</h6>
                                                <p><span>{{ $blog->created_at }}</span></p>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-9 order-1 order-lg-2">
                            <div class="row">
                                @foreach ($blogs as $blog )
                                <div class="col-lg-6 col-sm-6">
                                    <div class="blog-item">
                                        <div class="bi-pic">
                                            <img src="{{ asset('/storage/' . $blog->image) }}" alt="">
                                        </div>
                                        <div class="bi-text">
                                            <a href="{{route('showBlogClient', $blog->id)}}">
                                                <h4>{{ $blog->title }}</h4>
                                            </a>
                                            <p><span>{{ $blog->created_at }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="col-lg-12">
                                    <div class="loading-more">
                                        <i class="icon_loading"></i>
                                        <a href="#">Loading More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Section End -->
@endsection
