<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use Illuminate\Support\Facades\Storage;

class FournisseurController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index()
    {
        return view("fournisseur/index");
    }
    function listeProduits()
    {
        $produits = Produit::all();

        return view("fournisseur/listeProduits", ['produits' => $produits]);
    }
    function ajouterProduit()
    {
        return view("fournisseur/ajouterProduit");
    }
    function ajouter(Request $request)
    {
        $request->validate(
            [
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'libelle' =>'required',
                'prixInit' =>'required',
            ],
            [
            'libelle.required'=>'Veillez ajouter le nom du produit',
            ]
        );

        $produit = new Produit();
        $produit->libelle        = $request['libelle'];
        $produit->prixInit       = $request['prixInit'];
        $produit->id_fournisseur = $request['id_fournisseur'];
        
        if($request->file('image'))
        {
            $nomImage = 'img' . time() . $request->file('image')->getClientOriginalName();
            $cheminImage = $request->file('image')->storeAs('produits/', $nomImage, 'public');
            $request->file('image')->store($cheminImage);
        }else
        {
            $file = 'pasDimage.jpg';
        }
        $produit->image = $nomImage;
        $produit->save();

        return redirect("listeProduits");
    }
    function supprimerProduit($idProduit)
    {
        $produit = Produit::find($idProduit);
        
        if(Storage::exists('produits/'.$produit->image))
            if(Storage::delete('produits/'.$produit->image))
                $produit->delete();
        
        return redirect("listeProduits");
    }
    function modifierProduit($idProduit)
    {
        $produit = Produit::find($idProduit);
        return view("fournisseur/modifierProduit", ['produit' => $produit]);
    }
    
    function modifier(Request $request)
    {
        $produit = Produit::find($request['id']);

        if($request->file('image'))
        {
            $nomImage = 'img' . time() . $request->file('image')->getClientOriginalName();
            $cheminImage = $request->file('image')->storeAs('produits', $nomImage, 'public');
            $request->file('image')->store($cheminImage);
            
            if(Storage::exists('produit/'.$produit->image))
                Storage::delete('produit/'.$produit->image);
                
            $produit->image = $nomImage;
        }

        $produit->libelle = $request['libelle'];
        $produit->prixInit = $request['prixInit'];
        $produit->save();
        return redirect('listeProduits');
    }

    private function filtrePrix(String $prix)
    {
        $len = strlen($prix);
        if($len > 3)
        {
            for($i = -3; abs($i) < $len; $i-=3)
            {
                $prix = substr($prix, 0, $i) . substr($prix, strlen($prix) + --$i, 0);
            }
        }
        return $prix;
    }
}
