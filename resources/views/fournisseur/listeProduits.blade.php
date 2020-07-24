@extends('layouts/app')
@section('content')
    <div class="container">
        @if (count($produits) > 0)
            @foreach ($produits as $produit)
                <div class="container border m-2 p-4 row">
                    <div class="col-6">
                        <img src="{{Storage::url('produits/' . $produit->image)}}"  height="200px" alt="som' supposed to be here">
                    </div>
                    <div class="col-6">
                        <span>Libelle: {{$produit->libelle}}</span> <br>
                        <span>prix:   {{$produit->prixInit}}</span> <br>
                    </div>
                    <form action="supprimerProduit/{{$produit->id}}" method="POST" class="mt-2 ml-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    
                    <button class="btn btn-secondary mt-2 ml-3">
                        <a href="modifierProduit/{{$produit->id}}">Modifier</a>
                    </button>
                </div>
            @endforeach
        @else
            <div class="container">
                Il n'y a pas d'article.
            </div>
        @endif
    </div>
@endsection