<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 lg:rounded-lg">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="hero max-h-80" style="background-image: url(https://placeimg.com/1000/800/arch);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold text-white">Bienvenido {{ auth()->user()->name }}</h1>
                        <p class="mb-5 text-white">Gracias a esta aplicación, podrás controlar todo lo relacionado a tu
                            taller de confianza. Podrás ver: facturas, presupuestos, tus citas, notificaciones
                            importantes...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert shadow-lg mt-5 mb-5">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="stroke-current flex-shrink-0 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Si tiene alguna duda sobre el funcionamiento de la aplicación, no dude en contactarnos.</span>
            </div>
        </div>
    </div>

    <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- component -->
        <div class="max-w-full mx-4 py-6 sm:mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl">Estadísticas generales</h1>
            <div class="sm:flex sm:space-x-4">
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                    <div class="bg-white p-5">
                        <div class="sm:flex sm:items-start">
                            <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                <h3 class="text-sm leading-6 font-medium text-gray-400">Presupuestos</h3>
                                <p class="text-3xl font-bold text-black">{{$presupuestos->count()}}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                    <div class="bg-white p-5">
                        <div class="sm:flex sm:items-start">
                            <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                <h3 class="text-sm leading-6 font-medium text-gray-400">Facturas</h3>
                                <p class="text-3xl font-bold text-black">{{$facturas->count()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                    <div class="bg-white p-5">
                        <div class="sm:flex sm:items-start">
                            <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                <h3 class="text-sm leading-6 font-medium text-gray-400">Citas</h3>
                                <p class="text-3xl font-bold text-black">??</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                    <div class="bg-white p-5">
                        <div class="sm:flex sm:items-start">
                            <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                <h3 class="text-sm leading-6 font-medium text-gray-400">Notificaciones</h3>
                                <p class="text-3xl font-bold text-black">??</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
