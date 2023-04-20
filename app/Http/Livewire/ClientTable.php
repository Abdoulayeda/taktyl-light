<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ClientTable extends Component
{
    public string $search = '';

    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'livewire.pagination';
    }

    public function render()
    {
        $totalclient = Client::where('user_id', Auth::user()->id)->get();
        //Les clients
        $clients = Client::where('user_id', Auth::user()->id)
                         ->where('prenom', 'like', '%'.$this->search.'%')
                         
                         ->paginate(9);
        return view('livewire.client-table', compact('clients', 'totalclient'));
    }

}
