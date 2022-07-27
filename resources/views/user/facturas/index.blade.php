<x-app-layout>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 lg:rounded-lg">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="hero max-h-80" style="background-image: url(https://placeimg.com/1000/800/arch);">
                    <div class="hero-overlay bg-opacity-60"></div>
                    <div class="hero-content text-center text-neutral-content">
                        <div class="max-w-md">
                            <h1 class="mb-5 text-5xl font-bold text-white">Mis facturas</h1>
                            <p class="mb-5 text-white">Aquí podrás controlar y ver las facturas que se te han
                                enviado. Para ver uno en detalle, pulsa el "ojo" de la derecha y accederás a él.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid place-items-center">
                <div data-theme="light" class="stats shadow mt-4 bg-gradient-to-r from-cyan-500 to-blue-500 text-center">

                    <div class="stat">
                        <div class="stat-title text-white">Facturas disponibles</div>
                        <div class="stat-value text-white">{{ $facturas->count() }}</div>
                        <div class="stat-desc text-white">Puedes comprobar uno dándole a "Detalles"</div>
                    </div>

                </div>
            </div>



            <div class="mt-4">
                <div class="px-4 sm:px-8 max-w-5xl m-auto">
                    <h1 class="text-center font-semibold text-sm">Lista de facturas</h1>
                    <p class="mt-2 text-center text-xs mb-4 text-gray-500">Haz click en el "ojo" para ver más detalles.</p>
                    <ul class="border border-gray-200 rounded overflow-hidden shadow-md">

                        @foreach ($facturas as $factura)
                            <tr>
                                <li
                                    class="px-4 py-2 bg-white text-black hover:bg-sky-100 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">
                                    {{ $factura->name }}
                                    <div class="float-right">
                                        <a href="{{ route('user.facturas.show', $factura) }}"
                                            class="text-sky-500 hover:text-sky-700">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                </li>
                            </tr>
                        @endforeach
                    </ul>
                    {{ $facturas->links('pagination::tailwind') }}
                </div>
            </div>

        </div>
    </div>



</x-app-layout>
