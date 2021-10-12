<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="freehtml5.co"/>

    {!! $head ?? '' !!}

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ url(mix('front/assets/css/vendor.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('front/assets/css/style.css')) }}">

    <script src="{{ url(mix('front/assets/js/modernizr.js')) }}"></script>
    <script src="{{ url(mix('front/assets/js/respond.js')) }}"></script>

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">

    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<script src="{{ url(mix('front/assets/js/vendor.js')) }}"></script>
<script src="{{ url(mix('front/assets/js/main.js')) }}"></script>

</body>
</html>

