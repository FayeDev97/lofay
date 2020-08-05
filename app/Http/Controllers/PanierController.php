<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticlesPanier;

class PanierController extends Controller
{
    //
    public function ajaxGetPanier()
    {
        if(session()->has('produits'))
            return session('produits');
        return null;
    }

    public function ajaxAjouterArticle(Request $request, $id_produit)
    {
        $produits = [];
        if(!$request->session()->has('produits'))
            session('produits',[]);
        $produits_session = session('produits');
        for($i = 0; $i < count($produits_session); $i++)
            $produits[$i] = $produits_session[$i];
        $produits[count($produits)] = $id_produit;
        session('articles', $produits);
    }

    public function ajaxSupprimerArticle(Request $request,$id_produit)
    {
        $request->session()->forget($id_produit);
    }

}
