@extends('layouts/app')
@section('content')
<div class="container">
    <h3>Modifier Produit</h3>
    <form method="POST" action="/modifier" enctype="multipart/form-data" class="border p-4 rounded">
        @csrf
        <div class="form-group row mb-4">
            <img src="{{Storage::url('produits/'.$produit->image)}}" alt="image" class="">
            <span class="col-12 my-4">Changer Image</span>
            <input type="file" name="image" id="">
        </div>
        <div class="form-group">
            <label for="libelle">Nom du produit</label>
        <input type="text" name="libelle" id="libelle" value="{{$produit->libelle}}">
        </div>

        <div class="form-group">
            @foreach ($categorie=[] as $choix)
                <label for="{{$choix}}">{{$choix}}</label>
                <input type="radio" name="categorie" id="{{$choix}}" value="{{$choix}}">
            @endforeach
        </div>

        <div class="form-group">
            <label for="prixInit">Prix</label>
        <input type="number" name="prixInit" id="prixInit" value="{{$produit->prixInit}}">
        </div>

        {{-- <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="">
        </div> --}}
        <input type="hidden" name="id" value="{{$produit->id}}">
        <input type="submit" value="Valider" class="btn-primary">
    </form>
</div>
@endsection