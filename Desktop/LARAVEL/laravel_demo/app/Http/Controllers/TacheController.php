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
     
    public function show(Request $req){
        $tache = Tache::findOrFail($req->id);
        return View('Taches.show', ['tachetrouvee'=>$tache ]);
    } 

    public function create(){
        return view('Taches.nouveau');
    }

    public function termine(Request $req){
        $tache=Tache::findOrFail($req->id);
        $tache->is_termine = 1;
        $tache->save();
        return back(); }

        public function save(Request $req){
          $tache=new Tache();
          $tache->nom_tache = $req->nom;
          $tache->description_tache = $req->description;
          $tache->date_echeance = $req->date;
          $tache->priorite = $req->priorite;
            if ($req->termine) {
                $tache->is_termine=1;
            }else {
                $tache->is_termine=0;
            }
          if ($tache->save()) {
            return redirect('/Taches');
          }

         }
}

    
    