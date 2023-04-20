<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\CommercialeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




 Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
        //Route pour admin
    
    
});
 Route::get('/', function () {
    return redirect()->route('login');
});  
Route::fallback(function() {
    return view('page404'); 
 });


Route::middleware(['commerciale', 'auth'])->group( function() {
    //Route pour commerciale
    Route::get('/commerciale', [CommercialeController::class , 'index'])->name('commerciale');
    //Route pour créer un client
    Route::get('/createclient',[CommercialeController::class, 'createclient'])->name('create.client');
    Route::post('/createclient',[CommercialeController::class, 'storeclient'])->name('store.client');
    //Route pour récuperer les clients d'un commerciale(connecter)
    Route::get('/clients', [CommercialeController::class, 'clients'])->name('commerciale.clients');
    //Route pour générer le PDF du bon de commande du client.
    Route::get('gereratecommande/{client}', [CommercialeController::class, 'generatecommande'])->name('commerciale.gereratecommande');
    //Route pour enregistrer le bon de commande dans la ase de donnée.
    Route::get('createboncommande/{client}', [CommercialeController::class, 'createboncommande'])->name('createboncommande');
    Route::post('storeboncommande/{client}', [CommercialeController::class, 'storeboncommande'])->name('storeboncommande');


    //Route pour générer le PDF de la facture
    Route::get('/generatefacture/{client}', [CommercialeController::class, 'generatefacture'])->name('commerciale.generatefacture');
    //Route pour enregistrer la facture dans la base de donnée.
    Route::get('/savefacture/{client}', [CommercialeController::class, 'savefacture'])->name('savefacture');
    

});


//Route::get('/abonnements', [AbonnementController::class, 'index']);

require __DIR__.'/auth.php';
