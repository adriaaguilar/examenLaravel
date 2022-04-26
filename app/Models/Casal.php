<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Casal extends Model
{
    use HasFactory;

    public function registre($nom, $data_inici, $data_final, $n_places, $ciutat){
        $casals = DB::table("casals")->get()->toArray();

        for ($i = 0; $i < count($casals); $i++){
            if ($nom == $casals[$i]->nom || $data_final <= $data_inici){
                return False;
            }else{
                $this->nom = $nom;
                $this->data_inici = $data_inici;
                $this->data_final = $data_final;
                $this->n_places = $n_places;
                $this->id_ciutat = $ciutat;
                $this->save();

                return True;
            }
        }
    }
    
    public function getCasals(){
        $casals = DB::table("casals")->get()->toArray();

        return $casals;
    }
}