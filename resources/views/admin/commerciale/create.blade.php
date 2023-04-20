@extends('master.admin')


@section('content')
<div class="flex flex-row justify-center pt-12">
    <div class="w-1/2">
        <p class="text-4xl text-white mb-3">Ajouter un commerciale</p>

     <form action="{{ route('commerciale.store') }}" method="post">
         @csrf

         <label for="" class="text-3xl text-white">Prénom</label> <br>
         <input class="w-full rounded-lg" type="text" name="name"
             placeholder="Entrez le prénom du commerciale"
             class="@error('name') is-invalid @enderror rounded-md border-indigo-600 w-full"
         ><br>
             @error('name')
                 <div class="text-red-500 bg-[#242F49] mt-2 rounded-md pl-3 pb-2 pt-2"> {{ $message }}</div>
             @enderror

             <label for="" class="text-3xl text-white">Nom</label> <br>
             <input class="w-full rounded-lg" type="text" name="nom"
                 placeholder="Entrez le nom du commerciale"
                 class="@error('nom') is-invalid @enderror rounded-md border-indigo-600 w-full"
             ><br>
                 @error('nom')
                     <div class="text-red-500 bg-[#242F49] mt-2 rounded-md pl-3 pb-2 pt-2"> {{ $message }}</div>
                 @enderror   

         <label for="" class="text-3xl text-white">Email</label><br>
         <input class="w-full rounded-lg" type="email" name="email"
             placeholder="Entrez le mail du client" 
             class="@error('email') is-invalid @enderror rounded-md border-indigo-600 w-full"
         >
             @error('email')
                 <div class="text-red-500 bg-[#242F49] rounded-md pl-3 pb-2 pt-2 mt-2"> {{ $message }}</div>
             @enderror

             <label for="" class="text-3xl text-white">Mot de passe</label> <br>
         <input class="w-full rounded-lg" type="password" name="password"
             placeholder="Entrez le mot de passe du commerciale"
             class="@error('password') is-invalid @enderror rounded-md border-indigo-600 w-full"
         ><br>
             @error('type')
                 <div class="text-red-500 bg-[#242F49] mt-2 rounded-md pl-3 pb-2 pt-2"> {{ $message }}</div>
             @enderror

        

         <button type="submit" class="w-full bg-[#4e6cf3] mt-[10px] h-10 rounded-md border text-white text-2xl hover:bg-indigo-200 hover:text-black ">Enregistrez</button>
     </form>
    </div>
 </div>
@endsection