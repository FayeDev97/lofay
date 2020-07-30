@extends('layouts/app')
@section('content')
    <div class="container">
        <form method="POST" action="/ajouter" enctype="multipart/form-data" class="row">
            @csrf
            <div class="form-group col-6">
                <label for="libelle" class="form-label">Nom du produit</label>
                <input type="text" name="libelle" id="libelle" class="form-control">
            </div>

            <div class="col-6 form-group">
                <label for="categorie">Categorie</label>
                <select name="idCategorie" id="categorie" class="custom-select">
                    @foreach ($categories as $categorie)
                        <option type="radio"  value="{{$categorie->id}}" class="">{{$categorie->categorie}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-6">
                <label for="prixInit" class="form-label">Prix</label>
                <input type="number" name="prixInit" id="prixInit" class="form-control">
            </div>

            <div class="form-group col-6">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="" class="form-control p-1 btn-secondary rounded">
            </div>
        <input type="hidden" name="id_fournisseur" value="{{Auth::id()}}">
            <input type="submit" value="Valider" class="btn-primary form-control">
        </form>
    </div>
@endsection