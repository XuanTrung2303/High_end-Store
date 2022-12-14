@extends('layouts.user')

@section('content')
    <!-- Blog Details Section Begin -->
    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">

                            <div class="blog-detail-title">
                                <h2>{{ $blog->title }}</h2>
                                <p><span>-{{ $blog->created_at }}</span></p>
                            </div>
                            <div class="blog-large-pic">
                                <img src="{{ asset('/storage/' . $blog->image) }}" alt="">
                            </div>

                            <div class="blog-quote">
                                <p>"{{ $blog->content }}"</p>
                            </div>

                        <div class="tag-share">
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                            <div class="leave-comment">
                                <h4 style="font-weight:bold">
                                    {{ $countcomment }} Bình luận
                                    </h4>
                                    <div class="comment-option">
                                        @foreach ($comm as $com)
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="{{asset('/storage/'.$com->user->image)}}" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <h5 style="color: blue; font-weight:bold;">{{$com->user->name}}</h5>
                                                <span style=" font-size: 0.7em; font-weight:bold;">{{$com->created_at}}</span>
                                                <div style="font-weight:bold;" class="at-reply">{{$com->messages}}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                            </div>
                        <div class="leave-comment">
                            <h4>Bình Luận</h4>
                            <div>
                                @if (Route::has('login'))
                                    @auth
                                        <div id="comRate">
                                            @if (Route::has('login'))
                                                @auth
                                                    <div id="comRate">
                                                    </div>
                                                @else
                                                    <div id="comRate1"></div>
                                                @endauth
                                            @endif
                                        </div>
                                    @else
                                        <div id="comRate1"></div>
                                    @endauth
                                @endif
                                <form method="POST" id="ratingForm" action="/blog_detail/comment/{{$blog->id}}"
                                    class="comment-form">
                                    @method('POST')
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <textarea name="messages" placeholder="Messages"></textarea>
                                            <button type="submit" class="site-btn">Gửi tin nhắn</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        < script >
            $(function() {
                $("#comRate").comRate({
                    rating: 0,
                    normalFill: "#A0A0A0",
                    ratedFill: "#ffff00"
                }).on('comrate.set', function(e, data) {
                    $('#rating').val(data.rating);
                });
                $("#comRate1").comRate({
                    rating: 0,
                    normalFill: "#A0A0A0",
                    ratedFill: "#ffff00"
                }).on('comrate.set', function(e, data) {
                    alert('Bạn chưa đăng nhập, vui lòng đăng nhập để bình luận');
                });
            });
    </script>
    </script>
    <!-- Blog Details Section End -->
@endsection
