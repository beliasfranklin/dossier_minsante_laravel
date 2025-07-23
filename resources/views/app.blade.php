<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Système DEP</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-gray-900 to-gray-800 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="text-xl font-bold text-blue-400">DEP System</div>
                <div class="flex items-center space-x-2 bg-white bg-opacity-10 px-3 py-1 rounded-xl backdrop-blur-sm">
                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                        {{ substr(Auth::user()->prenom, 0, 1) }}{{ substr(Auth::user()->nom, 0, 1) }}
                    </div>
                    <span>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 sticky top-16 h-[calc(100vh-4rem)] overflow-y-auto">
            <div class="py-6 px-4">
                <ul class="space-y-1">
                    <li>
                        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-white bg-gradient-to-r from-blue-500 to-blue-600 shadow-blue-200 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dossiers.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>Dossiers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dossiers.create') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            <span>Nouveau Dossier</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('rapports') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <span>Rapports</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('notifications') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5l-5-5h5v-5a7.5 7.5 0 01-6.71-4.08M12 2v5a7.5 7.5 0 016.71 4.08" />
                            </svg>
                            <span>Notifications</span>
                        </a>
                    </li>
                    @can('manage system')
                    <li>
                        <a href="{{ route('configuration') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Configuration</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </div>
        </aside>

        <!-- Content Area -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
