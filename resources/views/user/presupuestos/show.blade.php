<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="hero max-h-80" style="background-image: url(https://placeimg.com/1000/800/arch);">
                    <div class="hero-overlay bg-opacity-60"></div>
                    <div class="hero-content text-center text-neutral-content">
                        <div class="max-w-md">
                            <h1 class="mb-5 text-5xl font-bold text-white">Información del presupuesto</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p class="mb-4 mt-4"> <i class="fa-solid fa-angle-left"></i> <a href="{{ route('user.presupuestos.index') }}">Volver a la lista de presupuestos</a></p>
                <div class="grid grid-cols-3">
                    <div class="col-span-2">
                        <p class="text-black">Creado: <span class="badge badge-primary">
                                {{ $presupuesto->created_at }}</span></p>
                    </div>
                    <div>
                        <p class="text-black">Precio: <span class="badge badge-success"> {{ $presupuesto->price }}
                                €</span></p>
                    </div>
                </div>

                <h1 class="mt-5 text-5xl font-bold text-black">{{ $presupuesto->name }}</h1>
                <p class="mt-5">{{ $presupuesto->description }}</p>
            </div>

        </div>

        <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p class="text-black">Archivos adjuntos <i class="fas fa-file fa-fw"></i> </p>
            </div>
        </div>

        <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p>¿Tienes alguna duda? Puedes llamarnos al: 87123781</p>
            </div>
        </div>

    </div>




</x-app-layout>
