@extends('layouts.template_style')

@section('title', 'Cadastro de Tarefa - SJG')
@section('breadcrumb', 'Tarefas / Novo')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-[#003262]">Cadastrar Nova Tarefa</h2>
                <p class="text-sm mt-1 text-[#6699CC]">Preencha os dados da tarefa</p>
            </div>
            <a href="{{ route('tarefas.index') }}" class="text-sm font-semibold text-[#6699CC] hover:text-[#20729E] transition-colors duration-200 flex items-center space-x-1">
                Voltar
            </a>
        </div>
    </div>

    <form action="{{ route('tarefas.store') }}" method="POST" class="p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label for="titulo" class="block text-sm font-bold text-[#003262] mb-2">Título *</label>
                <input type="text" name="titulo" id="titulo" required
                       class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
            </div>

            <div>
                <label for="data_limite" class="block text-sm font-bold text-[#003262] mb-2">Data Limite *</label>
                <input type="date" name="data_limite" id="data_limite" required
                       class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
            </div>

            <div>
                <label for="status" class="block text-sm font-bold text-[#003262] mb-2">Status *</label>
                <select name="status" id="status" required
                        class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
                    <option value="">-- Selecione --</option>
                    <option value="Pendente">Pendente</option>
                    <option value="Concluída">Concluída</option>
                    <option value="Atrasada">Atrasada</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label for="descricao" class="block text-sm font-bold text-[#003262] mb-2">Descrição</label>
                <textarea name="descricao" id="descricao" rows="3"
                          class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none resize-none"></textarea>
            </div>
        </div>

        <div class="flex items-center justify-end space-x-4 mt-8 pt-6 border-t border-[#9EB9D4]/30">
            <a href="{{ route('tarefas.index') }}" 
               class="px-6 py-3 rounded-lg font-semibold text-[#6699CC] border-2 border-[#9EB9D4] hover:bg-[#F0F8FF] transition-all duration-200">
                Cancelar
            </a>
            <button type="submit" 
                    class="px-6 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] transition-all duration-300 shadow-md hover:shadow-xl">
                Cadastrar Tarefa
            </button>
        </div>
    </form>
</div>
@endsection
