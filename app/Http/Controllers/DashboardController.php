<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Processo;
use App\Models\Audiencia;
use App\Models\Tarefa;

class DashboardController extends Controller
{
    public function index()
    {
       
        $totalClientes = Cliente::count();

        $totalProcessos = Processo::count();

        $totalAudiencias = Audiencia::count();

        $totalTarefas = Tarefa::count();

        return view('dashboard', compact(
            'totalClientes',
            'totalProcessos',
            'totalAudiencias',
            'totalTarefas'
        ));
    }
}
