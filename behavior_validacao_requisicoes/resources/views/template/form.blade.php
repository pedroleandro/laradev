@extends('template.master.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">

{{--                @php--}}
{{--                    var_dump($errors->all());--}}
{{--                @endphp--}}

                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach

                <form action="{{ route('course.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="name">Curso:</label>
                        <input type="text" id="name" name="name"
                               class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}"
                               placeholder="Informe o nome do curso" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tutor">Professor:</label>
                        <input type="text" id="tutor" name="tutor" class="form-control {{ ($errors->has('tutor') ? 'is-invalid' : '') }}"
                               placeholder="Informe o nome do professor do curso" value="{{ old('tutor') }}">
                        @if($errors->has('tutor'))
                            <div class="invalid-feedback">
                                {{ $errors->first('tutor') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" id="email" name="email" class="form-control {{ ($errors->has('email') ? 'is-invalid' : '') }}"
                               placeholder="Informe o e-mail do professor" value="{{ old('email') }}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
