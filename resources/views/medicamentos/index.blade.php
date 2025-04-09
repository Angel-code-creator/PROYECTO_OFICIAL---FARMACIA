@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Medicamentos</h1>

        <a href="{{ route('medicamentos.crear') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded mb-4 inline-block">
            Nuevo Medicamento
        </a>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded shadow">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="py-2 px-4 border-b">Nombre</th>
                        <th class="py-2 px-4 border-b">Descripción</th>
                        <th class="py-2 px-4 border-b">Categoría</th>
                        <th class="py-2 px-4 border-b">Precio</th>
                        <th class="py-2 px-4 border-b">Stock</th>
                        <th class="py-2 px-4 border-b">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicamentos as $medicamento)
                        <tr class="border-t">
                            <td class="py-2 px-4">{{ $medicamento->Nombre }}</td>
                            <td class="py-2 px-4">{{ $medicamento->Descripcion }}</td>
                            <td class="py-2 px-4">{{ $medicamento->Categoria }}</td>
                            <td class="py-2 px-4">{{ $medicamento->Precio }}</td>
                            <td class="py-2 px-4">{{ $medicamento->Stock }}</td>
                            <td class="py-2 px-4 flex space-x-2">
                                <a href="{{ route('medicamentos.editar', $medicamento->ID_medicamento) }}"
                                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
                                    Editar
                                </a>

                                <form action="{{ route('medicamentos.eliminar', $medicamento->ID_medicamento) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded"
                                            onclick="return confirm('¿Estás seguro de eliminar este medicamento?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection