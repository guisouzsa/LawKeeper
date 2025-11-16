@extends('layouts.template_style')

@section('title', 'Nova Audiência - SJG')
@section('breadcrumb', 'Audiências / Novo')

@section('content')
<div class="bg-white rounded-xl shadow-lg border-l-4 border-[#7BAFD4]">
    <div class="px-6 py-5 border-b border-[#9EB9D4]/30 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-[#003262]">Cadastrar Nova Audiência</h2>
        <a href="{{ route('audiencias.index') }}" class="text-sm font-semibold text-[#6699CC] hover:text-[#20729E] transition-colors duration-200">
            Voltar
        </a>
    </div>

    <form action="{{ route('audiencias.store') }}" method="POST" class="p-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="processo_id" class="block text-sm font-bold text-[#003262] mb-2">Processo <span class="text-red-500">*</span></label>
                <select name="processo_id" id="processo_id" required class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all outline-none">
                    <option value="">Selecione um processo</option>
                    @foreach($processos as $processo)
                        <option value="{{ $processo->id }}">{{ $processo->numero_processo }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="titulo" class="block text-sm font-bold text-[#003262] mb-2">Título <span class="text-red-500">*</span></label>
                <input type="text" name="titulo" id="titulo" required class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all outline-none" placeholder="Digite o título da audiência">
            </div>

            <div>
                <label for="tipo" class="block text-sm font-bold text-[#003262] mb-2">Tipo <span class="text-red-500">*</span></label>
                <select name="tipo" id="tipo" required class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all outline-none">
                    <option value="Audiência de conciliação e mediação">Audiência de conciliação e mediação</option>
                    <option value="Audiência de instrução e julgamento">Audiência de instrução e julgamento</option>
                    <option value="Audiência de justificação">Audiência de justificação</option>
                    <option value="Audiência de custódia">Audiência de custódia</option>
                    <option value="Audiência una">Audiência una</option>
                    <option value="Audiência de razões finais">Audiência de razões finais</option>
                </select>
            </div>

            <div>
                <label for="data_horario" class="block text-sm font-bold text-[#003262] mb-2">Data e horário <span class="text-red-500">*</span></label>
                <input type="datetime-local" name="data_horario" id="data_horario" required class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all outline-none">
            </div>

            <div>
                <label for="local" class="block text-sm font-bold text-[#003262] mb-2">Local <span class="text-red-500">*</span></label>
                <input type="text" name="local" id="local" required class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all outline-none" placeholder="Digite o local da audiência">
            </div>

            <div class="md:col-span-2">
                <label for="descricao" class="block text-sm font-bold text-[#003262] mb-2">Descrição</label>
                <textarea name="descricao" id="descricao" rows="3" class="w-full px-4 py-3 rounded-lg border-2 border-[#9EB9D4] focus:border-[#20729E] focus:ring-2 focus:ring-[#20729E]/20 transition-all outline-none resize-none" placeholder="Descrição da audiência"></textarea>
            </div>
        </div>

        <div class="flex justify-end space-x-4 mt-6">
            <a href="{{ route('audiencias.index') }}" class="px-6 py-3 rounded-lg font-semibold text-[#6699CC] border-2 border-[#9EB9D4] hover:bg-[#F0F8FF] transition-all duration-200">Cancelar</a>
            <button type="submit" class="px-6 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-[#20729E] to-[#003262] hover:from-[#003262] hover:to-[#20729E] transition-all duration-300 shadow-md hover:shadow-xl">Cadastrar Audiência</button>
        </div>
    </form>
</div>
@endsection
