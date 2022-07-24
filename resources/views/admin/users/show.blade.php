@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <h1>Estás viendo al usuario con DNI: {{ $user->dni }}</h1>
        </div>
    </div>
@stop

@section('content')


    <div class="container">
        <div class="row align-items-start">
            <div class="col-9">
                <div class="card">

                    <div class="card-header">
                        <h1> {{ $user->name }}</h1>

                    </div>

                    {{-- <div class="card-body">
                        <p>{{ $presupuesto->description }}</p>
                    </div>

                    <div class="card-footer">

                        <form action="{{ route('admin.presupuestos.destroy', $presupuesto) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('admin.presupuestos.edit', $presupuesto) }}"
                                class="btn btn-primary">Editar</a>
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>

                    </div> --}}
                </div>
            </div>
            {{-- <div class="col">
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item active text-center" aria-current="true">
                            <p>Información acerca del presupuesto</p>
                        </li>
                        <li class="list-group-item">ID Cliente: <span
                                class="badge badge-success">{{ $presupuesto->user_id }} </span></li>
                        <li class="list-group-item">Precio: <span class="badge badge-success">{{ $presupuesto->price }} €
                            </span></li>
                    </ul>
                </div>
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item active text-center" aria-current="true">
                            <p>Archivos adjuntos <span class="fa fa-file fa-fw"></span></p>
                        </li>
                        <li class="list-group-item">Ejemplo.pdf</li>
                    </ul>
                </div>
            </div> --}}
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
                space: '-',
            });
        });
    </script> --}}

@endsection
