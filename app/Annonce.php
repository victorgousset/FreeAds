<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Annonce extends Model
{

    public function verifID($id)
    {
        $result = DB::select('SELECT * FROM Annonce WHERE id = :id', ['id' => $id]);
        return $result;
    }

    public function listAll()
    {
        $result = DB::select('SELECT * FROM Annonce');

        return $result;
    }

    public function getMyAnnonce()
    {
        $result = DB::select('SELECT * FROM Annonce WHERE id_user = :id_user', ['id_user' => auth()->id()]);

        return $result;
    }

    public function insert($titre, $description, $image, $prix, $id_user)
    {
        DB::insert('INSERT INTO Annonce(titre, description, img, prix, id_user) VALUES(?, ?, ?, ?, ?)', [$titre, $description, $image, $prix, $id_user]);
    }

    public function getAnnonce($id)
    {
        $result = DB::select('SELECT * FROM Annonce WHERE id = :id', ['id' => $id]);

        return $result;
    }

    public function deleteMyAnnonce($id)
    {
        DB::table('Annonce')->where('id', $id)->delete();
    }

    public function updateMyAnnonce($id, $titre, $description, $prix)
    {
        DB::table('Annonce')->where('id', $id)->update(['titre' => $titre, 'description' => $description, 'prix' => $prix]);
    }

    public function getIdCategory($nom)
    {
        $result = DB::select('SELECT * FROM annonce_category WHERE nom = :nom', ['nom' => $nom]);

        return $result;
    }
}
