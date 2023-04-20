<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Facture;
use App\Models\Formule;
use App\Models\Abonnement;
use App\Models\BonCommande;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CommercialeController extends Controller
{

    private function getFirstLetter($name)
    {
        return substr($name, 0,1);
    }

    public function index()
    {
        $user = User::where('id',Auth::user()->id)->first();
      //  return Auth::user()->id;
        //Récupérer l'abonnement annuel
        $abonnement_a = Abonnement::where('type', 'annuel')->first();
        //Récuperer les clients qui ont un abonnement annuel du commerciale connecté.
        $clients_aa = [];
        if(!empty($abonnement_a)){
            $clients_aa = Client::where('user_id', Auth::user()->id)->where('abonnement_id', $abonnement_a->id)->get();
        }
        return view('commerciale.index', compact('user', 'clients_aa'));

    }

    /**
     * Function pour créer un client.
     */
    public function createclient()
    {
        #Récupération des abonnements
        $abonnements = Abonnement::all();
        $formules = Formule::all();
        return view('commerciale.createclient', compact('abonnements', 'formules'));
    }
    /**
     * Function  enregistrer un client à la base de donnée.
     */
    public function storeclient(Request $request)
    {
        
        $client = new Client();
 
        $request->validate([
          'nom' => 'required|max:100',
          'prenom' => 'required|max:100',
          'entreprise' => 'required|max:100',
          'telephone' => 'required|max:100',
          //'email' => 'email|unique:clients',
          'adresse' => 'required|max:100',
        ]);
 
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->entreprise = $request->entreprise;
        $client->telephone = $request->telephone;
        $client->email = $request->email;
        $client->adresse = $request->adresse; 
        $client->user_id = $request->user_id;
        $client->formule_id = $request->formule_id;
        $client->abonnement_id = $request->abonnement_id;

        $client->save();
       
       return redirect()->route('commerciale');     
    }

    /**
     * Function pour recuperer tout les clients lié a l'utilisateur connecté(Commerciale).
     */
    public function clients()
    {
        return view('commerciale.clients');
    }

    public function createboncommande( Client $client)
    {
        
        $bon_commande = BonCommande::where('client_id', $client->id)->first();
        if(!empty($bon_commande)){
            return redirect()->route('commerciale.clients')->with('boncommandeexist', 'Le bon de commande existe déja.');

        } else {
            return view('commerciale.createboncommande', compact('client'));

        }
        
    }

    public function storeboncommande(Request $request)
    {
        $bon_commandes = BonCommande::all();
        $numero = count($bon_commandes)+1;
        $ref= 'B'.$this->getFirstLetter(Auth::user()->name).''.$this->getFirstLetter(Auth::user()->nom).str_replace('-', '', $request->created_at).''.$numero;
        
        BonCommande::firstOrCreate(
            ['client_id' => $request->client_id],
            [
                'ref' => $ref,
                'numero' => $numero,
                'user_id' => Auth::user()->id,
                'slug' => rand(19283,24356782398),
                'created_at' => $request->created_at,
                'updated_at' => $request->created_at,
            ]
        );
        return redirect()->route('commerciale.clients')->with('message' ,'Bon de commande créer avec succes');
    }

      /**
     * Client $client
     * Function pour générer un bon de commande
     */
    public function generatecommande(Client $client, Request $request)
    {
        

        $bon_commande = BonCommande::where('client_id', $client->id)->first();
        if(empty($bon_commande)){
            return redirect()->route('commerciale.clients')->with('boncommandenotfound' ,'Le bon de commande n\'existe pas. Veillez le créer.');

        }
        $filename = Auth::user()->name.'_BC-'.''.$client->prenom.'-'.$client->nom.'.pdf';  
              $pdf = PDF::loadView('commerciale.generatecommande',compact('client', 'bon_commande'))
                         ->save($filename, 'commandes');
           return $pdf->download('Bon_de_commande'.$client->prenom.'-'.$client->nom.'.pdf');   
         
          // return redirect()->route('commerciale.clients');
       // return view('commerciale.generatecommande', compact('client', 'bon_commande'));
    }

    public function savefacture(Client $client)
    {
       
        $bon_commande = BonCommande::where('client_id', $client->id)->first();
        $factures = Facture::all();
        if(empty($bon_commande->ref)){
            return redirect()->route('commerciale.clients')->with('facturenotfound', 'Impossible d\'enregistré la facture car le bon de commande n\'existe pas. Veillez créer le bon de commande d\'abord.');
        }

        $facture = Facture::where('client_id', $client->id)->first();
        if(isset($facture)){
            return redirect()->route('commerciale.clients')->with('factureexist', 'La facture existe déja. ');

        }

        $ref= 'F'.''.substr($bon_commande->ref, 1);

        Facture::firstOrCreate(
            [   'client_id' => $client->id],
            [
                'ref_facture' =>$ref,
                'numero' => count($factures)+1,
                'slug' => rand(19283,24356782398),
                'status' => "payer",
                'bon_commande_id' => $bon_commande->id,
                'created_at' => $bon_commande->created_at,
                'updated_at' => $bon_commande->updated_at,
            ]
        );
        
       return redirect()->route('commerciale.clients')->with('messagefacture', 'Facture enregistré avec succes.');
    }

  

    public function generatefacture(Client $client, Request $request)
    {
              $facture = Facture::where('client_id', $client->id)->first(); 
              $nombres_mois = $client->abonnement->nombres_mois;
              $date_end = date('Y-m-d',strtotime("+ $nombres_mois months" , strtotime($facture->created_at))) ;
              $namefile =  Auth::user()->name.'_Facture-'.$client->prenom.'-'.$client->nom.'.pdf';

              $pdf = PDF::loadView('commerciale.generatefacture',compact('client', 'facture', 'date_end'))
                       ->save($namefile, 'factures');
             
              return $pdf->download($namefile);


      // return view('commerciale.generatefacture', compact('client'));
    }

  


   
 
}
