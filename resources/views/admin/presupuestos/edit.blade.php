@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <h1>Editar presupuesto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($presupuesto, ['route' => ['admin.presupuestos.update', $presupuesto], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Introduzca el nombre del presupuesto',
                ]) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('description', 'Descripción') !!}
                {!! Form::text('description', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Introduzca la descripción del presupuesto',
                ]) !!}

                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('price', 'Precio') !!}
                {!! Form::number('price', null, [
                    'class' => 'form-control',
                    'step' => 'any',
                    'placeholder' => 'Introduzca el precio del presupuesto',
                ]) !!}

                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('user_id', 'ID del Usuario') !!}
                {!! Form::number('user_id', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Introduzca el ID del usuario',
                ]) !!}

                @error('user_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, [
                    'class' => 'form-control disabled',
                    'type' => 'hiddden',
                    'placeholder' => 'Introduzca el slug de la categoría',
                ]) !!}

                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::submit('Editar categoría', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection
