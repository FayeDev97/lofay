<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticlesPanier;

class PanierController extends Controller
{
    //
    public function ajaxGetPanier(Request $request)
    {
        if($request->session()->has('produits'))
            return $request->session('produits');
        return [];
    }

    public function ajaxAjouterArticle(Request $request, $id_produit)
    {
        $produits = [];
        if(!$request->session()->exists('produits'))
            session('produits',[]);
        // $produits_session = session('produits');
        // for($i = 0; $i < count($produits_session); $i++)
        //     $produits[$i] = $produits_session[$i];
        // $produits[count($produits)] = $id_produit;
        $request->session()->push('produits', $id_produit);
        session('articles', $produits);
    }

    public function ajaxSupprimerArticle(Request $request,$id_produit)
    {
        $request->session()->forget($id_produit);
    }
    public function testAjax()
    {
        return '<div class="bg-dark text-white">pass</div>';
    }
}
