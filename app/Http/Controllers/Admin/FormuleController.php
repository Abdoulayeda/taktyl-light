<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formule;
use Illuminate\Http\Request;

class FormuleController extends Controller
{
    public function create()
    {
        return view('admin.formule.create');
    }

    public function store(Request $request, Formule $formule)
    {
       
        $request->validate([
          'type_formule' => 'required|unique:formules',
          'tarif' => 'required|numeric',
        ]);

        $formule->type_formule = $request->type_formule;
        $formule->tarif = $request->tarif;
        $formule->slug = $request->type_formule.'-'.rand(1202, 678947);

      //  dd($formule);

         $formule->save();
        
        return redirect()->route('formule.create'); 
    }
}
