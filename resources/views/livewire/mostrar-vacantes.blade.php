

<div>
    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        @forelse ($vacantes as $vacante )
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center dark:text-gray-100 dark:bg-gray-800">
                {{-- {{ __("Mis Vacantes") }} --}}
                <div class="space-y-3">
                    <a href="{{route('vacantes.show', $vacante->id)}}" class="text-xl font-bold">
                        {{ $vacante->titulo }}
                    </a>
                    <p class="text-sm font-bold text-gray-600 dark:dark:text-gray-100">{{$vacante->empresa}}</p>
                    <p class="text-sm text-gray-500 dark:dark:text-gray-100">Último día: {{ $vacante->ultimo_dia }}</p>
                </div>
                <div class="flex flex-col gap-3 mt-5 md:flex-row items-strench md:mt-0">
                    <a class="px-4 py-2 text-xs font-bold text-center text-white rounded-lg bg-slate-800 dark:bg-white dark:text-black" href="{{ route('vacantes.pdf', $vacante->id) }}">
                        PDF
                    </a>
                    <a class="px-4 py-2 text-xs font-bold text-center text-white bg-blue-800 rounded-lg dark:bg-blue dark:text-white" href="{{ route('vacantes.edit', $vacante->id) }}">
                        Editar
                    </a>
                    <button 
                    wire:click="$dispatch('eliminar', {{$vacante->id}})"
                        class="px-4 py-2 text-xs font-bold text-center text-white bg-red-600 rounded-lg dark:bg-red dark:text-white">
                        Eliminar
                  </button>

                
                </div>
            </div>
        @empty
            <p class="p-3 text-sm text-center text-gray-600">No hay vacantes que mostrar</p>
        @endforelse
    </div>
 
    <div class=" mt-10">
        {{ $vacantes->links() }}
    </div>
</div>
{{-- agregar directiva para uso de scrips personalizados --}}


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
            Livewire.on('eliminar', (vacanteId) => {
                Swal.fire({
                title: '¿Eliminar Vacante?',
                text: "una vacante eliminada no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    // eliminar la vacante desd el servidor
                    Livewire.dispatch('eliminarVacante', {vacante: vacanteId})
                    Swal.fire(
                    'Eliminado!',
                    'La vacante ha sido eliminada',
                    'success'
                    )
                }
                })
            })
    </script>
@endpush


