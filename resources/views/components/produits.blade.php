<div class="container row mt-4">
    @if (count($produits) > 0)
    @foreach ($produits as $produit)
    <div class="col-3">
        <div class="container border m-0 my-2 p-2 py-4 row shadow">
            <div class="col">
                <img src="{{Storage::url('produits/' . $produit->image)}}"  height="200px" alt="som' supposed to be here">
            </div>
            <div class="col-12">
                <span class="align-self-center font-weight-bold"> {{$produit->libelle}}</span> <br>
                <span class="align-self-center"> {{$produit->prixInit}} FCFA</span> <br>
            </div>
            <form action="/acheter" method="POST" class="mt-2 ml-3">
                @csrf
                <input type="hidden" name="idProduit" value="{{$produit->id}}">
                <button type="submit" class="btn btn-primary">Acheter</button>
            </form>
            <form action="/marchander" method="POST" class="mt-2 ml-3">
                @csrf
                <input type="hidden" name="idProduit" value="{{$produit->id}}">
                <button type="submit" class="btn btn-secondary px-4 ml-2">Voir</button>
            </form>
        </div>
    </div>
    @endforeach
    @else
    <div class="container">
        Il n'y a pas d'article.
    </div>
    @endif
</div>