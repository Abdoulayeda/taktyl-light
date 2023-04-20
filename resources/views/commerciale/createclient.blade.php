@extends('master.app')

@section('content')

<div class="flex flex-row mb-10 justify-center h-full pl-6 pt-6 shadow-sm">

    {{-- <div class="image w-1/2 pb-6">
       <img src="/images/client.png" alt="" class="object-cover">
    </div> --}}
  
    <div class="w-1/2 pl-6 pr-12 mb-6">
        <p class="text-3xl pt-6 mb-6 text-white ">Ajouter votre client</p>
        <form action="{{ route('store.client') }}" method="POST" >
            @csrf
                <label for="" class="text-2xl text-white">Nom</label>
                <input name="nom" type="text"
                placeholder="Le nom du client"
                    class="@error('nom') is-invalid @enderror rounded-md  border-green-600 form-input w-full"
                >
                @error('nom')
                <div class="text-red-800"> {{ $message }}</div>
                @enderror
    
             <div>
                <label for="" class="text-2xl text-white">Prénom</label><br>
                <input name="prenom" type="text"
                placeholder="Le prénom du client"
                class="@error('prenom') is-invalid @enderror rounded-md border-indigo-600 w-full">
                @error('prenom')
                    <div class="text-red-800"> {{ $message }}</div>
                @enderror
             </div>
    
             <div>
                <label  for="" class="text-2xl text-white">Entreprise</label><br>
                <input name="entreprise" type="text"
                placeholder="Le nom de l'entreprise du boutique, magasin..."
                class="@error('entreprise') is-invalid @enderror rounded-md border-indigo-600 w-full"
                >
                @error('entreprise')
                    <div class="text-red-800"> {{ $message }}</div>
                @enderror
             </div>
    
             <div>
                <label for="" class="text-2xl text-white">téléphone</label><br>
                <input name="telephone" type="text"
                placeholder="Le numéro de téléphone du client"
                    class="@error('telephone') is-invalid @enderror rounded-md border-indigo-600 w-full"
                >
                @error('telephone')
                    <div class="text-red-500"> {{ $message }}</div>
                @enderror
             </div>
    
            <div>
                <label for="" class="text-2xl text-white">Email</label><br>
                <input name="email" type="email"
                placeholder="L'adresse mail du client, il peut etre vide"
                    class="@error('email') is-invalid @enderror rounded-md border-indigo-600 w-full"
                >
                @error('email')
                    <div class="text-red-800"> {{ $message }}</div>
                @enderror
            </div>
    
            <div>
                <label for="" class="text-2xl text-white">Adresse</label><br>
                <input name="adresse" type="text"
                placeholder="L'adresse du client"
                    class="@error('adresse') is-invalid @enderror rounded-md border-indigo-600 w-full"
                >
                @error('adresse')
                    <div class="text-[#F38D4E]"> {{ $message }}</div>
                @enderror
            </div>
    
            <div>
                <input name="user_id" type="hidden" value="{{ Auth::user()->id }}" class="rounded-md w-full">
            </div>

            <div>
                <label for="" class="text-2xl text-white">Formule</label><br>
                <select name="formule_id" class="rounded-md w-full">
                    @foreach ($formules as $formule)
                        <option  value="{{ $formule->id }}">{{ $formule->type_formule }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="mb-10">
                <label for="" class="text-2xl text-white">Abonnement</label><br>
                <select name="abonnement_id" class="rounded-md w-full">
                    @foreach ($abonnements as $abonnement)
                        <option  value="{{ $abonnement->id }}">{{ $abonnement->type }} {{ $abonnement->nombres_mois }} mois</option>
                    @endforeach
                </select>
            </div>
    
            <button type="submit" class="w-full  bg-[#F38D4E]  h-10 rounded-md border text-white text-2xl hover:bg-indigo-200 hover:text-black ">Ajouter</button>
        </form>
    </div>
    
</div>


@endsection