@extends('adminlte::page')

@section('title', 'Presupuestos')

@section('content_header')
    <h1>Aquí podrás ver los presupuestos creados</h1>
@stop

@section('content')
    <p>Aquí podrás ver tus presupuestos</p>
    <a href="{{ route('admin.presupuestos.create') }}" class="btn btn-info mb-4">Crear presupuesto</a>

    @livewire('admin.presupuesto-index')
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