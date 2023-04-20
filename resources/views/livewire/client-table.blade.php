<div>
    <div class="pt-6">
        <p class="text-4xl pb-6 text-white text-center">Vous avez {{ count($totalclient) }} clients</p>
       
        @if (session('message'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md w-1/2 text-xl" role="alert">
            <div class="flex">
              <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
              <div>
                <p class="font-bold">{{ Auth::user()->name }}</p>
                <p class="text-sm"> {{ session('message') }}</p>
              </div>
            </div>
          </div>
          @endif

          @if (session('messagefacture'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md w-1/2 text-xl" role="alert">
            <div class="flex">
              <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
              <div>
                <p class="font-bold">{{ Auth::user()->name }}</p>
                <p class="text-sm"> {{ session('messagefacture') }}</p>
              </div>
            </div>
          </div>
          @endif

          @if (session('boncommandeexist'))
          <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md w-1/2 text-xl" role="alert">
              <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                  <p class="font-bold">{{ Auth::user()->name }}</p>
                  <p class="text-sm"> {{ session('boncommandeexist') }}</p>
                </div>
              </div>
            </div>
            @endif

            @if (session('factureexist'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md w-1/2 text-xl" role="alert">
                <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                    <p class="font-bold">{{ Auth::user()->name }}</p>
                    <p class="text-sm"> {{ session('factureexist') }}</p>
                  </div>
                </div>
              </div>
              @endif

              @if (session('facturegenerate'))
              <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md w-1/2 text-xl" role="alert">
                  <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                      <p class="font-bold">{{ Auth::user()->name }}</p>
                      <p class="text-sm"> {{ session('facturegenerate') }}</p>
                    </div>
                  </div>
                </div>
                @endif

              

          @if (session('facturenotfound'))
            <div class="bg-yellow-500  rounded-b   px-4 py-3 shadow-md w-1/2 text-xl" role="alert">
                <div class="flex">
                  <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm text-red-700"> {{ session('facturenotfound') }}</p>
                  </div>
                </div>
            </div>
            @endif

            @if (session('boncommandenotfound'))
            <div class="bg-yellow-500  rounded-b   px-4 py-3 shadow-md w-1/2 text-xl" role="alert">
                <div class="flex">
                  <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm text-red-700"> {{ session('boncommandenotfound') }}</p>
                  </div>
                </div>
            </div>
            @endif

           


        <div class="mb-6 mt-6">
            <input class="rounded-md w-1/2 h-12" type="text" placeholder="Rechercher un client" wire:model.debounce.500ms="search" >
        </div>
        <table class="p-6">
            @if (count($clients) >0)
            <thead >
                <th class="border-solid border-2 border-black text-black py-4">Numéro</th>
                <th class="border-solid border-2 border-black text-black py-4">Prénom & Nom</th>
                <th class="border-solid border-2 border-black text-black py-4">Entreprise</th>
                <th class="border-solid border-2 border-black text-black py-4">Téléphone</th>
                <th class="border-solid border-2 border-black text-black py-4">Adresse</th>
                <th class="border-solid border-2 border-black text-black py-4">Abonnemnt</th>
                <th class="border-solid border-2 border-black text-black py-4" colspan="2">BC</th>
                <th class="border-solid border-2 border-black text-black py-4" colspan="2">Facture</th>

            </thead>
            @endif
            <tbody>
                @foreach ($clients as $key=>$client)
                <tr>
                    <td class="text-slate-900 border-solid border-2 border-black">{{ $key + 1 }}</td>
                    <td class="text-slate-900 border-solid border-2 border-black  text-lg p-4">{{ $client->prenom }} {{ $client->nom }}</td>
                    <td class="text-slate-900 border-solid border-2 border-black text-lg p-4">{{ $client->entreprise }}</td>
                    <td class="text-slate-900 border-solid border-2 border-black text-lg p-4">{{ $client->telephone }}</td>
                    <td class="text-slate-900 border-solid border-2 border-black text-lg p-4">{{ $client->adresse }}</td>
                    <td class="text-slate-900 border-solid border-2 border-black text-lg p-4">{{ $client->abonnement->type }}</td>
                    
                    <td class="border-solid border-2 border-black text-white pl-2 pr-2">
                        <a href="{{ route('createboncommande', $client)}}">
                          <i class="fa-solid fa-square-plus text-slate-800 text-4xl"></i>
                        </a> 
                    </td>
                   
                    <td class="border-solid border-2 border-black text-white pl-2 pr-2">
                        <a href="{{ route('commerciale.gereratecommande', $client)}}">
                          <i class="fas fa-solid fa-download text-slate-800 text-3xl"></i>
                        </a> 
                    </td>
                    <td class="border-solid border-2 border-black text-white pl-2 pr-2">
                        <a href="{{ route('savefacture', $client) }}">
                          <i class="fa-solid fa-square-plus text-slate-800 text-4xl"></i>  
                        </a> 
                    </td>
                    <td class="border-solid border-2 border-black text-white pl-2 pr-2">
                        <a href="{{ route('commerciale.generatefacture', $client) }}">
                          <i class="fas fa-solid fa-download text-slate-800 text-3xl"></i>

                        </a> 
                    </td>
                   
                    {{-- <td class="border-solid border-2 border-black text-white">Voir les factures</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>

        
       <div class="w-1/2 p-12">
         {{ $clients->links() }} 
       </div>
    </div>
</div>
