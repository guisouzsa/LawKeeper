<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-[#003262] to-[#2072AF] py-8 px-6 rounded-lg shadow-lg">
            <div class="max-w-7xl mx-auto">
                <h2 class="font-bold text-3xl text-[#F0F8FF] leading-tight tracking-tight">
                    Sistema Jurídico de Gestão
                </h2>
                <p class="text-[#9EB9D4] mt-2 text-sm font-light">Organize sua rotina jurídica com eficiência e profissionalismo</p>
            </div>
        </div>
    </x-slot>

    <div class="py-8 bg-gradient-to-br from-[#F0F8FF] via-[#9EB9D4]/10 to-[#6699CC]/20 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Cards de Estatísticas -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Card Clientes -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-[#2072AF]">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-[#003262]/60 text-sm font-medium uppercase tracking-wide">Total Clientes</p>
                            <p class="text-3xl font-bold text-[#003262] mt-2">{{ $totalClientes ?? '0' }}</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#2072AF] to-[#6699CC] p-4 rounded-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card Processos -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-[#6699CC]">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-[#003262]/60 text-sm font-medium uppercase tracking-wide">Processos Ativos</p>
                            <p class="text-3xl font-bold text-[#003262] mt-2">{{ $totalProcessos ?? '0' }}</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#6699CC] to-[#7BAFD4] p-4 rounded-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card Audiências -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-[#7BAFD4]">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-[#003262]/60 text-sm font-medium uppercase tracking-wide">Próximas Audiências</p>
                            <p class="text-3xl font-bold text-[#003262] mt-2">{{ $totalAudiencias ?? '0' }}</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#7BAFD4] to-[#9EB9D4] p-4 rounded-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card Tarefas -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-[#9EB9D4]">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-[#003262]/60 text-sm font-medium uppercase tracking-wide">Tarefas Pendentes</p>
                            <p class="text-3xl font-bold text-[#003262] mt-2">{{ $totalTarefas ?? '0' }}</p>
                        </div>
                        <div class="bg-gradient-to-br from-[#9EB9D4] to-[#2072AF] p-4 rounded-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Módulos Principais -->
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-[#003262] mb-6">Módulos do Sistema</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card Clientes -->
                <a href="{{ route('clientes.index') }}" class="group relative overflow-hidden bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#2072AF]/10 to-[#6699CC]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center mb-6">
                            <div class="bg-gradient-to-br from-[#2072AF] to-[#6699CC] p-5 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-[#003262] text-xl font-bold text-center mb-2">Clientes</h3>
                        <p class="text-[#003262]/60 text-sm text-center font-light">Gerencie seus clientes e contatos</p>
                    </div>
                </a>

                <!-- Card Processos -->
                <a href="{{ route('processos.index') }}" class="group relative overflow-hidden bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#6699CC]/10 to-[#7BAFD4]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center mb-6">
                            <div class="bg-gradient-to-br from-[#6699CC] to-[#7BAFD4] p-5 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-[#003262] text-xl font-bold text-center mb-2">Processos</h3>
                        <p class="text-[#003262]/60 text-sm text-center font-light">Acompanhe processos jurídicos</p>
                    </div>
                </a>

                <!-- Card Audiências -->
                <a href="{{ route('audiencias.index') }}" class="group relative overflow-hidden bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#7BAFD4]/10 to-[#9EB9D4]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center mb-6">
                            <div class="bg-gradient-to-br from-[#7BAFD4] to-[#9EB9D4] p-5 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-[#003262] text-xl font-bold text-center mb-2">Audiências</h3>
                        <p class="text-[#003262]/60 text-sm text-center font-light">Organize suas audiências</p>
                    </div>
                </a>

                <!-- Card Tarefas -->
                <a href="{{ route('tarefas.index') }}" class="group relative overflow-hidden bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#9EB9D4]/10 to-[#2072AF]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative p-8">
                        <div class="flex items-center justify-center mb-6">
                            <div class="bg-gradient-to-br from-[#9EB9D4] to-[#2072AF] p-5 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-[#003262] text-xl font-bold text-center mb-2">Tarefas</h3>
                        <p class="text-[#003262]/60 text-sm text-center font-light">Controle prazos e atividades</p>
                    </div>
                </a>
            </div>

            <!-- Seção de Contratos (opcional) -->
            <div class="mt-8">
                <a href="#" class="block bg-gradient-to-r from-[#003262] to-[#2072AF] rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 group">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-6">
                            <div class="bg-white/20 backdrop-blur-sm p-4 rounded-xl group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white text-2xl font-bold mb-1">Contratos</h3>
                                <p class="text-[#9EB9D4] text-sm font-light">Gerencie contratos e documentos jurídicos</p>
                            </div>
                        </div>
                        <svg class="w-8 h-8 text-white group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>