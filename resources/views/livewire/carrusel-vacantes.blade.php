

<div class="container mx-auto px-4 py-10">
    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="relative w-full" x-data="{ currentSlide: 0, slides: {{ $vacantes->count() }} }">
        <div class="relative h-96 overflow-hidden rounded-lg">
            @foreach ($vacantes as $index => $vacante)
                <div class="absolute inset-0 transition-all duration-500 transform"
                    :class="{ '-translate-x-full': currentSlide !== {{ $index }}, 'translate-x-0': currentSlide === {{ $index }}, 'translate-x-full': currentSlide < {{ $index }} }">
                    <div class="flex justify-center items-center h-96 bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <div class="text-center p-6">
                            <img src="{{ Storage::url('public/vacantes/' . $vacante->imagen) }}" alt="{{ $vacante->titulo }}" class="h-64 w-64 object-cover mx-auto rounded-full mb-4">
                            <h5 class="text-3xl font-bold mb-2 text-white">{{ $vacante->titulo }}</h5>
                            <p class="text-white dark:text-gray-300">{{ $vacante->descripcion }}</p>
                            <a href="{{ route('vacantes.show', $vacante->id) }}" class="mt-4 inline-block text-blue-400 dark:text-blue-400 hover:underline">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button @click="currentSlide = (currentSlide - 1 + slides) % slides"
            class="absolute top-1/2 left-0 transform -translate-y-1/2 px-4 py-2 bg-blue-600 text-white rounded-full">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button @click="currentSlide = (currentSlide + 1) % slides"
            class="absolute top-1/2 right-0 transform -translate-y-1/2 px-4 py-2 bg-blue-600 text-white rounded-full">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</div>