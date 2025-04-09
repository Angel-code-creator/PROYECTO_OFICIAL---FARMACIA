<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    // Mostrar todos los medicamentos
    public function index()
    {
        $medicamentos = Medicamento::where('Estado_Auditoria', '1')->get();
        return view('medicamentos.index', compact('medicamentos'));
    }

    // Mostrar el formulario para crear un medicamento
    public function crear()
    {
        return view('medicamentos.create');
    }

    // Guardar un nuevo medicamento
    public function guardar(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:150',
            'Categoria' => 'required|string|max:100',
            'Precio' => 'required|string|max:10',
            'Stock' => 'required|integer',
        ]);

        Medicamento::create($request->all());

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento creado exitosamente.');
    }

    // Mostrar el formulario para editar un medicamento
    public function editar(Medicamento $medicamento)
    {
        return view('medicamentos.edit', compact('medicamento'));
    }

    // Actualizar el medicamento
    public function actualizar(Request $request, Medicamento $medicamento)
    {
        $request->validate([
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:150',
            'Categoria' => 'required|string|max:100',
            'Precio' => 'required|string|max:10',
            'Stock' => 'required|integer',
        ]);

        $medicamento->update($request->all());

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento actualizado exitosamente.');
    }

    // Eliminar un medicamento
    public function eliminar(Medicamento $medicamento)
    {
        // Cambiar el valor de Estado_Auditoria a 0 en lugar de eliminar el medicamento
        $medicamento->Estado_Auditoria = '0';  
        $medicamento->save();
    
        // Redirigir a la lista de medicamentos con un mensaje de éxito
        return redirect()->route('medicamentos.index')->with('success', 'Medicamento eliminado visualmente.');
    }
    
}