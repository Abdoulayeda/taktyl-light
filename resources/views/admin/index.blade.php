@extends('master.admin')

@section('content')
<div class="pt-6 ">
<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-semibold mb-4">Bienvenue dans l'interface d'administration</h1>
    <div class="flex flex-wrap">
        <!-- Section 1 -->
        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <div class="bg-[#1E7BD1] rounded-lg shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2">Statistiques</h2>
                <p class="text-gray-700 mb-2">Consultez les statistiques de votre site.</p>
                <a href="#" class="inline-block bg-[#F38D4E] hover:bg-[#d66b28] text-white px-4 py-2 rounded-lg">Voir les statistiques</a>
            </div>
        </div>
        <!-- Section 2 -->
        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <div class="bg-[#1E7BD1] rounded-lg shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2">Commerciale</h2>
                <p class="text-gray-700 mb-2">Gérez les commerciales de votre site.</p>
                <a href="admin/commerciaux" 
                    class="inline-block bg-[#F38D4E] hover:bg-[#d66b28] text-white px-4 py-2 rounded-lg">Gérer les Commerciales</a>
            </div>
        </div>
        <!-- Section 3 -->
        <div class="w-full md:w-1/2 lg:w-1/3 p-4">
            <div class="bg-[#1E7BD1] rounded-lg shadow-lg p-4">
                <h2 class="text-xl font-semibold mb-2">Paramètres</h2>
                <p class="text-gray-700 mb-2">Modifiez les paramètres de votre site.</p>
                <a href="#" class="inline-block bg-[#F38D4E] hover:bg-[#d66b28] text-white px-4 py-2 rounded-lg">Modifier les paramètres</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection