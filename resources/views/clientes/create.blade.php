@extends('layouts.template_style')

@section('title', 'Novo Cliente - SJG')
@section('breadcrumb', 'Clientes / Novo')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-[#003262]">Cadastrar Novo Cliente</h2>
                <p class="text-sm mt-1 text-[#6699CC]">Preencha os dados do cliente</p>
            </div>
            <a href="{{ route('clientes.index') }}" 
               class="text-sm font-semibold text-[#6699CC] hover:text-[#20729E] transition-colors duration-200 flex items-center space-x-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span>Voltar</span>
            </a>
        </div>
    </div>

    <form action="{{ route('clientes.store') }}" method="POST" class="p-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label for="nomeCompleto" class="block text-sm font-bold text-[#003262] mb-2">Nome Completo <span class="text-red-500">*</span></label>
                <input type="text" name="nomeCompleto" id="nomeCompleto" required
                       class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none"
                       placeholder="Digite o nome completo do cliente">
            </div>

            <div>
                <label for="cpf_Cnpj" class="block text-sm font-bold text-[#003262] mb-2">CPF/CNPJ <span class="text-red-500">*</span></label>
                <input type="text" name="cpf_Cnpj" id="cpf_Cnpj" required
                       class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none"
                       placeholder="000.000.000-00">
            </div>

            <div>
                <label for="telefone" class="block text-sm font-bold text-[#003262] mb-2">Telefone <span class="text-red-500">*</span></label>
                <input type="text" name="telefone" id="telefone" required
                       class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none"
                       placeholder="(00) 00000-0000">
            </div>

            <div class="md:col-span-2">
                <label for="email" class="block text-sm font-bold text-[#003262] mb-2">Email <span class="text-red-500">*</span></label>
                <input type="email" name="email" id="email" required
                       class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none"
                       placeholder="cliente@exemplo.com">
            </div>

            <div class="md:col-span-2">
                <label for="endereco" class="block text-sm font-bold text-[#003262] mb-2">Endereço</label>
                <textarea name="endereco" id="endereco" rows="3"
                          class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none resize-none"
                          placeholder="Endereço completo do cliente"></textarea>
            </div>
        </div>

        <div class="flex items-center justify-end space-x-4 mt-8 pt-6 border-t border-[#9EB9D4]/30">
            <a href="{{ route('clientes.index') }}" 
               class="px-6 py-3 rounded-lg font-semibold text-[#6699CC] border-2 border-[#9EB9D4] hover:bg-[#F0F8FF] transition-all duration-200">
                Cancelar
            </a>
            <button type="submit" 
                    class="px-6 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] transition-all duration-300 shadow-md hover:shadow-xl">
                Cadastrar Cliente
            </button>
        </div>
    </form>
</div>
@endsection
