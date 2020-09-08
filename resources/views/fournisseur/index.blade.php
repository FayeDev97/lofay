@extends('layouts/app')
@section('content')
    <div class="container-fluid p-0 m-0 row">
        <div class="col-9">
            <div class="container row">
                <div class="container py-2 mb-2">
                    <a href="/ajouterProduit" class="btn btn-lg btn-primary">Ajouter un produit</a>
                </div>
                @if (count($produits) > 0)
                    @foreach ($produits as $produit)
                    <div class="col-4 my-1">
                        <div class="container rounded shadow border m-0 p-2 py-4 row">
                            <div class="col">
                                <img src="{{Storage::url('produits/' . $produit->image)}}"  height="200px" alt="som' supposed to be here">
                            </div>
                            <div class="col-12">
                                <span class="align-self-center font-weight-bold">{{$produit->libelle}}</span> <br>
                                <span class="align-self-center">{{$produit->prixInit}}</span> <br>
                            </div>
                            <form action="/supprimerProduit/{{$produit->id}}" method="POST" class="mt-2 ml-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                            <button class="btn btn-secondary mt-2 ml-3">
                                <a href="/modifierProduit/{{$produit->id}}">Modifier</a>
                            </button>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="container">
                        Il n'y a pas d'article.
                    </div>
                @endif
            </div>
        </div>
        <div class="col-3 border m-0 p-4 shadow" >
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <span>Panel</span>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled row ">
                            <li class="col-12 m-2"><a href="" class="text-dark h5">Mes Produits</a></li>
                            {{-- <li class="col-12 m-2"><a href="/ajouterProduit" class="text-dark h5">Ajouter un Produit</a></li> --}}
                            <hr class="bg-dark border w-100">
                            <li class="col-12 m-2"><a href="" class="text-dark h5">Ma Boutique</a></li>
                            <li class="col-12 m-2"><a href="" class="text-dark h5">Ventes</a></li>
                            <hr class="bg-dark border w-100">
                            <li class="col-12 m-2"><a href="" class="text-dark h5">Parametres</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <hr class="hr">
            <div class="card">
                <div class="card-header">
                    <span>Transactions Recentes</span>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        @foreach ($items = [1,2,3,4] as $item)
                            <li class="text-dark">Message {{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection