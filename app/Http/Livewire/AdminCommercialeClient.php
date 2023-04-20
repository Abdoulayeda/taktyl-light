<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminCommercialeClient extends Component
{

  public $commerciale;
    public function mount(User $commerciale)
    {
        $this->commerciale = $commerciale;
    }
    public function render($id)
    {
        return view('livewire.admin-commerciale-client', [
            'commerciale' => user::find($id),
        ]);
    }
}
