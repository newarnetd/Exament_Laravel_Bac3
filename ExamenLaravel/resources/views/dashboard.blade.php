<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Menu -->
            <div class="bg-dark p-4 rounded shadow-sm mb-4" STYLE="background:#FFF">
                <h4 class="mb-4 text-center text-white" style="color:#000;padding-right:10px">Menu</h4>
                <div class="list-group" style="">
                    <a href="{{ route('home') }}"  style="color:#000;padding-right:10px"class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-white border-0 rounded mb-2">
                        Home
                        <i class="fas fa-home"></i>
                    </a>
                    <a href="{{ route('states.add') }}" style="color:#000;padding-right:10px" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-white border-0 rounded mb-2">
                        States Add
                        <i class="fas fa-map-marker-alt"></i>
                    </a>
                    <a href="{{ route('governor.add') }}" style="color:#000;padding-right:10px" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-white border-0 rounded mb-2">
                        Governor Add
                        <i class="fas fa-user-tie"></i>
                    </a>
                    <a href="{{ route('preselector.add') }}" style="color:#000;padding-right:10px" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-white border-0 rounded mb-2">
                        Preselector Add
                        <i class="fas fa-user-check"></i>
                    </a>
                    <a href="{{ route('senator.add') }}" style="color:#000;padding-right:10px" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-white border-0 rounded mb-2">
                        Senator Add
                        <i class="fas fa-user-shield"></i>
                    </a>
                    <a href="{{ route('party') }}" style="color:#000;padding-right:10px" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-dark text-white border-0 rounded mb-2">
                        Party
                        <i class="fas fa-users"></i>
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h3>{{ __("Bienvenue sur le Projet du Groupe 1") }}</h3>
                <p class="mt-3">Bonjour, vous êtes sur le tableau de bord de ce projet. Utilisez les menus en haut pour naviguer entre les différentes pages et effectuer les actions liées au projet.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
