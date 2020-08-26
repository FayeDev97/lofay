<div class="container row mt-4">
    @if (count($produits) > 0)
    @foreach ($produits as $produit)
    <div class="col-2">
        <div class="container border m-0 my-2 p-0 row produit">
            <div class="col-12 py-2">
                {{-- <span class="col-12 d-flex justify-content-end m-0 p-0">
                    <svg class="svg-icon produit_exit d-none" viewBox="0 0 20 20">
                        <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                    </svg>
                </span> --}}
                <img src="{{Storage::url('produits/' . $produit->image)}}"  height="100px" alt="image produit">
                <div class="prix">
                    <span class="font-weight-bold"> {{$produit->libelle}}</span> <br>
                    <span class=""> {{$produit->prixInit}} FCFA</span> <br>
                </div>
            </div>
            <div class="col-12 row m-0 p-0">
                <input type="hidden" name="idProduit" value="{{$produit->id}}">
                <div class="info_produit col d-none row bg-secondary text-white p-0">
                    <div class="col-12">
                        info: alpha<br>
                        info: beta<br>
                        info: omega<br>
                    </div>
                    <div class="col-12 p-2">
                        <form action="/acheter/{{$produit->id}}" method="POST" class="my-2">
                            @csrf
                            <input type="hidden" name="idProduit" value="{{$produit->id}}">
                            <button type="submit" class="btn btn-success form-control">Acheter</button>
                        </form>
                        <button class="btn btn-primary form-control ajouter_produit">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="container">
        Il n'y a pas d'article.
    </div>
    @endif
</div>
