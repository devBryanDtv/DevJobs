<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Perfiles') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold mb-6 text-white dark:text-gray-200 leading-tight">Usuarios</h1>

        <a href="{{ route('adminprofile.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-6">
            Crear perfil
        </a>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-gray-800 dark:bg-gray-900 shadow-lg rounded-lg overflow-hidden">
            <ul class="divide-y divide-gray-700 dark:divide-gray-800">
                @foreach($users as $user)
                    <li class="px-4 py-5 sm:px-6 border-b border-white">
                        <div class="flex items-center justify-between space-x-4">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-medium text-white dark:text-gray-200 truncate">{{ $user->name }}</h3>
                                <p class="text-sm text-gray-400 dark:text-gray-400">{{ $user->email }}</p>
                            </div>
                            <div class="flex space-x-2">
                                <a href="{{ route('adminprofile.show', $user) }}" class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-800 hover:bg-blue-200 dark:hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 border-white">
                                    Ver
                                </a>
                                <a href="{{ route('adminprofile.edit', $user) }}" class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-yellow-600 dark:text-yellow-400 bg-yellow-100 dark:bg-yellow-800 hover:bg-yellow-200 dark:hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 border-white">
                                    Editar
                                </a>
                                <form action="{{ route('adminprofile.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 text-xs font-bold text-center text-white bg-red-600 rounded-lg dark:bg-red dark:text-white">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#usersTable').DataTable();
        });
    </script>
    @endpush

</x-app-layout>
