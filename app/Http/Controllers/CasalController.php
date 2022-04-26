<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciutat;
use App\Models\Casal;

session_start();

class CasalController extends Controller
{
    public function mostrarTaula(){
        $casal = new Casal();
        $casals = $casal->getCasals();

        $ciutat = new Ciutat();
        $ciutats = $ciutat->getCiutats();

        $_SESSION['casals'] = $casals;
        $_SESSION['ciutats'] = $ciutats;
        return view('taula');
    }

    public function mostrarFormulari(){
        $ciutat = new Ciutat();
        $ciutats = $ciutat->getCiutats();

        $_SESSION['ciutats'] = $ciutats;
        return view('formulari');
    }

    public function comprobarRegistre(Request $request){
        request()->validate([
            'nom'=>'required',
            'data_inici'=>'required',
            'data_final'=>'required',
            'n_places'=>'required',
            'ciutat'=>'required'
        ]);

        $nom = $request->get('nom');
        $data_inici = $request->get('data_inici');
        $data_final = $request->get('data_final');
        $n_places = $request->get('n_places');
        $ciutat = $request->get('ciutat');

        $new_casal = new Casal();

        if ($new_casal->registre($nom, $data_inici, $data_final, $n_places, $ciutat) == True){
            return redirect('');
        }else{
            return redirect('formulari');
        }
    }
}
