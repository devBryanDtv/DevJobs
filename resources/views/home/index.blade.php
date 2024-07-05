<x-app-layout>

<div id="carrusel" class="carrusel-home">
        @livewire('carrusel-vacantes')
    </div>
    

    <div class="w-full mt-12">
    <div class="bg-gray-800 dark:bg-gray-900 rounded-lg shadow-lg p-6">
        <h1 class="text-3xl font-bold mb-6 text-center text-white">Acerca de DevJobs</h1>
        <p class="text-white dark:text-gray-300 mb-6 text-center">
            Somos DevJobs, una plataforma dedicada a facilitar la búsqueda de empleo para desarrolladores de software. Nuestro objetivo es conectar talento con oportunidades, haciendo que el proceso sea más eficiente y efectivo para ambas partes.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-700 dark:bg-gray-800 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-2 text-blue-400">Misión</h2>
                <p class="text-gray-300">
                    Nuestra misión es proporcionar una plataforma innovadora y efectiva que permita a los desarrolladores encontrar oportunidades laborales adecuadas para su perfil.
                </p>
            </div>
            <div class="bg-gray-700 dark:bg-gray-800 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-2 text-blue-400">Visión</h2>
                <p class="text-gray-300">
                    Nuestra visión es convertirnos en el principal punto de encuentro entre empresas y desarrolladores, facilitando la creación de equipos de trabajo eficientes y exitosos.
                </p>
            </div>
            <div class="bg-gray-700 dark:bg-gray-800 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-2 text-blue-400">Valores</h2>
                <ul class="list-disc ml-6 text-gray-300">
                    <li>Excelencia técnica y profesionalismo.</li>
                    <li>Innovación y creatividad.</li>
                    <li>Integridad y transparencia.</li>
                    <li>Compromiso con el éxito de nuestros clientes y candidatos.</li>
                    <li>Diversidad e inclusión.</li>
                </ul>
            </div>
            <div class="bg-gray-700 dark:bg-gray-800 p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-2 text-blue-400">Alcance</h2>
                <p class="text-gray-300">
                    Operamos globalmente, facilitando la conexión entre desarrolladores talentosos y empresas que buscan construir equipos fuertes y efectivos.
                </p>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
