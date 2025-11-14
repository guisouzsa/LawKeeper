<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audiencia;

class AudienciaController extends Controller
{
    
    public function index()
    {
        $audiencias = Audiencia::all();
        return view("audiencias.index", compact("audiencias"));
    }

    
    public function create()
    {
        return view("audiencias.create");
    }

    
    public function store(Request $request)
    {
        Audiencia::create($request->only([
            'titulo',
            'tipo',
            'data_horario',
            'local',
            'descricao'
        ]));

        return redirect()->route('audiencias.index')->with('success', 'Audiência cadastrada com sucesso!');
    }

    
    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $audiencia = Audiencia::findOrFail($id);
        return view("audiencias.edit", compact("audiencia"));
    }

    
    public function update(Request $request, string $id)
    {
        $audiencia = Audiencia::findOrFail($id);

        $audiencia->update($request->only([
            'titulo',
            'tipo',
            'data_horario',
            'local',
            'descricao'
        ]));

        return redirect()->route('audiencias.index')->with('success', 'Audiência atualizada com sucesso!');
    }


    public function destroy(string $id)
    {
        $audiencia = Audiencia::findOrFail($id);
        $audiencia->delete();

        return redirect()->route('audiencias.index')->with('success', 'Audiência excluída com sucesso!');
    }
}
