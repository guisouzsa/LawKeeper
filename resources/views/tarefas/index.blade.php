@extends('layouts.template_style')

@section('title', 'Lista de Tarefas - SJG')
@section('breadcrumb', 'Tarefas')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-[#003262]">Tarefas</h2>
        <a href="{{ route('tarefas.create') }}" 
           class="bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-md hover:shadow-xl">
            Nova Tarefa
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-[#9EB9D4]/30">
            <thead class="bg-gradient-to-r from-[#F0F8FF] to-white">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Título</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Data Limite</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Descrição</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-[#9EB9D4]/20">
                @if(count($tarefas) > 0)
                    @foreach($tarefas as $tarefa)
                        <tr class="hover:bg-[#F0F8FF] transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#003262]">{{ $tarefa->titulo }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $tarefa->data_limite }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $tarefa->status }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $tarefa->descricao }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-3">
                                <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="text-[#6699CC] hover:text-[#20729E] font-semibold transition-colors duration-200">
                                    Editar
                                </a>
                                <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-semibold transition-colors duration-200">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="px-6 py-16 text-center">
                            <div class="flex flex-col items-center space-y-4">
                                <p class="text-lg font-semibold text-[#6699CC]">Nenhuma tarefa cadastrada</p>
                                <p class="text-sm text-gray-500 mt-1">Adicione tarefas para começar a gerenciar</p>
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
