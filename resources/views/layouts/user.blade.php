<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HighEnd-Store</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset ('user/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('user/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('user/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('user/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('user/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('user/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('user/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('user/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('user/css/style.css')}}" type="text/css">
</head>

<body>
    @include('layouts.inc.userheader')
    @yield('content')
    @include('layouts.inc.userfooter')
    <!-- Js Plugins -->
    <script src="{{ asset ('user/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset ('user/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('user/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset ('user/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset ('user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset ('user/js/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset ('user/js/jquery.dd.min.js')}}"></script>
    <script src="{{ asset ('user/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset ('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('user/js/main.js')}}"></script>
</body>

</html>
