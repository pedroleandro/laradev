@extends('front.master.master')

@section('title', 'Seja muito bem vindo')

@section('content')

    <div class="container">
        <div class="row py-4">
            <div class="col-12">
                Meu nome é {{ $user->name }} <br>
                {!! $alert !!}
                {{-- Meu comentário --}}
            </div>
        </div>

        <div class="row">
            <div class="col-6">

                <?php
                echo "<h1 class='nova'>Sintaxe do PHP</h1>";
                if (!empty($user->email)) {
                    echo "<p>[IF] O usuário informou um e-mail</p>";
                } elseif ($user) {
                    echo "<p>[ELSEIF] Existe um objeto usuário</p>";
                } else {
                    echo "<p>[ELSE] Não Existe um objeto usuário</p>";
                }

                echo "<p>[TERNÁRIA] " . (!empty($user->email) ? 'O usuário informou um e-mail' : 'Existe um objeto usuário') . "</p>";
                echo "<p>[TERNÁRIA DUPLA] " . (!empty($user->email) ? 'O usuário informou um e-mail' : ($user ? 'Existe um objeto usuário' : 'Não Existe um objeto usuário')) . "</p>";

                if (isset($user)) {
                    echo "<p>[ISSET] Existe um usuário</p>";
                }

                if (empty($user)) {
                    echo "<p>[EMPTY] O Usuário está vazio</p>";
                }

                $var = '1';

                switch ($var) {
                    case '1':
                        echo "<p>[CASE 1]</p>";
                        break;
                    case '2':
                        echo "<p>[CASE 2]</p>";
                        break;
                    default:
                        echo "<p>[CASE Default]</p>";
                        break;
                }

                echo "<h2>Listagem dos cursos</h2>";

                for ($i = 0; $i < count($courses); $i++) {
                    echo "<p>" . $courses[$i]["name"] . " - " . $courses[$i]["tutor"] . "</p>";
                }

                foreach ($courses as $course) {
                    echo "<p>" . $course["name"] . " - " . $course["tutor"] . "</p>";
                }

                ?>

            </div>
            <div class="col-6">

                <h1>Sintaxe do Blade</h1>

                @if(!empty($user->email))
                    <p>[IF] O usuário informou um e-mail</p>
                @elseif($user)
                    <p>[ELSEIF] Existe um objeto usuário</p>
                @else
                    <p>[ELSE] Não Existe um objeto usuário</p>
                @endif

                <p>[TERNÁRIA] {{ (!empty($user->email) ? 'O usuário informou um e-mail' : 'Existe um objeto usuário') }}</p>
                <p>[TERNÁRIA
                    DUPLA] {{ (!empty($user->email) ? 'O usuário informou um e-mail' : ($user ? 'Existe um objeto usuário' : 'Não Existe um objeto usuário')) }}</p>

                @isset($user)
                    <p>[ISSET] Existe um usuário</p>
                @endisset

                @empty($user)
                    <p>[ISSET] Existe um usuário</p>
                @endempty

                @switch($var)
                    @case('1')
                    <p>[CASE 1]</p>
                    @break
                    @case('2')
                    <p>[CASE 2]</p>
                    @break
                    @default
                    <p>[CASE Default]</p>
                    @break
                @endswitch

                <h2>Listagem dos cursos</h2>

                @for($i = 0; $i < count($courses); $i++)
                    <p>{{ $courses[$i]["name"] }} - {{ $courses[$i]["tutor"] }}</p>
                @endfor

                @foreach($courses as $course)
                    <p style="background-color: {{ $loop->index/2===0 ? 'red': 'blue'}}">{{ $course["name"] }}
                        - {{ $course["tutor"] }}</p>

                    {{--    @php--}}
                    {{--        var_dump($loop);--}}
                    {{--    @endphp--}}
                @endforeach

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @component('front.components.alert', ['type' => 'success', 'datetime' => date('d/m/Y H:i:s')])
                    Minha mensagem de teste
                @endcomponent
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @alert(['type' => 'success', 'datetime' => date('d/m/Y H:i:s')])
                    Essa mensagem está sendo gerada apartir do meu componente
                @endalert
            </div>
        </div>

    </div>
@endsection
