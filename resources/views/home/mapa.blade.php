<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mapa del Sitio') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">

            <!-- Mapa conceptual -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Sección: Público -->
                <div class="flex flex-col items-center space-y-4 bg-gray-100 dark:bg-gray-700 p-4 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 dark:text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 00-.707.293l-7 7a1 1 0 000 1.414l7 7a1 1 0 001.414-1.414L4.414 11H17a1 1 0 100-2H4.414l4.293-4.293A1 1 0 0010 3z"/>
                        </svg>
                        <h2 class="text-lg font-semibold text-blue-600 dark:text-blue-400">Público</h2>
                    </div>
                    <ul class="ml-4 space-y-2">
                        <li class="flex items-center">
                            <a href="{{ route('welcome') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Inicio</a>
                        </li>
                        <li class="flex items-center">
                            <a href="{{ route('login') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Iniciar Sesión</a>
                        </li>
                        <li class="flex items-center">
                            <a href="{{ route('register') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Crear Cuenta</a>
                        </li>
                    </ul>
                    <img src="https://cdn-icons-png.freepik.com/512/52/52349.png" alt="Icono Público" class="h-12 rounded-lg mt-4">
                </div>

                <!-- Sección: Privado (Autenticado) -->
                @auth
                <div class="flex flex-col items-center space-y-4 bg-gray-100 dark:bg-gray-700 p-4 rounded-lg hover:shadow-lg transition duration-300">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-800 dark:text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 00-.707.293l-7 7a1 1 0 000 1.414l7 7a1 1 0 001.414-1.414L4.414 11H17a1 1 0 100-2H4.414l4.293-4.293A1 1 0 0010 3z"/>
                        </svg>
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Privado (Autenticado)</h2>
                    </div>
                    <ul class="ml-4 space-y-2">
                        <li class="flex items-center">
                            <a href="{{ route('home.index') }}" class="text-gray-800 dark:text-gray-200 hover:underline">Dashboard</a>
                        </li>
                        <li class="flex items-center">
                            <a href="{{ route('vacantes.index') }}" class="text-gray-800 dark:text-gray-200 hover:underline">Mis Vacantes</a>
                        </li>
                        <li class="flex items-center">
                            <a href="{{ route('vacantes.create') }}" class="text-gray-800 dark:text-gray-200 hover:underline">Crear Vacante</a>
                        </li>
                        <li class="flex items-center">
                            <a href="{{ route('empresas.index') }}" class="text-gray-800 dark:text-gray-200 hover:underline">Mis Empresas</a>
                        </li>
                        <li class="flex items-center">
                            <a href="{{ route('adminprofile.index') }}" class="text-gray-800 dark:text-gray-200 hover:underline">Admin Perfiles</a>
                        </li>
                    </ul>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxUj1loM7klDsnRlZwiy-u1W-bLdY0x_dl3w&s" alt="Icono Privado" class="h-12 rounded-lg mt-4">
                </div>
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>
