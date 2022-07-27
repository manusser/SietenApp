<x-app-layout>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="hero max-h-80" style="background-image: url(https://placeimg.com/1000/800/arch);">
                    <div class="hero-overlay bg-opacity-60"></div>
                    <div class="hero-content text-center text-neutral-content">
                        <div class="max-w-md">
                            <h1 class="mb-5 text-5xl font-bold text-white">Información de la factura</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p class="mb-4 mt-4"> <i class="fa-solid fa-angle-left"></i> <a href="{{ route('user.facturas.index') }}">Volver a la lista de facturas</a></p>
                <div class="grid grid-cols-3">
                    <div class="col-span-2">
                        <p class="text-black">Creado: <span class="badge badge-primary">
                                {{ $factura->created_at }}</span></p>
                    </div>
                </div>

                <h3 class="mt-5 text-2xl font-bold text-black">{{ $factura->name }}</h3>
                <p class="mt-5">
                    <a href="{{ $factura->file_path }}" class="btn btn-primary btn-sm" download>Descargar factura  <i class="fas fa-download fa-fw"></i></a>
                </p>
            </div>

        </div>

        <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p>¿Tienes alguna duda? Puedes llamarnos al: 87123781</p>
            </div>
        </div>

    </div>




</x-app-layout>
