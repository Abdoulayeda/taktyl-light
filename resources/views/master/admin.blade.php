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
    <div class="w-full">
        {{-- Alignement verticale --}}
        <div class="w-[15%]  bg-[#242F49] h-[100vh] fixed content-center">
            {{-- Le logo --}}
            <div class="grid justify-items-center pt-6 pb-6 bg-slate-600 w-full rounded-tl-[30px] ">
                <img src="../../images/logo.png" alt="" class="lg:w-[120px]">
            </div>
            {{-- Info de l'administrateur. --}}
            <div class="grid justify-items-center pb-6 pt-6 bg-[#1E7BD1]">
                <p class="w-[110px] h-[110px] bg-orange-500 text-white px-6 py-6 rounded-full border-solid border-2">
                    <i class="fa-4x fas fa-user-shield"></i>
                </p>
                <p class="text-white text-2xl capitalize pt-3">{{ Auth::user()->name }}</p>
            </div>
            {{-- La navigation --}}
            <nav class="pl-12 pt-10">
                <ul class="flex flex-col space-y-4 ">
                    <li class="">
                        <a class="text-white text-2xl" href="{{ route('admin') }}">
                            <i class="fas fa-home"></i>
                             Home
                        </a>
                    </li>
                    <li><a class="text-white text-2xl" href="{{ route('formule.create') }}">
                        <i class="fa fa-edit"></i>
                        Ajouter une formule</a>
                    </li>
                    <li class="">
                        <a class="text-white text-2xl" href="{{ route('admin.commerciaux') }}">
                            <i class="fa-solid fa-list"></i>
                            Les commerciaux</a>
                    </li>
                    <li>
                        <a class="text-white text-2xl" href="{{ route('abonnement.create') }}">
                            <i class="fas fa-"></i>
                            Ajouter un abonnement
                        </a>
                    </li>
                    <li><a class="text-white text-2xl" href="{{ route('commerciale.create') }}">Ajouter un commerciale</a></li>
                </ul>
            </nav>
            <div class="mt-[80%] pl-6">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                      <button class="bg-red-600 p-3 rounded-xl text-2xl text-white hover:outline-4 motion-safe:hover:scale-[1.1] transition-all">Se déconnecter</button>
                   </form>
            </div>
        </div>

        <div class="ml-[15%] h-[100vh] bg-[#F38D4E]">
            @yield('content')
        </div>

        
    </div>

@livewireScripts()
</body>
</html>