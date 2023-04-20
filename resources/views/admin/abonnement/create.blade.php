@extends('master.admin')


@section('content')
<div class="flex flex-row justify-center pt-12">
    <div class="w-1/2">
        <p class="text-4xl text-white mb-3">Ajouter un abonnement</p>

     <form action="{{ route('abonnement.store') }}" method="post">
         @csrf

         <label for="" class="text-3xl text-white">Type</label> <br>
         <input class="w-full rounded-lg" type="text" name="type"
             placeholder="Entrez le type d'abonnement"
             class="@error('type') is-invalid @enderror rounded-md border-indigo-600 w-full"
         ><br>
             @error('type')
                 <div class="text-red-500 bg-[#242F49] mt-2 rounded-md pl-3 pb-2 pt-2"> {{ $message }}</div>
             @enderror

         <label for="" class="text-3xl text-white">Nombre de mois</label><br>
         <input class="w-full rounded-lg" type="number" name="nombres_mois"
             placeholder="Entrez le nombre de mois" 
             class="@error('nombres_mois') is-invalid @enderror rounded-md border-indigo-600 w-full"
         >
             @error('nombres_mois')
                 <div class="text-red-500 bg-[#242F49] rounded-md pl-3 pb-2 pt-2 mt-2"> {{ $message }}</div>
             @enderror
         <button type="submit" class="w-full bg-[#4e6cf3] mt-[10px] h-10 rounded-md border text-white text-2xl hover:bg-indigo-200 hover:text-black ">Enregistrez</button>
     </form>
    </div>
 </div>
@endsection