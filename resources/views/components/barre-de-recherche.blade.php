<div class="container p-2" id="barre-de-recherche">
    <div class="container form-group row">
        <span class="col-1"></span>
        <input type="text" name="produit" id="recherche" class="form-control col-8 mr-2">
        <input type="submit" value="Rechercher" id="btn-recherche" class="btn btn-primary col-2">
        <span class="col-1"></span>
    </div>
    <div class="container row justify-content-center">
        <div class="col-4 form-group m-0">
            <label for="categorie" class="font-weight-bold">Categorie</label>
            <select name="idCategorie" id="categorie" class="custom-select">
                <option type="radio"  value="tout" class="" selected>Tout</option>
                @foreach (App\CategoriesProduit::all() as $categorie)
                    <option type="radio"  value="{{$categorie->id}}" class="">{{$categorie->categorie}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-4 form-group m-0">
            <label for="categorie" class="font-weight-bold">Prix</label>
            <select name="idCategorie" id="categorie" class="custom-select">
                <option type="radio"  value="tout" class="" selected>Tout</option>
                @foreach ( [
                    'moins de 10 000',
                    'moins de 15 000',
                    'moins de 25 000',
                    'moins de 50 000',
                    'moins de 100 000',
                ] as $prix)
                    <option type="radio"  value="{{$prix}}" class="">{{$prix}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>