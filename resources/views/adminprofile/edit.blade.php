<x-app-layout>
    <div class="container mx-auto mt-5 max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800 dark:text-gray-200">Editar Usuario</h1>

        <form action="{{ route('adminprofile.update', $user) }}" method="POST" class="bg-gray-800 dark:bg-gray-900 p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-300">Nombre</label>
                <input type="text" class="form-input mt-1 block w-full bg-gray-700 dark:bg-gray-800 border-gray-600 dark:border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-white" id="name" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-300">Correo Electrónico</label>
                <input type="email" class="form-input mt-1 block w-full bg-gray-700 dark:bg-gray-800 border-gray-600 dark:border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-white" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-300">Rol</label>
                <input type="text" class="form-input mt-1 block w-full bg-gray-700 dark:bg-gray-800 border-gray-600 dark:border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-white" id="role" value="{{ $user->rol }}" readonly>
            </div>
            <div class="mt-4">
            <x-input-label for="rol" :value="__('Selecciona un rol')" />
            <x-input-error :messages="$errors->get('rol')" class="mt-2 " />

            <select 
            name="rol" 
            id="rol" 
            class="rounded-md shadow-sm border-gray-300
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 
            focus:ring-opacity-50 w-full"
            >
           
            <option value="">--Selecciona--</option>
            <option value="1">Developer - Obtener Empleo</option>
            <option value="2">Reclutar - Publicar Empleos</option>

            </select>
            </div><br>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-300">Contraseña</label>
                <input type="password" class="form-input mt-1 block w-full bg-gray-700 dark:bg-gray-800 border-gray-600 dark:border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-white" id="password" name="password">
                <small class="form-text text-gray-400">Dejar en blanco si no desea cambiar la contraseña.</small>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Confirmar Contraseña</label>
                <input type="password" class="form-input mt-1 block w-full bg-gray-700 dark:bg-gray-800 border-gray-600 dark:border-gray-700 focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-white" id="password_confirmation" name="password_confirmation">
            </div>

            <x-primary-button class="mt-6">
                Actualizar
            </x-primary-button>
        </form>
    </div>
</x-app-layout>