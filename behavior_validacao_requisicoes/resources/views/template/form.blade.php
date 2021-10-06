@extends('template.master.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">

                <form action="{{ route('course.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="name">Curso:</label>
                        <input type="text" id="name" name="name" class="form-control"
                               placeholder="Informe o nome do curso">
                    </div>

                    <div class="form-group">
                        <label for="tutor">Professor:</label>
                        <input type="text" id="tutor" name="tutor" class="form-control"
                               placeholder="Informe o nome do professor do curso">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" id="email" name="email" class="form-control"
                               placeholder="Informe o e-mail do professor">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
