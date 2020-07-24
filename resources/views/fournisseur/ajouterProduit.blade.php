@extends('layouts/app')
@section('content')
    <div class="container">
        <form method="POST" action="/ajouter" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="libelle">Nom du produit</label>
                <input type="text" name="libelle" id="libelle">
            </div>

            <div class="form-group">
                @foreach ($categorie=[] as $choix)
                    <label for="{{$choix}}">{{$choix}}</label>
                    <input type="radio" name="categorie" id="{{$choix}}" value="{{$choix}}">
                @endforeach
            </div>

            <div class="form-group">
                <label for="prixInit">Prix</label>
                <input type="number" name="prixInit" id="prixInit">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="">
            </div>
        <input type="hidden" name="id_fournisseur" value="{{Auth::id()}}">
            <input type="submit" value="Valider" class="btn-primary">
        </form>
    </div>
@endsection