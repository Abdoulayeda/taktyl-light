@extends('master.app')

@section('content')
   <div class="flex">
          {{-- Pour les cards --}}
          <div class="grid gap-1 grid-cols-3 w-full justify-between mx-20 my-10 ">
            {{-- Pour le card clients --}}
               
                  <a href="{{ route('commerciale.clients') }}" 
                        class="bg-[#F38D4E] rounded-xl mr-6 text-center py-12 hover:outline-2 motion-safe:hover:scale-[1.01] transition-all">
                     <p class="text-white text-4xl pb-6 font-bold"> 
                        <span class="text-slate-800 font-bold py-6">{{ count($user->clients)}} </span> <br> <span class="py-12">Clients</span>
                     </p>
                  </a>
            
                  <a href="#" 
                        class="bg-[#F38D4E] rounded-xl mr-6 text-center py-12 hover:outline-2 motion-safe:hover:scale-[1.01] transition-all">
                     <p class="text-white text-4xl pb-6 font-bold"> 
                        <span class="text-slate-800 font-bold py-6">{{ count($clients_aa) }} </span> <br> <span class="py-12">abonnement annuel</span>
                     </p>
                  </a>
            
                  <a href="#" 
                        class="bg-[#F38D4E] rounded-xl mr-6 text-center py-12 hover:outline-2 motion-safe:hover:scale-[1.01] transition-all">
                     <p class="text-white text-4xl pb-6 font-bold"> 
                        <span class="text-slate-800 font-bold py-6">{{ count($user->clients) - count($clients_aa) }} </span> <br> <span class="py-12">abonnement mensuel</span>
                     </p>
                  </a>   
        </div>  
   </div>

   <div style="width: 600px; margin: auto;">
      <canvas id="myChart"></canvas>
  </div>
@endsection
