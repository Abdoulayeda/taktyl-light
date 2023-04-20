<?php

use App\Http\Controllers\Admin\AbonnementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FormuleController;
use App\Http\Livewire\AdminCommercialeClient;

Route::get('/', [AdminController::class, 'index'])->name('admin');
Route::get('/commerciaux', [AdminController::class, 'commerciaux'])->name('admin.commerciaux');

Route::get('/commerciale/{id}', [AdminController::class, 'showcommerciale'])->name('commerciale.show');

//Route pour creer un commerciale
Route::get('createcommerciale', [AdminController::class, 'createcommerciale'])->name('commerciale.create');
Route::post('storecommerciale', [AdminController::class, 'storecommerciale'])->name('commerciale.store');

//Route pour formule
Route::get('createformule', [FormuleController::class, 'create'])->name('formule.create');
Route::post('storeformule', [FormuleController::class, 'store'])->name('formule.store');

//Route pour abonnement
Route::get('createabonnement', [AbonnementController::class, 'create'])->name('abonnement.create');
Route::post('storeabonnement', [AbonnementController::class, 'store'])->name('abonnement.store');


