@extends('front.master.master-with-sidebar')

@section('title', 'O melhor curso de Laravel do Brasil')

@section('css')
    <style>
        .novacor{
            color: green;
        }
    </style>
@endsection

@section('js')
    <script>
        alert("Olá, passageiro!")
    </script>
@endsection

@section('sidebar')
    @parent
    <h1>Artigos</h1>
    <ul>
        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptatibus!</li>
        <li>Inventore ullam, veritatis! Architecto culpa ex nemo numquam omnis sint?</li>
        <li>Consectetur repudiandae, suscipit! Atque aut consectetur id illo, itaque quidem!</li>
    </ul>
@endsection

@section('content')
    <h1>Conteúdo</h1>
@endsection
