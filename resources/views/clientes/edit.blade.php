@extends('layouts.template_style')

@section('title', 'Atualizar Cliente - SJG')
@section('breadcrumb', 'Clientes / Editar')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4] p-6">
    <h2 class="text-2xl font-bold text-[#003262] mb-4">Atualize os dados do cliente</h2>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
        @method('PUT')

        <div class="md:col-span-2">
            <label for="nomeCompleto" class="block text-sm font-bold text-[#003262] mb-2">Nome completo</label>
            <input type="text" name="nomeCompleto" id="nomeCompleto" value="{{ $cliente->nomeCompleto }}" 
                   class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
        </div>

        <div>
            <label for="cpf_Cnpj" class="block text-sm font-bold text-[#003262] mb-2">CPF/CNPJ</label>
            <input type="text" name="cpf_Cnpj" id="cpf_Cnpj" value="{{ $cliente->cpf_Cnpj }}" 
                   class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
        </div>

        <div>
            <label for="telefone" class="block text-sm font-bold text-[#003262] mb-2">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="{{ $cliente->telefone }}" 
                   class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
        </div>

        <div class="md:col-span-2">
            <label for="email" class="block text-sm font-bold text-[#003262] mb-2">Email</label>
            <input type="email" name="email" id="email" value="{{ $cliente->email }}" 
                   class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
        </div>

        <div class="md:col-span-2">
            <label for="endereco" class="block text-sm font-bold text-[#003262] mb-2">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="{{ $cliente->endereco }}" 
                   class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all duration-200 outline-none">
        </div>

        <div class="md:col-span-2 flex justify-end space-x-4 mt-6">
            <a href="{{ route('clientes.index') }}" class="px-6 py-3 rounded-lg font-semibold text-[#6699CC] border-2 border-[#9EB9D4] hover:bg-[#F0F8FF] transition-all duration-200">
                Cancelar
            </a>
            <button type="submit" class="px-6 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] transition-all duration-300 shadow-md hover:shadow-xl">
                Atualizar Cliente
            </button>
        </div>
    </form>
</div>
@endsection
