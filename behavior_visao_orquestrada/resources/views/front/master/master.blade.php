<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
</head>
<body>


@include('front.includes.header')

@yield('content')

@include('front.includes.footer')

<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="{{ mix('js/app.js') }}"></script>--}}

</body>
</html>
