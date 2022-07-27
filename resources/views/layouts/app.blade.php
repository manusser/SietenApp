<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head data-theme="cyberpunk">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sieten Taller') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        <div class="drawer">
            <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                <!-- Navbar -->
                <div class="w-full navbar bg-base-300">
                    <div class="flex-none lg:hidden">
                        <label for="my-drawer-3" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                    <div class="flex-1 px-2 mx-2 text-2xl">Siete'N Motor</div>
                    <div class="flex-none hidden lg:block">
                        <ul class="menu menu-horizontal">
                            <!-- Navbar menu content here -->
                            <li class="text-2xl"><a href="{{ route('home') }}"><i class="fas fa-home fa-fw"></i> Inicio</a></li>
                            <li class="text-2xl"><a href="{{ route('user.presupuestos.index') }}"><i class="fas fa-money-bill fa-fw"></i> Presupuestos</a></li>
                            <li class="text-2xl"><a href="{{ route('user.facturas.index') }}"><i class="fas fa-file fa-fw"></i>Facturas</a></li>
                            <li class="text-2xl"><a><i class="fas fa-user-clock fa-fw"></i>Citas</a></li>
                            <li class="text-2xl"><a><i class="fas fa-bell fa-fw"></i>Notificaciones</a></li>
                            <li>
                                <div class="dropdown dropdown-end">
                                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                                        <div class="w-10 rounded-full">
                                            <img src="{{ Auth::user()->profile_photo_url }}" />
                                        </div>
                                    </label>
                                    <ul tabindex="0"
                                        class="mt-7 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                                        <li>
                                            <a href="{{ route('profile.show') }}" class="justify-between">
                                                Mi perfil
                                            </a>
                                        </li>

                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                                            <li><a @click.prevent="$root.submit();">Salir</a></li>
                                        </form>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
            <div class="drawer-side">
                <label for="my-drawer-3" class="drawer-overlay"></label>
                <ul class="menu p-4 overflow-y-auto w-80 bg-base-100">
                    <!-- Sidebar content here -->
                    {{-- <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img src="{{ Auth::user()->profile_photo_url }}" />
                            </div>
                        </label>
                        <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                            <li>
                                <a href="{{ route('profile.show') }}" class="justify-between">
                                    Mi perfil
                                </a>
                            </li>
            
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <li><a @click.prevent="$root.submit();">Salir</a></li>
                            </form>
            
                        </ul>
                    </div> --}}
                    <li>
                        <div class="rounded-full">
                            <img class="full-rounded" height="70px" width="70px"
                                src="{{ Auth::user()->profile_photo_url }}" /> {{ Auth::user()->name }}
                        </div>
                    </li>
                    <li class="text-2xl"><a href="{{ route('profile.show') }}"><i class="fas fa-money-bill fa-fw"></i> Mi perfil</a></li>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <li class="text-2xl"><a href="{{ route('logout') }}" @click.prevent="$root.submit();"><i
                                    class="fas fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
                    </form>
                    <div class="divider"></div>
                    <li class="text-2xl"><a href="{{ route('home') }}"><i class="fas fa-home fa-fw"></i> Inicio</a></li>
                    <li class="text-2xl"><a href="{{ route('user.presupuestos.index') }}"><i class="fas fa-money-bill fa-fw"></i> Presupuestos</a></li>
                    <li class="text-2xl"><a href="{{ route('user.facturas.index') }}"><i class="fas fa-file fa-fw"></i>Facturas</a></li>
                    <li class="text-2xl"><a><i class="fas fa-user-clock fa-fw"></i>Citas</a></li>
                    <li class="text-2xl"><a><i class="fas fa-bell fa-fw"></i>Notificaciones</a></li>
                    <div class="alert shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="stroke-current flex-shrink-0 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Esta aplicación está en fase de pruebas. Si ves algo que no debería estar ahí, por
                                favor, contacte con nosotros.</span>
                        </div>
                    </div>

                </ul>

            </div>
        </div>



    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
