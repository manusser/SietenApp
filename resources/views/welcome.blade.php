<x-app-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 lg:rounded-lg">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="hero max-h-80" style="background-image: url(https://placeimg.com/1000/800/arch);">
                    <div class="hero-overlay bg-opacity-60"></div>
                    <div class="hero-content text-center text-neutral-content">
                        <div class="max-w-md">
                            <h1 class="mb-5 text-5xl font-bold text-white">Bienvenido {{ auth()->user()->name }}</h1>
                            <p class="mb-5 text-white">Gracias a esta aplicación, podrás controlar todo lo relacionado a tu taller de confianza. Podrás ver: facturas, presupuestos, tus citas, notificaciones importantes...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p class="text-black">Para empezar, toca el botón que tienes en la esquina superior izquierda y elige lo que deseas ver.</p>
            </div>
        </div>
    </div>
</x-app-layout>
