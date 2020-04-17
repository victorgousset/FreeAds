<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Search extends Model
{
    public function Recherche($value)
    {
        $valueLike = '%' . $value . '%';
        $result = DB::select('SELECT * FROM Annonce WHERE titre LIKE :string', ['string' => $valueLike]);

        return $result;
    }
}
