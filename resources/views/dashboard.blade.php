<!--
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Principal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-lg font-medium">
                    ¡Bienvenido, {{ Auth::user()->Nombre }}! Has iniciado sesión correctamente.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
-->

<x-app-layout>
    <div class="min-h-screen bg-gray-100">
        <div class="flex">
            <!-- Barra de navegación -->
            <aside class="bg-gray-800 text-white w-64 flex-shrink-0">
                <div class="p-4">
                    <h1 class="text-xl font-semibold cursor-pointer" id="medicamentos-title">Medicamentos</h1>
                </div>
                <nav class="mt-4">
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 transition duration-300" id="lista-medicamentos-link">
                        Lista de Medicamentos
                    </a>
                    <!-- Añadir id al enlace de "Agregar Medicamento" -->
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 transition duration-300" id="agregar-medicamento-link">
                        Agregar Medicamento
                    </a>
                </nav>
            </aside>

            <div class="flex-1">
                <!-- Contenido general, que se muestra por defecto -->
                <main class="py-6 px-4 sm:px-6 lg:px-8">
                    <div id="vista-general-content" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 text-lg font-medium">
                            ¡Bienvenido, {{ Auth::user()->Nombre }}! Has iniciado sesión correctamente.
                        </div>
                    </div>

                    <!-- Contenido de medicamentos (lista de medicamentos) -->
                    <div id="medicamentos-content" class="hidden bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                        <div class="p-6">
                            <h3 class="font-semibold text-lg text-gray-800 mb-2">Contenido de Medicamentos</h3>
                            <p>Aquí podrás ver la lista de medicamentos y otras opciones relacionadas.</p>
                        </div>
                    </div>

                    <!-- Formulario de "Agregar Medicamento" oculto inicialmente -->
                    <div id="agregar-medicamento-form" class="hidden bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                        <div class="p-6">
                            <h3 class="font-semibold text-lg text-gray-800 mb-2">Agregar Medicamento</h3>
                            <form method="POST" action="{{ route('medicamentos.guardar') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="Nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                                    <input type="text" id="Nombre" name="Nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <div class="mb-4">
                                    <label for="Descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                                    <input type="text" id="Descripcion" name="Descripcion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <div class="mb-4">
                                    <label for="Categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
                                    <input type="text" id="Categoria" name="Categoria" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <div class="mb-4">
                                    <label for="Precio" class="block text-sm font-medium text-gray-700">Precio</label>
                                    <input type="text" id="Precio" name="Precio" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <div class="mb-4">
                                    <label for="Stock" class="block text-sm font-medium text-gray-700">Stock</label>
                                    <input type="number" id="Stock" name="Stock" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Guardar Medicamento</button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const agregarMedicamentoLink = document.getElementById('agregar-medicamento-link');
                const agregarMedicamentoForm = document.getElementById('agregar-medicamento-form');
                const vistaGeneralContent = document.getElementById('vista-general-content');
                const medicamentosContent = document.getElementById('medicamentos-content');

                // Mostrar formulario al hacer clic en "Agregar Medicamento"
                agregarMedicamentoLink.addEventListener('click', function() {
                    agregarMedicamentoForm.classList.remove('hidden');
                    vistaGeneralContent.classList.add('hidden');
                    medicamentosContent.classList.add('hidden');
                });

                // Mostrar lista de medicamentos al hacer clic en "Lista de Medicamentos"
                const listaMedicamentosLink = document.getElementById('lista-medicamentos-link');
                listaMedicamentosLink.addEventListener('click', function() {
                    medicamentosContent.classList.remove('hidden');
                    agregarMedicamentoForm.classList.add('hidden');
                    vistaGeneralContent.classList.add('hidden');
                });
            });
        </script>
    </div>
</x-app-layout>


<!--
<x-app-layout>
    <div class="min-h-screen bg-gray-100">
        <div class="flex">
       
            <aside class="bg-gray-800 text-white w-64 flex-shrink-0">
                <div class="p-4">
                    <h1 class="text-xl font-semibold cursor-pointer" id="medicamentos-title">Medicamentos</h1>
                </div>
                <nav class="mt-4">
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 transition duration-300" id="lista-medicamentos-link">
                        Lista de Medicamentos
                    </a>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 transition duration-300" id="agregar-medicamento-link">
                        Agregar Medicamento
                    </a>
                </nav>
            </aside>

            <div class="flex-1">
    
                <main class="py-6 px-4 sm:px-6 lg:px-8">
                    <div id="vista-general-content" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 text-lg font-medium">
                            ¡Bienvenido, {{ Auth::user()->Nombre }}! Has iniciado sesión correctamente.
                        </div>
                    </div>

  
                    <div id="medicamentos-content" class="hidden bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                        <div class="p-6">
                            <h3 class="font-semibold text-lg text-gray-800 mb-2">Contenido de Medicamentos</h3>
                            <p>Aquí podrás ver la lista de medicamentos y otras opciones relacionadas.</p>
                        </div>
                    </div>


                    <div id="agregar-medicamento-form" class="hidden bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                        <div class="p-6">
                            <h3 class="font-semibold text-lg text-gray-800 mb-2">Agregar Medicamento</h3>
                            <form method="POST" action="{{ route('medicamentos.guardar') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="Nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                                    <input type="text" id="Nombre" name="Nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <div class="mb-4">
                                    <label for="Descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                                    <input type="text" id="Descripcion" name="Descripcion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <div class="mb-4">
                                    <label for="Categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
                                    <input type="text" id="Categoria" name="Categoria" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <div class="mb-4">
                                    <label for="Precio" class="block text-sm font-medium text-gray-700">Precio</label>
                                    <input type="text" id="Precio" name="Precio" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <div class="mb-4">
                                    <label for="Stock" class="block text-sm font-medium text-gray-700">Stock</label>
                                    <input type="number" id="Stock" name="Stock" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Guardar Medicamento</button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const agregarMedicamentoLink = document.getElementById('agregar-medicamento-link');
                const agregarMedicamentoForm = document.getElementById('agregar-medicamento-form');
                const vistaGeneralContent = document.getElementById('vista-general-content');
                const medicamentosContent = document.getElementById('medicamentos-content');


                agregarMedicamentoLink.addEventListener('click', function() {
                    agregarMedicamentoForm.classList.remove('hidden');
                    vistaGeneralContent.classList.add('hidden');
                    medicamentosContent.classList.add('hidden');
                });

   
                const listaMedicamentosLink = document.getElementById('lista-medicamentos-link');
                listaMedicamentosLink.addEventListener('click', function() {
                    medicamentosContent.classList.remove('hidden');
                    agregarMedicamentoForm.classList.add('hidden');
                    vistaGeneralContent.classList.add('hidden');
                });
            });
        </script>
    </div>
</x-app-layout>
-->