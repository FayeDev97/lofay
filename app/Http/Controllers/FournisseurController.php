<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produit;
use App\CategoriesProduit;

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
        $this->estFournisseur();
        $produits = Produit::where('id_fournisseur',auth()->id())
                            ->orderBy('created_at','desc')
                            ->get();
        return view("fournisseur/index", ['produits' => $produits]);
    }
    function ajouterProduit()
    {
        $this->estFournisseur();
        $categories = CategoriesProduit::all();
        return view("fournisseur/ajouterProduit",['categories' => $categories]);
    }
    function ajouter(Request $request)
    {
        $this->estFournisseur();
        $request->validate(
            [
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'libelle' =>'required',
                'prixInit' =>'required',
                'idCategorie' =>'required',
            ],
            [
            'libelle.required'=>'Veillez ajouter le nom du produit',
            ]
        );

        $produit = new Produit();
        $produit->libelle        = $request['libelle'];
        $produit->prixInit       = $request['prixInit'];
        $produit->idCategorie      = $request['idCategorie'];
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

        return redirect("/fournisseur");
    }
    function supprimerProduit($id_produit)
    {
        $this->estFournisseur();
        $id_fournisseur = auth()->id();
        $produit = Produit::find($id_produit);
        $this->estProprietaire($id_fournisseur, $produit);
        
        if(Storage::exists('produits/'.$produit->image))
            Storage::delete('produits/'.$produit->image);
            
        $produit->delete();
        return redirect("fournisseur/index");
    }
    function modifierProduit($id_produit)
    {
        $this->estFournisseur();
        $produit = Produit::find($id_produit);
        $this->estProprietaire(auth()->id(), $produit);

        return view("fournisseur/modifierProduit", ['produit' => $produit]);
    }
    
    function modifier(Request $request)
    {
        $this->estFournisseur();
        $produit = Produit::find($request['id_produit']);
        $this->estProprietaire(auth()->id(), $produit);

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
        return redirect('/fournisseur');
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
    private function estFournisseur()
    {
        if(auth()->user()->role != 1)
            return view('/index');
    }
    private function estProprietaire($id_fournisseur, $produit)
    {
        if($id_fournisseur != $produit->id_fournisseur)
            return view('fournisseur/index');
    }
}
