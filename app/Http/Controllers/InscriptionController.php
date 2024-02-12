<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $licenciernv = User::where('validate', '=', null)->get();

        return view('licencier.admin.inscription', compact('licenciernv'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, $id)
    {
        
        $user = User::findOrFail($id);
     
        $user->validate = 1;
        $user->save();

        return redirect()->back()->with('success', 'L\'utilisateur a été validé avec succès.');
    }
}
