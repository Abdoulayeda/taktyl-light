<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbonnementController extends Controller
{
    public function index(){

         //Récupérer l'abonnement annuel
         $abonnement_a = Abonnement::where('type', 'annuel')->first();
         //Récuperer les clients qui ont un abonnement annuel du commerciale connecté.
         $clients_aa = Client::where('user_id', Auth::user()->id)->where('abonnement_id', $abonnement_a->id)->get();
 

        $abonnement_m = Abonnement::where('type', 'mensuel')->first();
        //Récuperer les clients qui ont un abonnement mensuel du commerciale connecté.
        $clients_am = Client::where('user_id', Auth::user()->id)->where('abonnement_id', $abonnement_m->id)->get();
      //$clients = Client::where('user_id',Auth::user()->id)->get();
      $total_am = count($clients_am);
      $total_aa = count($clients_aa);

        return response()->json([
            'total_mensuel' => $total_am,
            'total_annuel' => $total_aa,
        ]);
    }
}
