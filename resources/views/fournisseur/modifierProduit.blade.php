@extends('layouts/app')
@section('content')
<div class="container">
    <h3>Modifier Produit</h3>
    <form method="POST" action="/modifier" enctype="multipart/form-data" class="border p-4 rounded row">
        @csrf
        <div class="form-group col-12 mb-4">
            <div class="row align-items-center justify-content-center">
                <img src="{{Storage::url('produits/'.$produit->image)}}" height="250px" alt="image" class="">
            </div>
        </div>

        <div class="form-group col-6">
            <label for="libelle" class="form-label">Nom du produit</label>
            <input type="text" name="libelle" id="libelle" class="form-control" value="{{$produit->libelle}}">
        </div>

        <div class="col-6 form-group">
            <label for="categorie">Categorie</label>
            <select name="idCategorie" id="categorie" class="custom-select">
                @foreach (App\CategoriesProduit::all() as $categorie)
                    <option type="radio"  value="{{$categorie->id}}" class="">{{$categorie->categorie}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-6">
            <label for="prixInit" class="form-label">Prix</label>
            <input type="number" name="prixInit" id="prixInit" class="form-control" value="{{$produit->prixInit}}">
        </div>

        <div class="form-group col-6">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="" class="form-control p-1 btn-secondary rounded">
        </div>
    <input type="hidden" name="id_produit" value="{{$produit->id}}">
        <input type="submit" value="Valider" class="btn-primary form-control">
    </form>
</div>
@endsection