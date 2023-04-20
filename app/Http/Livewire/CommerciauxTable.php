<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Client;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class CommerciauxTable extends Component
{
    use WithPagination;
    public string $search = '';
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];
    public function paginationView()
    {
        return 'livewire.pagination';
    }
    

    public function render()
    {
        
        $commerciaux = User::where('role', 'commerciale')->where('name', 'like', '%'.$this->search.'%')->paginate(10);
        return view('livewire.commerciaux-table', compact('commerciaux'));
    }
}
