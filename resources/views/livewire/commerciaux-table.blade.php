<div>
 <div class="px-12 pt-6 flex flex-col justify-center">
  <div class="mb-6">
    <input class="rounded-md w-1/2 h-12" type="text" placeholder="Rechercher un commerciale" wire:model.debounce.500ms="search" >
  </div>
    <table class="table">
        <thead >
            <th class="border-2 border-solid  border-blue-600 text-white text-xl px-2">Numéro</th>
            <th class="border-2 border-solid  border-blue-600 text-white text-xl px-2">Nom</th>
            <th class="border-2 border-solid  border-blue-600 text-white text-xl px-2">Email</th>
            <th class="border-2 border-solid  border-blue-600 text-white text-xl px-2">Nombre de clients</th>
            <th class="border-2 border-solid  border-blue-600 text-white text-xl px-2" colspan="3">Action</th>
        </thead>

        <tbody>
            @foreach ($commerciaux as $key=>$commerciale )
          <tr>
            <td class="border-2 border-solid  border-blue-600 text-white text-xl px-2">{{ $key + 1 }}</td>
            <td class="border-2 border-solid  border-blue-600 text-white text-xl px-2">{{ $commerciale->name }}</td>
            <td class="border-2 border-solid  border-blue-600 text-white text-xl px-2">{{ $commerciale->email }}</td>
            <td class="border-2 border-solid  border-blue-600 text-white text-xl px-2 text-center">{{ $commerciale->getTotalClient($commerciale->id) }}</td>
            <td class="border-2 border-solid  border-blue-600 text-white text-xl px-2">
              <a class=" px-1 py-1 rounded-md" href="">
                <i class="fa fa-edit text-blue-700"></i>
              </a>
            </td>
            <td class="border-2 border-solid  border-blue-600 text-white text-xl px-2 py-2 ">
              <form action="" method="delete">
                @csrf
                <button class=" px-1 py-1 rounded-md">
                  <i class="fa fa-trash text-red-600"></i>
                </button>
              </form>
            </td>
            <td class="border-2 border-solid  border-blue-600 text-white text-xl px-2">
              <a href="{{ route('commerciale.show', $commerciale->id) }}">
                <i class="fa fa-users text-slate-800"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
   {{ $commerciaux->links() }}
  
 </div>
</div>
