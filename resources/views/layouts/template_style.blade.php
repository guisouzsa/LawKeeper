<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SJG - Sistema Jurídico')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F0F8FF] min-h-screen font-sans antialiased">
    <header class="bg-gradient-to-r from-[#003262] to-[#20729E] shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-5">
                <div class="flex items-center space-x-12">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-[#9EB9D4] rounded-lg flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-[#003262]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                            </svg>
                        </div>
                        <h1 class="text-2xl font-bold text-white tracking-wide">SJG</h1>
                    </div>
                    <nav class="hidden md:flex space-x-1">
                        <a href="{{ route('clientes.index') }}" class="px-4 py-2 text-white hover:bg-white/10 rounded-lg font-medium transition-all duration-200 text-sm">Clientes</a>
                        <a href="{{ route('processos.index') }}" class="px-4 py-2 text-white hover:bg-white/10 rounded-lg font-medium transition-all duration-200 text-sm">Processos</a>
                        <a href="{{ route('audiencias.index') }}" class="px-4 py-2 text-white hover:bg-white/10 rounded-lg font-medium transition-all duration-200 text-sm">Audiências</a>
                        <a href="{{ route('tarefas.index') }}" class="px-4 py-2 text-white hover:bg-white/10 rounded-lg font-medium transition-all duration-200 text-sm">Tarefas</a>
                    </nav>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-xs text-[#9EB9D4] font-semibold">Sistema Jurídico</p>
                        <p class="text-xs text-white/70">Gestão Advocatícia</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

   
    <div class="bg-white border-b border-[#9EB9D4]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex items-center space-x-2 text-sm">
                <svg class="w-4 h-4 text-[#6699CC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span class="text-[#9EB9D4]">/</span>
                <span class="text-[#003262] font-medium">@yield('breadcrumb', 'Dashboard')</span>
            </div>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    
</body>
</html>