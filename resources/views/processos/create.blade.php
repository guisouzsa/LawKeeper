@extends('layouts.template_style')

@section('title', 'Cadastro de Processo - SJG')
@section('breadcrumb', 'Processos / Novo')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-[#003262]">Cadastrar Novo Processo</h2>
                <p class="text-sm mt-1 text-[#6699CC]">Preencha os dados do processo</p>
            </div>
            <a href="{{ route('processos.index') }}" 
               class="text-sm font-semibold text-[#6699CC] hover:text-[#20729E] transition-colors duration-200 flex items-center space-x-1">
                Voltar
            </a>
        </div>
    </div>

    <form action="{{ route('processos.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label for="cliente_id" class="block text-sm font-bold text-[#003262] mb-2">Cliente *</label>
                <select name="cliente_id" id="cliente_id" required
                        class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
                    <option value="">Selecione um cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nomeCompleto }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="numero_processo" class="block text-sm font-bold text-[#003262] mb-2">Número do Processo *</label>
                <input type="text" name="numero_processo" id="numero_processo" required
                       class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
            </div>

            <div>
                <label for="tipo" class="block text-sm font-bold text-[#003262] mb-2">Tipo *</label>
                <select name="tipo" id="tipo" required
                        class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
                    <option value="">-- Selecione --</option>
                    <option value="Civil">Processo Civil</option>
                    <option value="Penal">Processo Penal</option>
                    <option value="Trabalhista">Processo Trabalhista</option>
                    <option value="Administrativo">Processo Administrativo</option>
                    <option value="Eleitoral">Processo Eleitoral</option>
                    <option value="Constitucional">Processo Constitucional</option>
                </select>
            </div>

            <div>
                <label for="status" class="block text-sm font-bold text-[#003262] mb-2">Status *</label>
                <select name="status" id="status" required
                        class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
                    <option value="">-- Selecione --</option>
                    <option value="Novo">Novo</option>
                    <option value="Pronto">Pronto</option>
                    <option value="Em execução">Em execução</option>
                    <option value="Espera">Espera (Bloqueado)</option>
                    <option value="Terminado">Terminado</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label for="descricao" class="block text-sm font-bold text-[#003262] mb-2">Descrição</label>
                <textarea name="descricao" id="descricao" rows="3"
                          class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none resize-none"></textarea>
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-bold text-[#003262] mb-2">Documento</label>
                <div class="flex items-center space-x-4">
                    <label for="documento"
                           class="cursor-pointer px-4 py-2 bg-gradient-to-r from-[#003262] to-[#20729E] text-white rounded-lg font-semibold hover:opacity-90 transition duration-200">
                        Escolher Arquivo
                    </label>
                    <span id="file-name" class="text-gray-600 text-sm">Nenhum arquivo selecionado</span>
                </div>
                <input type="file" name="documento" id="documento" class="hidden" 
                       onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'Nenhum arquivo selecionado'">
            </div>
        </div>

        <div class="flex items-center justify-end space-x-4 mt-8 pt-6 border-t border-[#9EB9D4]/30">
            <a href="{{ route('processos.index') }}" 
               class="px-6 py-3 rounded-lg font-semibold text-[#6699CC] border-2 border-[#9EB9D4] hover:bg-[#F0F8FF] transition-all duration-200">
                Cancelar
            </a>
            <button type="submit"
                    class="px-6 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] transition-all duration-300 shadow-md hover:shadow-xl">
                Cadastrar Processo
            </button>
        </div>
    </form>
</div>
@endsection
