<?php

namespace App\Http\Controllers;
use App\Models\Empresa;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all(); // o cualquier filtro que necesites
        return view('empresas.index', compact('empresas'));

    }

    public function create()
    {
        return view('empresas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'direccion' => 'nullable|string|max:255',
            'sitio_web' => 'nullable|url|max:255',
        ]);

        Empresa::create($request->all());

        return redirect()->route('empresas.index')->with('success', 'Empresa creada exitosamente.');
    }

    public function show(Empresa $empresa)
    {
        return view('empresas.show', compact('empresa'));
    }

    public function edit(Empresa $empresa)
    {
        return view('empresas.edit', compact('empresa'));
    }

    public function update(Request $request, Empresa $empresa)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'direccion' => 'nullable|string|max:255',
            'sitio_web' => 'nullable|url|max:255',
        ]);

        $empresa->update($request->all());

        return redirect()->route('empresas.index')->with('success', 'Empresa actualizada exitosamente.');
    }

    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        $empresa->estatus = 'inactivo'; // o el valor que prefieras para indicar el borrado lógico
        $empresa->save();

        return redirect()->route('empresas.index')->with('success', 'Empresa desactivada correctamente');
    }
}