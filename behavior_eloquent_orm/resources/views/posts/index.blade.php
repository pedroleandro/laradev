<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container my-5">

    <a href="{{ route("posts.create") }}" class="btn btn-success mb-5">Novo Post</a>
    <a href="{{ route("posts.bin") }}" class="btn btn-warning mb-5">Lixeira</a>

    <?php
    if (!empty($posts)){
    ?>

    <section class="articles_list">

        <?php
        foreach ($posts as $post){
        ?>

        <article class="mb-5">
            <h1>{{ $post->title }}</h1>
            <h2>{{ $post->subtitle }}</h2>
            <p>{{ $post->description }}</p>
            <small>Criado em: {{ date('Y-m-d H:i:s', strtotime($post->created_at)) }} - Editado em: {{ date('Y-m-d H:i:s', strtotime($post->updated_at)) }}</small>

            <form action="{{ route("posts.destroy", ["id" => $post->id]) }}" method="post" class="mt-3">
                @csrf
                @method("DELETE")
                <a href="{{ route("posts.edit", ["id" => $post->id]) }}" class="btn btn-info">Editar</a>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </article>
        <hr>

        <?php
        }
        ?>
    </section>
    <?php
    }
    ?>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
