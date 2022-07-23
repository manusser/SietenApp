@extends('adminlte::page')

@section('title', 'Presupuestos')

@section('content_header')
    <h1>Aquí podrás ver los presupuestos creados</h1>
@stop

@section('content')
    <p>Aquí podrás ver tus presupuestos</p>
    <a href="{{ route('admin.presupuestos.create') }}" class="btn btn-info mb-4">Crear presupuesto</a>


    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Usuario</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($presupuestos as $presupuesto)
                        <tr>
                            <td>{{ $presupuesto->id }}</td>
                            <td> <a href="{{ route('admin.presupuestos.show', $presupuesto) }}">{{ $presupuesto->name }}</a> </td>
                            <td>{{ $presupuesto->price }} €</td>
                            <td>{{ $presupuesto->user_id }}</td>
                            <td>
                                <a href="{{ route('admin.presupuestos.edit', $presupuesto) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.presupuestos.destroy', $presupuesto) }}" method="post">
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
                {{ $presupuestos->links('pagination::bootstrap-5') }}
            </div>
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
