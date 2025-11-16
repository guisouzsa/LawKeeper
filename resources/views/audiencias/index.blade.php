@extends('layouts.template_style')

@section('title', 'Lista de Audiências - SJG')
@section('breadcrumb', 'Audiências')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-[#003262]">Audiências</h2>
        <a href="{{ route('audiencias.create') }}" 
           class="bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-md hover:shadow-xl">
            Nova Audiência
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-[#9EB9D4]/30">
            <thead class="bg-gradient-to-r from-[#F0F8FF] to-white">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Processo</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Título</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Tipo</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Data e Horário</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Local</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Descrição</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-[#003262] uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-[#9EB9D4]/20">
                @if(count($audiencias) > 0)
                    @foreach($audiencias as $audiencia)
                        <tr class="hover:bg-[#F0F8FF] transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#003262]">{{ $audiencia->processo->numero_processo }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $audiencia->titulo }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $audiencia->tipo }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $audiencia->data_horario }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $audiencia->local }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $audiencia->descricao }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-3">
                                <a href="{{ route('audiencias.edit', $audiencia->id) }}" class="text-[#6699CC] hover:text-[#20729E] font-semibold transition-colors duration-200">
                                    Editar
                                </a>
                                <form action="{{ route('audiencias.destroy', $audiencia->id) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir esta audiência?');">
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
                        <td colspan="7" class="px-6 py-16 text-center">
                            <div class="flex flex-col items-center space-y-4">
                                <p class="text-lg font-semibold text-[#6699CC]">Nenhuma audiência cadastrada</p>
                                <p class="text-sm text-gray-500 mt-1">Adicione audiências para começar a gerenciar</p>
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
