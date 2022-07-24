<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 lg:rounded-lg">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="hero max-h-80" style="background-image: url(https://placeimg.com/1000/800/arch);">
                    <div class="hero-overlay bg-opacity-60"></div>
                    <div class="hero-content text-center text-neutral-content">
                        <div class="max-w-md">
                            <h1 class="mb-5 text-5xl font-bold text-white">Mis presupuestos</h1>
                            <p class="mb-5 text-white">Aquí podrás controlar y ver los presupuestos que se te han
                                enviado. Para ver uno en detalle, pulsa el "ojo" de la derecha y accederás a él.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid place-items-center">
                <div data-theme="light" class="stats shadow mt-4 bg-green-700 text-center">

                    <div class="stat">
                        <div class="stat-title text-white">Presupuestos disponibles</div>
                        <div class="stat-value text-white">{{ $presupuestos->count() }}</div>
                        <div class="stat-desc text-white">Puedes comprobar uno dándole a "Detalles"</div>
                    </div>

                </div>
            </div>



            <div class="mt-4">
                <div class="px-4 sm:px-8 max-w-5xl m-auto">
                    <h1 class="text-center font-semibold text-sm">Lista de presupuestos</h1>
                    <p class="mt-2 text-center text-xs mb-4 text-gray-500">Haz click en el "ojo" para ver más detalles.</p>
                    <ul class="border border-gray-200 rounded overflow-hidden shadow-md">

                        @foreach ($presupuestos as $presupuesto)
                            <tr>
                                <li
                                    class="px-4 py-2 bg-white text-black hover:bg-sky-100 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">
                                    {{ $presupuesto->name }}
                                    <div class="float-right">
                                        <a href="{{ route('user.presupuestos.show', $presupuesto) }}"
                                            class="text-sky-500 hover:text-sky-700">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                </li>
                            </tr>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>



</x-app-layout>
