@extends('layouts.app')

@section('title', 'Tableau de Bord')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-900">Tableau de Bord Avancé</h1>
    <p class="text-gray-600 mt-1">Vue d'ensemble du système DEP avec indicateurs de performance</p>
</div>

<!-- Alertes -->
<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-lg mb-6 flex items-start">
    <div class="text-xl mr-3">⚠️</div>
    <div class="flex-1">
        <div class="font-bold">5 dossiers en retard de traitement</div>
        <div class="text-sm">Certains dossiers dépassent le délai maximal de traitement. Veuillez prendre les mesures nécessaires.</div>
    </div>
    <button class="bg-white bg-opacity-70 px-3 py-1 rounded text-sm">Voir</button>
</div>

<!-- Statistiques WhatsApp -->
<div class="bg-green-50 border border-green-200 rounded-xl p-6 mb-6 animate-slide-up">
    <div class="flex items-center mb-4">
        <div class="text-2xl text-green-500 mr-3">📱</div>
        <h3 class="text-xl font-semibold flex-1">Statistiques WhatsApp</h3>
        <button class="bg-white px-4 py-2 rounded-lg text-green-500 text-sm font-medium">Voir détails</button>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded-lg shadow-sm text-center">
            <div class="text-2xl font-bold text-green-500">98%</div>
            <div class="text-xs text-gray-500 uppercase tracking-wider">Taux d'envoi</div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-sm text-center">
            <div class="text-2xl font-bold text-green-500">92%</div>
            <div class="text-xs text-gray-500 uppercase tracking-wider">Taux de lecture</div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-sm text-center">
            <div class="text-2xl font-bold text-green-500">24</div>
            <div class="text-xs text-gray-500 uppercase tracking-wider">Dossiers envoyés</div>
        </div>
    </div>
</div>

<!-- Statistics Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 animate-slide-up">
    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-500 relative overflow-hidden">
        <div class="flex justify-between items-start">
            <div>
                <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Total Dossiers</div>
                <div class="text-3xl font-bold text-gray-900 mt-1">247</div>
                <div class="text-sm text-green-500 flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    +12% ce mois
                </div>
            </div>
            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center text-blue-600 text-2xl">
                📁
            </div>
        </div>
        <div class="h-1.5 bg-gray-200 rounded-full mt-4 overflow-hidden">
            <div class="h-full bg-blue-500 rounded-full" style="width: 85%"></div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-yellow-500 relative overflow-hidden">
        <div class="flex justify-between items-start">
            <div>
                <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">En Cours</div>
                <div class="text-3xl font-bold text-gray-900 mt-1">89</div>
                <div class="text-sm text-green-500 flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    +5% ce mois
                </div>
            </div>
            <div class="bg-yellow-100 w-12 h-12 rounded-lg flex items-center justify-center text-yellow-600 text-2xl">
                ⏳
            </div>
        </div>
        <div class="h-1.5 bg-gray-200 rounded-full mt-4 overflow-hidden">
            <div class="h-full bg-yellow-500 rounded-full" style="width: 65%"></div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-500 relative overflow-hidden">
        <div class="flex justify-between items-start">
            <div>
                <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">Traités</div>
                <div class="text-3xl font-bold text-gray-900 mt-1">142</div>
                <div class="text-sm text-green-500 flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    +18% ce mois
                </div>
            </div>
            <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center text-green-600 text-2xl">
                ✅
            </div>
        </div>
        <div class="h-1.5 bg-gray-200 rounded-full mt-4 overflow-hidden">
            <div class="h-full bg-green-500 rounded-full" style="width: 92%"></div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-purple-500 relative overflow-hidden">
        <div class="flex justify-between items-start">
            <div>
                <div class="text-xs font-medium text-gray-500 uppercase tracking-wider">En Correction</div>
                <div class="text-3xl font-bold text-gray-900 mt-1">16</div>
                <div class="text-sm text-red-500 flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                    -3% ce mois
                </div>
            </div>
            <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center text-purple-600 text-2xl">
                🔄
            </div>
        </div>
        <div class="h-1.5 bg-gray-200 rounded-full mt-4 overflow-hidden">
            <div class="h-full bg-purple-500 rounded-full" style="width: 25%"></div>
        </div>
    </div>
</div>

<!-- Graphiques -->
<div class="bg-white rounded-xl shadow-sm border border-gray-200 mb-6 animate-fade-in">
    <div class="border-b border-gray-200 px-6 py-4 flex justify-between items-center">
        <h2 class="text-lg font-semibold text-gray-900">Performance par Structure</h2>
        <div>
            <button class="bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium mr-2">CPP</button>
            <button class="bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium">CEI</button>
        </div>
    </div>
    <div class="p-6 h-80">
        <div class="bg-gray-50 w-full h-full rounded-lg flex items-center justify-center text-gray-500">
            Graphique de performance par structure (temps moyen de traitement)
        </div>
    </div>
</div>

<!-- Top Membres -->
<div class="bg-white rounded-xl shadow-sm border border-gray-200 mb-6 animate-fade-in">
    <div class="border-b border-gray-200 px-6 py-4 flex justify-between items-center">
        <h2 class="text-lg font-semibold text-gray-900">Top Membres CPP/CEI</h2>
        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200">
            Voir tout
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">MK</div>
                <div>
                    <div class="font-semibold">Marie Kouam</div>
                    <div class="text-sm text-gray-500">CPP - Cellule de Planification</div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-4">
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-500">42</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Dossiers traités</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-500">3.2</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Jours moyen</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-500">1</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Classement</div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">PN</div>
                <div>
                    <div class="font-semibold">Paul Nkomo</div>
                    <div class="text-sm text-gray-500">CEI - Cellule des Études</div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-4">
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-500">38</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Dossiers traités</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-500">3.8</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Jours moyen</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-blue-500">2</div>
                    <div class="text-xs text-gray-500 uppercase tracking-wider">Classement</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dossiers Récents -->
<div class="bg-white rounded-xl shadow-sm border border-gray-200 animate-fade-in">
    <div class="border-b border-gray-200 px-6 py-4 flex justify-between items-center">
        <h2 class="text-lg font-semibold text-gray-900">Dossiers Récents</h2>
        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200">
            Voir tout
        </button>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Numéro</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Intitulé</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Structure</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priorité</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jours</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap font-semibold">DEP-2024-001</td>
                    <td class="px-6 py-4 whitespace-nowrap">Évaluation budget santé 2024</td>
                    <td class="px-6 py-4 whitespace-nowrap">CPP</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">En cours</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">15/01/2024</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-block w-2 h-2 rounded-full bg-red-500 mr-1"></span> Haute
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">5</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap font-semibold">DEP-2024-002</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rapport épidémiologie Q4</td>
                    <td class="px-6 py-4 whitespace-nowrap">CEI</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Traité</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">12/01/2024</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-block w-2 h-2 rounded-full bg-yellow-500 mr-1"></span> Moyenne
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">3</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap font-semibold">DEP-2024-003</td>
                    <td class="px-6 py-4 whitespace-nowrap">Plan stratégique 2025-2030</td>
                    <td class="px-6 py-4 whitespace-nowrap">CPP</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">Correction</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">10/01/2024</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-block w-2 h-2 rounded-full bg-red-500 mr-1"></span> Haute
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">7</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
