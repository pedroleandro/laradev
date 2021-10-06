<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @hasSection('css')
        @yield('css')
    @endif
</head>
<body>


@include('front.includes.header')

<div class="container py-3">
    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
{{--            @yield('sidebar')--}}
            @section('sidebar')
                <h1 class="novacor">Posts</h1>

                <ul>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Fugiat omnis quas rerum velit.</li>
                    <li>Doloribus illo sed temporibus voluptatem.</li>
                    <li>Odio officiis quidem suscipit tenetur!</li>
                    <li>Est illo laboriosam recusandae saepe.</li>
                </ul>
            @show
        </div>
    </div>
</div>


@include('front.includes.footer')

<script src="{{ asset('js/app.js') }}"></script>
@hasSection('js')
    @yield('js')
@endif

</body>
</html>
