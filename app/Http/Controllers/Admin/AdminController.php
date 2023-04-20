<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    public function commerciaux()
    {
        return view('admin.commerciaux');
    }

    public function clients()
    {
        return view('admin.clients');
    }

    public function createcommerciale()
    {
        return view('admin.commerciale.create');
    }

    public function storecommerciale(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'nom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user->name = $request->name;
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
       
        return redirect()->route('commerciale.create');

    }

    public function showcommerciale($commerciale)
    {
        return view('admin.commerciale.show', ['commerciale' =>$commerciale]);

    }

}
