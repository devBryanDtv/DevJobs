<!-- resources/views/empresas/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Empresa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold text-center my-10">Actualizar Empresa</h1>

                    <div class="md:flex md:justify-center p-5">
                        <div class="container mx-auto px-4 py-6">
                            <form action="{{ route('empresas.update', $empresa->id) }}" method="POST" class="space-y-6">
                                @csrf
                                @method('PUT')

                                <div>
                                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                                    <input 
                                        type="text" 
                                        name="nombre" 
                                        placeholder="Escribe el nombre de tu empresa"
                                        id="nombre" 
                                        class="mt-1 block w-full bg-gray-900 text-white placeholder-gray-400 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" 
                                        value="{{ $empresa->nombre }}" 
                                        required 
                                    >
                                    @error('nombre')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                
                                <div>
                                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                                    <textarea 
                                        name="descripcion" 
                                        placeholder="Escribe la descripción de tu empresa"
                                        id="descripcion" 
                                        class="mt-1 block w-full bg-gray-900 text-white placeholder-gray-400 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" 
                                        rows="4"
                                    >{{ $empresa->descripcion }}</textarea>
                                    @error('descripcion')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                
                                <div>
                                    <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                                    <input 
                                        type="text" 
                                        name="direccion" 
                                        placeholder="Escribe la dirección de tu empresa"
                                        id="direccion" 
                                        class="mt-1 block w-full bg-gray-900 text-white placeholder-gray-400 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" 
                                        value="{{ $empresa->direccion }}"
                                    >
                                    @error('direccion')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                
                                <div>
                                    <label for="sitio_web" class="block text-sm font-medium text-gray-700">Sitio Web</label>
                                    <input 
                                        type="url" 
                                        name="sitio_web" 
                                        placeholder="Ingresa la dirección de tu sitio web"
                                        id="sitio_web" 
                                        class="mt-1 block w-full bg-gray-900 text-white placeholder-gray-400 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                        value="{{ $empresa->sitio_web }}"
                                    >
                                    @error('sitio_web')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                
                                <x-primary-button class="mt-6">
                                    Actualizar Empresa
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
