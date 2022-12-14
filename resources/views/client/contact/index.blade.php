@extends('layouts.user')

@section('content')
<!-- Start coding here -->
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Trang chủ</a>
                        <span>Liên hệ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
<!-- Map Section Begin-->
<div class="map spad">
<div class="container">
    <div class="map-inner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2363.398921407987!2d108.16910246822643!3d16.075203009028087!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e6e07b1c3f%3A0x459e4bf5a2af323e!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYyDEkMOgIE7hurVuZw!5e0!3m2!1svi!2s!4v1664982502610!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   <div class="icon">
    <i class="fa fa-map-marker"></i>
   </div>
    </div>
</div>
</div>

<!-- Contact Section Begin-->
<section class="contact-section spad">
<section Class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="contact-title">
        <h4>Liên hệ với chúng tôi</h4>
        <p>Trái ngược với những gì phổ biến hơn, Lorem Ipsum chỉ đơn giản là văn bản ngẫu nhiên. Nó có nguồn gốc từ một phần của
            văn học cổ điển Latinh từ năm 45 trước Công nguyên, maki năm tuổi.
        </p>
    </div>
       <div class="contact-widget">
        <div class="cw-item">
        <div class="ci-icon">
        <i class="ti-location-pin"></i>
        </div>
        <div class="ci-text">
            <span>Địa chỉ:</span>
            <p>137 Nguyễn Thị Thập.Hòa Minh.Liên Chiểu Đà Nẵng</p>
        </div>
        </div>
        <div class="cw-item">
            <div class="ci-icon">
            <i class="ti-mobile"></i>
            </div>
            <div class="ci-text">
                <span>Phone:</span>
                <p>+84 52.666.999</p>
            </div>
        </div>
            <div class="cw-item">
                <div class="ci-icon">
                    <i class="ti-email"></i>
                </div>
                <div class="ci-text">
                    <span>Email:</span>
                    <p>highendjewlery@gmail.com</p>
                </div>
            </div>
    </div>
    </div>
    </div>
</section>
</section>
@endsection
