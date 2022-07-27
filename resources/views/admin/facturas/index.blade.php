@extends('adminlte::page')

@section('title', 'Facturas')

@section('content_header')
    <h1>Aquí podrás ver las facturas creadas</h1>
@stop

@section('content')
    <p>Aquí podrás ver tus facturas</p>
    <a href="{{ route('admin.facturas.create') }}" class="btn btn-info mb-4">Crear factura</a>


    <div>
        <div class="card">

            <div class="card-body">

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

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <td>Acciones</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($facturas as $factura)
                            <tr>
                                <td>{{ $factura->id }}</td>
                                <td> <a href="{{ route('admin.facturas.show', $factura) }}">{{ $factura->name }}</a>
                                </td>
                                <td>{{ $factura->user_id }}</td>
                                <td>
                                    <form action="{{ route('admin.facturas.destroy', $factura) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    
                </div>
            </div>

            {{ $facturas->links('pagination::tailwind') }}
        </div>

    </div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

@livewireScripts
