@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <h1>Editar cliente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($user, ['route' => ['admin.presupuestos.update', $user], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Introduzca el nombre del cliente',
                ]) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Introduzca el email del usuario',
                ]) !!}

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('dni', 'DNI') !!}
                {!! Form::text('dni', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Introduzca el DNI del cliente',
                ]) !!}

                @error('dni')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            

            <div class="form-group">
                {!! Form::submit('Editar usuario', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
 --}}
@endsection
