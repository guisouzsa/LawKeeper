<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Processo;

class ProcessoController extends Controller
{
    public function index()
    {
        $processos = Processo::all();
        return view("processos.index", compact("processos"));
    }

    public function create()
    {
        return view("processos.create");
    }

    public function store(Request $request)
    {
        $dados = $request->only([
            'numero_processo',
            'tipo',
            'status',
            'descricao',
            'documento'
        ]);

        if ($request->hasFile('documento')) {
            $dados['documento'] = $request->file('documento')->store('documentos', 'public');
        }

        Processo::create($dados);

        return redirect()->route('processos.index')->with('success', 'Processo cadastrado com sucesso!');
    }

    public function show(string $id)
    {
        //não usar
    }

    public function edit(string $id)
    {
        $processo = Processo::findOrFail($id);
        return view("processos.edit", compact("processo"));
    }

    public function update(Request $request, string $id)
    {
        $processo = Processo::findOrFail($id);

        $dados = $request->only([
            'numero_processo',
            'tipo',
            'status',
            'descricao',
            'documento'
        ]);

        if ($request->hasFile('documento')) {
            $dados['documento'] = $request->file('documento')->store('documentos', 'public');
        }

        $processo->update($dados);

        return redirect()->route('processos.index')->with('success', 'Processo atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $processo = Processo::findOrFail($id);
        $processo->delete();

        return redirect()->route('processos.index')->with('success', 'Processo excluído com sucesso!');
    }
}
