<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticlesPanier;

class PanierController extends Controller
{
    //Retourne les articles du panier
    public function ajaxGetPanier(Request $request)
    {
        if($request->session()->has('produits'))
        {
            $produits =  json_encode($request->session()->get('produits'));
            return $produits;
        }
        return json_encode(['invalid' => true]);
    }

    // Ajoute un article au panier
    public function ajaxAjouterArticle(Request $request, $id_produit)
    {
        $produits = [];
        if(!$request->session()->exists('produits'))
            $request->session()->put('produits',[]);
        
        $request->session()->push('produits', [$id_produit, $request['url_img']]);
    }

    // Supprime un article du panier
    public function ajaxSupprimerArticle(Request $request,$id_produit)
    {
        if($request->session()->exists('produits'))
        {
            $produits_session = $request->session()->get('produits');
        }else
        {
            return;
        }
        for($i = 0; $i < count($produits_session); $i++)
        {
            if($produits_session[$i][0] != $id_produit)
                $produits[$i] = $produits_session[$i];
        }
        $request->session()->put('produits', $produits);
    }
    
    // Supprime les donnees de la session active
    public function flushSession(Request $request)
    {
        $request->session()->flush();
    }
}
