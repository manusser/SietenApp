@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Bienvenido al panel de administración de Siete'n Taller</h1>
        </div>
    </div>


@stop

@section('content')

    <div class="mb-4">
        <img src="{{ asset('imgs/banner.jpg') }}" alt=""
            style="display: block; margin-left: auto; margin-right: auto; width: 50%; border-radius: 15px;" class="shadow p-3 mb-5 bg-white rounded">
    </div>



    {{-- <div class="card">
        <div class="card-body">
            <p>Aquí podrás controlar y gestionar a los usuarios dados de alta en tu taller.</p>
            <p>Esta aplicación ha sido creada por NubeMarketing exclusivamente para Siete'n Taller.</p>
        </div>
    </div> --}}

    <div class="container">
        <h2>Estadísticas generales</h2>
        <div class="row">



            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Usuarios registrados</h6>
                        <h2 class="text-right"><i class="fa fa-user f-left"></i><span>{{ $users->count() }}</span></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Presupuestos creados</h6>
                        <h2 class="text-right"><i
                                class="fa fa-money-bill f-left"></i><span>{{ $presupuestos->count() }}</span></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Facturas creadas</h6>
                        <h2 class="text-right"><i class="fa fa-file f-left"></i><span>{{ $facturas->count() }}</span></h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Citas creadas</h6>
                        <h2 class="text-right"><i class="fa fa-user-clock f-left"></i><span>486</span></h2>
                    </div>
                </div>
            </div>

        </div>

        {{-- <div class="row align-items-start">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
            </div>
        </div> --}}
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>
        .order-card {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg, #4099ff, #73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg, #2ed8b6, #59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg, #FFB64D, #ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg, #FF5370, #ff869a);
        }


        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card .card-block {
            padding: 25px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
