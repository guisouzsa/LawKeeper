@extends('layouts.template_style')

@section('title', 'Lista de Processos - SJG')
@section('breadcrumb', 'Processos')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30 flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold text-[#003262]">Processos</h2>
            <p class="text-sm mt-1 text-[#6699CC]">Gerencie os processos do escritório</p>
        </div>
        <a href="{{ route('processos.create') }}" 
           class="bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-md hover:shadow-xl flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            <span>Novo Processo</span>
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full mt-4 border border-[#9EB9D4]/30">
            <thead class="bg-[#F0F8FF]">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-[#003262] border-b border-[#9EB9D4]/30">Cliente</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-[#003262] border-b border-[#9EB9D4]/30">Número</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-[#003262] border-b border-[#9EB9D4]/30">Tipo</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-[#003262] border-b border-[#9EB9D4]/30">Status</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-[#003262] border-b border-[#9EB9D4]/30">Descrição</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-[#003262] border-b border-[#9EB9D4]/30">Documento</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-[#003262] border-b border-[#9EB9D4]/30">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-[#9EB9D4]/20">
                @if(count($processos) > 0)
                    @foreach($processos as $processo)
                        <tr class="hover:bg-[#F0F8FF] transition-colors duration-150">
                            <td class="px-4 py-3 text-sm text-[#003262]">{{ $processo->cliente->nomeCompleto }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $processo->numero_processo }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $processo->tipo }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $processo->status }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $processo->descricao }}</td>
                            <td class="px-4 py-3 text-sm">
                                @if($processo->documento)
                                    <a href="{{ asset('storage/' . $processo->documento) }}" target="_blank" class="text-[#20729E] hover:underline">Ver Documento</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm flex items-center space-x-2">
                                <a href="{{ route('processos.edit', $processo->id) }}" class="text-[#6699CC] hover:text-[#20729E] font-semibold transition-colors duration-200">Editar</a>
                                <form action="{{ route('processos.destroy', $processo->id) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir este processo?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-semibold transition-colors duration-200">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7" class="px-4 py-12 text-center text-[#6699CC] font-semibold">Nenhum processo cadastrado</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
