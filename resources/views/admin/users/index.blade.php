@extends('adminlte::page')

@section('title', 'Presupuestos')

@section('content_header')
    <h1>Aquí podrás gestionar a tus clientes</h1>
@stop

@section('content')
    <p>Aquí podrás ver a tus clientes</p>
    <a href="{{ route('admin.users.create') }}" class="btn btn-info mb-4">Crear cliente</a>


    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>DNI</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <img class="h-5 w-5 rounded-full object-cover" src="{{ $user->profile_photo_url }}"
                                        alt="{{ $user->name }}" />
                                @endif
                            </td>
                            <td> <a href="{{ route('admin.users.show', $user) }}">{{ $user->name }}</a> </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->dni }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="post">
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
                {{ $users->links('pagination::bootstrap-5') }}
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
