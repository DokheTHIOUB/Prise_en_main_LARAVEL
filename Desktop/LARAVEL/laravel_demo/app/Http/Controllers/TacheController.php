<?php

namespace App\Http\Controllers;
use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function getListeTaches(){
        $taches=Tache::all();
        return view('taches.Taches1',["taches"=>$taches]);
    }
}