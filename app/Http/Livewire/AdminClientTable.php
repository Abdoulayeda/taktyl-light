<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class AdminClientTable extends Component
{
    public string $search = '';

     public function updatingSearch()
    {
        return $this->resetPage();
    } 

    protected $queryString = [
        'foo',
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function render()
    {

        $clients = Client::where('name', 'like', '%/'.$this->search.'%/')->get();
        return view('livewire.admin-client-table', compact('clients'));
    }
}
