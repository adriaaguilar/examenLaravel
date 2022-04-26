<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciutat;

class CiutatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciutat_badalona = new Ciutat();        
        $ciutat_badalona->nom = 'badalona';        
        $ciutat_badalona->n_habitants = '200000';        
        $ciutat_badalona->save();

        $ciutat_mataro = new Ciutat();        
        $ciutat_mataro->nom = 'mataro';        
        $ciutat_mataro->n_habitants = '120000';        
        $ciutat_mataro->save();
    }
}
