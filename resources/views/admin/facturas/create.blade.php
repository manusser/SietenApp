@extends('adminlte::page')
@section('title', 'Blog')

@section('content_header')
    <h1>Crear un presupuesto</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.facturas.store') }}" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-5">Sube tus facturas</h3>
                @csrf
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="user_id">Nombre de la factura</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>


                <div class="form-group">
                    <label for="user_id">ID Usuario</label>
                    <input type="text" name="user_id" id="user_id" class="form-control">
                </div>

                <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                    <label class="custom-file-label" for="chooseFile">Selecciona un archivo</label>
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Subir factura
                </button>
            </form>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .container {
            max-width: 500px;
        }

        dl,
        ol,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-',
            });
        });
    </script>

@endsection
