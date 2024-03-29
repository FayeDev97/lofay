@extends('layouts.app')

@section('content')
<span id="top"></span>
<div class="container-fluid row">
    {{-- Bare lateral --}}
    <div class="side-bar p-0 pt-5 d-inline-block bg-light sticky-top col h-50" id="side-bar">  
        <div id="panier-btn" class="side-bar-items m-0 mb-4 ml-1 p-1 py-2 row flex-column align-items-center border rounded">
            <svg width="1.9em" height="1.9em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
            <span>Panier</span>
        </div>
        <div id="categorie" class="side-bar-inner-items border rounded shadow position-absolute float-right p-2 bg-light row flex-column">
            @foreach ($categories as $categorie)
                <div class="p-1 m-2 col">
                    <a href="" class="text-black">{{$categorie->categorie}}</a>
                </div>
            @endforeach
        </div>
        <div id="categorie-btn" class="side-bar-items m-0 mb-4 ml-1 p-1 py-2 row flex-column align-items-center border rounded">
            <svg width="1.9em" height="1.9em" viewBox="0 0 16 16" class="bi bi-grid-3x3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13zM1.5 1a.5.5 0 0 0-.5.5V5h4V1H1.5zM5 6H1v4h4V6zm1 4V6h4v4H6zm-1 1H1v3.5a.5.5 0 0 0 .5.5H5v-4zm1 0h4v4H6v-4zm5 0v4h3.5a.5.5 0 0 0 .5-.5V11h-4zm0-1h4V6h-4v4zm0-5h4V1.5a.5.5 0 0 0-.5-.5H11v4zm-1 0H6V1h4v4z"/>
            </svg>
            <span>Categorie</span>
        </div>
        <hr class="hr mb-4 ml-2 border rounded">
        <a href="/boutiques" class="text-dark side-bar-items m-0 mb-4 ml-1 p-1 py-2 row flex-column align-items-center border rounded">
            <svg width="1.9em" height="1.9em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM3.12 1.175A.5.5 0 0 1 3.5 1h9a.5.5 0 0 1 .38.175l2.759 3.219A1.5 1.5 0 0 1 16 5.37v.13h-1v-.13a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.13H0v-.13a1.5 1.5 0 0 1 .361-.976l2.76-3.22z"/>
                <path d="M2.375 6.875c.76 0 1.375-.616 1.375-1.375h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 1 0 2.75 0h1a2.375 2.375 0 0 1-4.25 1.458 2.371 2.371 0 0 1-1.875.917A2.37 2.37 0 0 1 8 6.958a2.37 2.37 0 0 1-1.875.917 2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.5h1c0 .76.616 1.375 1.375 1.375z"/>
                <path d="M4.75 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                <path fill-rule="evenodd" d="M2 7.846V7H1v.437c.291.207.632.35 1 .409zm-1 .737c.311.14.647.232 1 .271V15H1V8.583zm13 .271a3.354 3.354 0 0 0 1-.27V15h-1V8.854zm1-1.417c-.291.207-.632.35-1 .409V7h1v.437zM3 9.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5V15H7v-5H4v5H3V9.5zm6 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4zm1 .5v3h2v-3h-2z"/>
            </svg>
            <span>Boutique</span>
        </a>
        <a href="/fournisseurs" class="text-dark side-bar-items m-0 mb-4 ml-1 p-1 py-2 row flex-column align-items-center border rounded">
            <svg width="1.9em" height="1.9em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
            </svg>
            <span>Fournisseur</span>
        </a>
        <a href="/FAQ" class="text-dark side-bar-items m-0 mb-4 ml-1 p-1 py-2 row flex-column align-items-center border rounded">
            <svg width="1.9em" height="1.9em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M5.25 6.033h1.32c0-.781.458-1.384 1.36-1.384.685 0 1.313.343 1.313 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.007.463h1.307v-.355c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.326 0-2.786.647-2.754 2.533zm1.562 5.516c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
            </svg>
            <span>FAQ</span>
        </a>
    </div>
    {{-- Main Container --}}
    <div class="col-11">
        {{-- Panier --}}
        <div class="container">
            <div id="panier" class="container border rounded shadow  bg-light row d-none">
                <span>Vide<span>
            </div>
        </div>
        {{-- Bare de recherche --}}
        <div class="container-fluid border rounded my-4 py-2">
            <x-barre-de-recherche/>
        </div>
        {{-- Resultat recherche --}}
        <div class="container-fluid border rounded my-4 py-2 d-none row" id="resultat"></div>
        {{-- Produits --}}
        <div class="container-fluid border rounded my-4">
            <x-produits/>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function() 
    {
        // Variables goblales
        let panier        = $('#panier');
        let categorie     = $('#categorie');
        let resultat      = $('#resultat');
        let recherche     = $('#recherche');
        let btn_recherche = $('#btn-recherche');
        let panier_vide   = true; 
        let article_actif = null;
        ajaxGetPanier();
        
        // -------------------------------------------
        // -----------------Fonctions-----------------
        
        // Cacher/Afficher les informations d'un produit
        function toggleInfoProduit(produit) 
        {
            cacherPanier();
            cacherCategorie();
            produit.parent().toggleClass('col-2 col-4');
            produit.toggleClass('shadow');
            produit.children().toggleClass('col-12 col-5 mx-2');
            produit.children().children('.info_produit').toggleClass('d-none');
            produit.children().children('.produit_exit').toggleClass('d-none');
        }
        function toggleProduit(produit)
        {
            if(article_actif != null)
            {
                if(article_actif.children().children('input').val() == produit.children().children('input').val())
                {
                    toggleInfoProduit(produit);
                    article_actif = null;
                }else
                {
                    toggleInfoProduit(article_actif);
                    toggleInfoProduit(produit);
                    article_actif = produit;
                }
            }else
            {
                toggleInfoProduit(produit);
                article_actif = produit;
            }
        }
        // Cache le panier
        function cacherPanier()
        {
            if(panier.css('display') != 'none')
                panier.toggleClass('d-none');
        }
        // Cache les categories de produit
        function cacherCategorie()
        {
            if(categorie.css('display') != 'none')
                categorie.toggle();
        }
        // Ajoute un produit au panier
        function ajouterProduitPanier(produit) 
        {
            if(panier_vide)
                panier.children().remove();
            panier_vide = false;

            //Recuperer les buttons
            let btn_supprimer = '<button class="btn btn-danger btn-sm supprimer_produit">'+
                                    'supprimer'+
                                '</button>';
            //Recuperer id et url image du produit
            let input_id = produit.children('.row').children('input');
            let url_img = produit.children('.py-2').children('img').attr('src');
            // Effectuer requete ajax
            ajaxAjouterProduit(input_id.val(), url_img);
            
            // Enlever infos du produit
            produit.children('.row')
                   .remove();
            produit.children().children('.prix')
                   .remove();
            // Reduire la taille de l image
            produit.children().children('img').css('height','70px');
            // Ajouter les buttons
            produit.children().toggleClass('col-5 d-flex flex-column justify-content-center')
                   .append(btn_supprimer)
                   .append(input_id);
            // Modifier quelques classes
            produit.toggleClass('produit shadow col-1 px-0 mx-2');
            // Ajouter l element creer au panier
            $('#panier').append(produit);
        }
        // Enleve un produit du panier
        function supprimerProduitPanier(produit)
        {
            ajaxSupprimerProduit(
                produit.children().children('input').val()
            );
            produit.remove();

            if(panier.children().length < 1 )
            {
                panier.append('<span>Vide</span>');
                panier_vide = true;
            }
        }

        // --------------------------------------
        // -----------------Ajax-----------------

        function ajaxAjouterProduit(idProduit, urlImage)
        {
            $.ajax({
                method  :'GET',
                url     :'/ajaxAjouterArticle/'+idProduit,
                data    : {'url_img' : urlImage},
                dataType:'html'
            })
            .fail(function()
            {
                alert('erreur: impossible d ajouter article');
            });
        }
        
        function ajaxSupprimerProduit(idProduit)
        {
            $.ajax({
                method:'GET',
                url   :'ajaxSupprimerArticle/'+idProduit,
            })
            .fail(function()
            {
                alert('erreur suppression');
            })
        }
        function ajaxGetPanier()
        {
            $.ajax({
                method  :'GET',
                url     :'/ajaxGetPanier',
                dataType:'json'
            }).done(function(data)
            {
                if(!data || data.invalid)
                {
                    return;
                }

                panier.children().remove();
                panier_vide = false;

                data.forEach(produit => 
                {
                    let element = '<div class="container border m-0 m-2 p-0 row col-1 px-0">'+
                                 '<div class="py-2 mx-2 d-flex flex-column justify-content-center">'+
                                    '<img src="'+produit[1]+'" height="70px" alt="image produit">'+
                                    '<button class="btn btn-danger btn-sm supprimer_produit">supprimer</button>'+
                                    '<input type="hidden" name="idProduit" value="'+produit[0]+'">'+
                                '</div>'+
                                '</div>';
                    panier.append(element);
                });
                // console.log(data);
            }).fail(function()
            {
                console.log('fail');
            })
        }
        function ajaxRechercheProduit(nomProduit)
        {
            $.ajax({
                method  :'GET',
                url     :'/ajaxRechercheProduit',
                data    :{'nomProduit':nomProduit},
                dataType:'json'
            })
            .done(function(data)
            {
                if(!data || data.invalid)
                {
                    console.log('not found');
                    return;
                }
                for (let index = 0; index < data.length; index++) 
                {
                            let element = '<div class="col-2">'+
                                        '<div class="container border m-0 my-2 p-0 row produit">'+
                                        '<div class="col-12 py-2">'+
                                        '<img src="/storage/produits/'+data[index].image+'" height="100px" alt="image produit">'+
                                        '<div class="prix">'+
                                        '<span class="font-weight-bold">'+data[index].libelle+'</span> <br>'+
                                        '<span class="">'+data[index].prixInit+' FCFA</span> <br>'+
                                        '</div>'+
                                        '</div>'+
                                        '<div class="col-12 row m-0 p-0">'+
                                        '<input type="hidden" name="idProduit" value="'+data[index].id+'">'+
                                        '<div class="info_produit col d-none row bg-secondary text-white p-0">'+
                                        '<div class="col-12">'+
                                        'info: alpha<br>'+
                                        'info: beta<br>'+
                                        'info: omega<br>'+
                                        '</div>'+
                                        '<div class="col-12 p-2">'+
                                        '<form action="/acheter/'+data[index].id+'" method="POST" class="my-2">'+
                                        '@csrf'+
                                        '<input type="hidden" name="idProduit" value="'+data[index].id+'">'+
                                        '<button type="submit" class="btn btn-success form-control">Acheter</button>'+
                                        '</form>'+
                                        '<button class="btn btn-primary form-control ajouter_produit">Ajouter au panier</button>'+
                                        '</div></div></div></div></div>';
                            resultat.children().remove();
                            resultat.append(element);     
                }
                
                // console.log(data);
            })
            .fail(function()
            {
                console.log('fail');
            })
        }
        // --------------------------------------------
        // -----------------Evenements-----------------
       
        //---------Listeners barre lateral---------
        $('#categorie-btn').click(function()
        {
            cacherPanier();
            categorie.toggle();
        });

        $('#panier-btn').click(function()
        {
            cacherCategorie()
            panier.toggleClass('d-none');
        });
        
        // ---------manipulation Produit--------- 
        // Afficher/cacher les informations du produit apres click
        $('.produit').click(function()
        {
            let produit = $(this);
            toggleProduit(produit);
        });

        //---------Gestion du panier---------
        //ajoute un produit au panier
        $('.ajouter_produit').click(function()
        {        
            let produit = $(this).parent().parent().parent().parent()
                                .clone();
            ajouterProduitPanier(produit);
        });
        // supprime un produit du panier
        panier.click(function()
        {
            let target  = $(event.target);
            let produit = target.parent().parent();
            if(target.hasClass('supprimer_produit'))
            {
                supprimerProduitPanier(produit); 
            }
        });
        //---------Gestion Barre de recherche---------
        btn_recherche.click(function()
        {
            resultat.removeClass('d-none');
            let nom_produit = recherche.val();
            ajaxRechercheProduit(nom_produit);
        });
        //---------Gestion resultat de recherche
        resultat.click(function()
        {
            let target = $(event.target);
            toggleProduit(target.closest('.produit'));
        });
    });
</script>
@endsection

@section('css')
<style>
    /*icone svg source:svgicons.sparkk.fr */
    #barre-de-recherche, #barre-de-recherche input, #barre-de-recherche select
    {
        font-size: 0.9em!important;
    }
    .svg-icon {
    width: 1.4em;
    height: 1.4em;
    }

    .svg-icon path,
    .svg-icon polygon,
    .svg-icon rect {
    fill: red;
    }

    /*  */
    a
    {
        color: whitesmoke;
    }
    a:hover
    {
        color:white;
        text-decoration: none;
    }
    #categorie a
    {
        color: black;
    }
    #categorie a:hover
    {
        color:black;
        text-decoration: none;
    }

    /* side-bar */
    .side-bar
    {
        /* padding-top: 30px !important; */
    }
    .side-bar-items:hover, .produit_exit:hover
    {
        cursor: pointer;
    }
    .side-bar-inner-items
    {
        display: none;
        margin-left: 100px !important;
        /* background-color: lightgreen; */
    }

    /* Produit */
    
    .produit
    {
        font-size: 0.9em!important;
        min-height: 180px!important;
        /* margin-left: 110px!important; */
    }
    .produit:hover
    {
        cursor: pointer;
        box-shadow: -3px 6px 10px -5px rgba(81, 82, 82, 0.616);
        border: 1px solid rgb(199, 199, 199) !important;
        border-radius: 3px;
    }
    .produit button
    {
        font-size: 0.9em!important;
    }
</style>
@endsection