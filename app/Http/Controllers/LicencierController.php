<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LicencierController extends Controller
{
    public function index()
    {
        $licenciernv = User::where('validate', '=', 1)->get();

        return view('licencier.public.liste', compact('licenciernv'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $birthdate = $user->birthdate;
        $now = now();
        $age = $now->diffInYears($birthdate);

        if ($age < 18) {
            $user->delete();
            return redirect()->back();
        } else {
            return back()->with('error', 'Seuls les utilisateurs mineurs peuvent être supprimés.');
        }
    }
}
