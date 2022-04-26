<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciutat;
use App\Models\Casal;

class CasalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciutat_badalona = Ciutat::where('nom', 'badalona')->first();
        $ciutat_mataro = Ciutat::where('nom', 'mataro')->first();

        $casal_maria = new Casal();
        $casal_maria->nom = 'casal_maria';
        $casal_maria->data_inici = '2022-06-26';
        $casal_maria->data_final = '2022-08-26';
        $casal_maria->n_places = '20';
        $casal_maria->id_ciutat = $ciutat_mataro->id;
        $casal_maria->save();

        $casal_pedrito = new Casal();
        $casal_pedrito->nom = 'casal_pedrito';
        $casal_pedrito->data_inici = '2022-05-22';
        $casal_pedrito->data_final = '2022-07-29';
        $casal_pedrito->n_places = '40';
        $casal_pedrito->id_ciutat = $ciutat_badalona->id;
        $casal_pedrito->save();
    }
}
