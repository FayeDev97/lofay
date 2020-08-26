<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\User;

class RechercheController extends Controller
{
    //Produit
    function produit(Request $request)
    {
        $nom_produit = $request['nomProduit'];

        $produits = Produit::where('libelle',$nom_produit)->get();
        if($produits)
            return json_encode($produits);
        return json_encode(['invalid'=> true]);
    }
}
