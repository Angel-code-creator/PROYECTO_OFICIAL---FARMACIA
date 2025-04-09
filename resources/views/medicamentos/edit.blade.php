@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Editar Medicamento</h1>

        <form action="{{ route('medicamentos.actualizar', $medicamento->ID_medicamento) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="Nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" value="{{ $medicamento->Nombre }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="Descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <input type="text" name="Descripcion" id="Descripcion" value="{{ $medicamento->Descripcion }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="Categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
                <input type="text" name="Categoria" id="Categoria" value="{{ $medicamento->Categoria }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="Precio" class="block text-sm font-medium text-gray-700">Precio</label>
                <input type="text" name="Precio" id="Precio" value="{{ $medicamento->Precio }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="Stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input type="number" name="Stock" id="Stock" value="{{ $medicamento->Stock }}" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded shadow">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
@endsection
