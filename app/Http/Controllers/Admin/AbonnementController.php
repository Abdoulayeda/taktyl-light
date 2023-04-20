<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abonnement;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    
    public function create()
    {
        return view('admin.abonnement.create');
    }

    public function store(Request $request, Abonnement $abonnement)
    {
        
         $request->validate([
            'type' => 'required',
            'nombres_mois' => 'required|numeric',
        ]); 

        $abonnement->type = $request->type;
        $abonnement->nombres_mois = $request->nombres_mois;
        $abonnement->slug = $request->type.'-'.rand(356778,995087); 
        
        $abonnement->save();
       // dd($abonnement);
        return redirect()->route('abonnement.create');
    
    }
}
