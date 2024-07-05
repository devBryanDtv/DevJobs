<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Perfil') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@if (session('status') === 'profile-updated')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                text: 'Tu perfil ha sido actualizado exitosamente.',
                icon: 'success',
                position:'top',
                confirmButtonText: 'OK',
                showConfirmButton:false,
                timer:1000,
            });
        });
    </script>
@elseif (session('status') === 'no-changes')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                //title: 'Información Actualizada',
                text: 'No se detectaron nuevos cambios en tu perfil.',
                position:'top',
                icon: 'info',
                confirmButtonText: 'OK',
                showConfirmButton:false,
                timer:1000,
                customClass: {
                    popup: 'my-swal-popup', // Clase CSS personalizada para el popup
                    content: 'my-swal-content' // Clase CSS personalizada para el contenido
                },
                heightAuto: false, // Desactivar la altura automática para controlar el tamaño
                height: '450px', // Altura automática para adaptarse al contenido
                padding: '2rem' // Añadir relleno adicional si es necesario
            });
        });
    </script>
@endif
