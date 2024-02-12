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

}
