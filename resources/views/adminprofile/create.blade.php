<x-app-layout>
    <form method="POST" action="{{ route('adminprofile.store') }}" novalidate class="max-w-md mx-auto">
        @csrf

        <!-- Name -->
         <br><br>
        <div class="mb-4">
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mb-4">
            <x-input-label for="role" :value="__('¿Qué tipo de cuenta deseas en DevJobs?')" />
            <x-input-error :messages="$errors->get('role')" class="mt-2" />

            <select 
                name="rol" 
                id="role" 
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
            >
                <option value="">-- Selecciona un Rol --</option>
                <option value="1">Developer - Obtener Empleo</option>
                <option value="2">Reclutar - Publicar Empleos</option>
            </select>
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Repetir Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button class="w-full">
            {{ __('Crear Cuenta') }}
        </x-primary-button>
    </form>
</x-app-layout>
