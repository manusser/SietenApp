<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="hero max-h-80" style="background-image: url(https://placeimg.com/1000/800/arch);">
                    <div class="hero-overlay bg-opacity-60"></div>
                    <div class="hero-content text-center text-neutral-content">
                        <div class="max-w-md">
                            <h1 class="mb-5 text-5xl font-bold text-white">Mis presupuestos</h1>
                            <p class="mb-5 text-white">Aquí podrás controlar y ver los presupuestos que se te han
                                enviado. Para ver uno en detalle, pulsa el botón "Detalles" y accederás a él.</p>
                        </div>
                    </div>
                </div>
            </div>


            <table data-theme="lofi" class="table w-full mt-10" id="presupuestos">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($presupuestos as $presupuesto)
                        <tr>
                            <td>{{ $presupuesto->name }}</td>
                            <td>
                                <div class="badge badge-success"> {{ $presupuesto->price }} €</div>
                            </td>
                            <td>
                                <a class="btn btn-ghost btn-xs" href="{{ route('user.presupuestos.show', $presupuesto) }}">Detalles</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>



</x-app-layout>
