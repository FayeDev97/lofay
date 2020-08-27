<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Produit;

class produits extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $produits = Produit::orderBy('created_at','desc')->get();;

        return view('components.produits', ['produits' => $produits]);
    }
}
