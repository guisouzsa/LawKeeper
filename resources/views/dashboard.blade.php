<x-app-layout>
    <x-slot name="header">
        <div class="text-center">
            <h2 class="font-semibold text-2xl text-blue-100 leading-tight">
                Sistema Jurídico de Gestão - (SJG)
            </h2>
            <p class="text-blue-300 mt-2">Organize sua rotina jurídica com eficiência</p>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <a href="{{ route('clientes.index') }}" class="group relative block p-6 bg-blue-800 rounded-xl shadow-lg hover:shadow-xl hover:bg-blue-700 transition duration-300">
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-blue-600 p-3 rounded-full text-white group-hover:bg-blue-500 transition">
                            👤
                        </div>
                    </div>
                    <h3 class="text-white text-lg font-semibold text-center">Clientes</h3>
                </a>

                <a href="{{ route('processos.index') }}" class="group relative block p-6 bg-blue-800 rounded-xl shadow-lg hover:shadow-xl hover:bg-blue-700 transition duration-300">
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-blue-600 p-3 rounded-full text-white group-hover:bg-blue-500 transition">
                            📁
                        </div>
                    </div>
                    <h3 class="text-white text-lg font-semibold text-center">Processos</h3>
                </a>

                <a href="{{ route('audiencias.index') }}" class="group relative block p-6 bg-blue-800 rounded-xl shadow-lg hover:shadow-xl hover:bg-blue-700 transition duration-300">
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-blue-600 p-3 rounded-full text-white group-hover:bg-blue-500 transition">
                            📝
                        </div>
                    </div>
                    <h3 class="text-white text-lg font-semibold text-center">Audiências</h3>
                </a>

                <a href="#" class="group relative block p-6 bg-blue-800 rounded-xl shadow-lg hover:shadow-xl hover:bg-blue-700 transition duration-300">
                    <div class="flex items-center justify-center mb-4">
                        <div class="bg-blue-600 p-3 rounded-full text-white group-hover:bg-blue-500 transition">
                            📌
                        </div>
                    </div>
                    <h3 class="text-white text-lg font-semibold text-center">Tarefas</h3>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
