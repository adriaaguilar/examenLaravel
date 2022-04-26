<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ciutat extends Model
{
    use HasFactory;

    public function getCiutats(){
        $ciutats = DB::table("ciutats")->get()->toArray();

        return $ciutats;
    }
}
