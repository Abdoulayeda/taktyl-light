<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles()
</head>
<body>
    <div class="w-full h-[100vh]">
      {{-- Navbar verticale --}}
      <div class="fixed w-1/6 h-full bg-[#007586] pl-10 pt-10">
        {{-- Logo --}}
        <div class="flex justify-center pl-6 pr-6 ">
           <img class="object-cover w-2/3" src="/images/logo.png" alt="">
        </div>
        {{-- User --}}
        <div class="">
          <p class="text-4xl text-white pt-6 pb-6">Bienvenue {{ Auth::user()->name }}</p>
        </div>
       <nav class="">
        <div class="mb-[400px]">
         <ul class="text-white text-2xl">
            <div class="flex justify-items-center">
               <div class="flex">
                  <img class="w-[40px]" src="/images/home.svg" alt="">
               </div>
               <div class="mb-4">
                  <li class="mt-4 ml-5">
                     <a class="text-3xl hover:text-[#F38D4E]" href="{{ route('commerciale') }}">Home</a>
                  </li>
               </div>
            </div>
           
            <li class="p-2">
               <a class="text-3xl hover:text-[#F38D4E] pb-6" href="{{ route('create.client') }}">Ajouter un client</a>
            </li>
            <li class="p-2">
               <a class="text-3xl hover:text-[#F38D4E]" href="{{ route('commerciale.clients') }}">Statistiques</a>
            </li>
            
          </ul>
        </div>
         <div> 
            <form action="{{ route('logout') }}" method="post">
             @csrf
               <button class=" bg-red-600 p-3 rounded-xl text-2xl text-white hover:outline-4 motion-safe:hover:scale-[1.1] transition-all">Se déconnecter</button>
            </form>
         </div>
       </nav>
     </div>


      {{-- Contenu de la page commerciale --}}
     <div class="lg:w-5/6 lg:ml-[16.66%] md:w-full pl-6  bg-[#323ddb] h-full">
        @yield('content')
     </div>
       
    </div>

@livewireScripts()
</body>
</html>