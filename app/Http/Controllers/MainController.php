<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriesProduit;
use App\User;

class MainController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = CategoriesProduit::all();
        return view('/index',['categories'=>$categories]);
    }
    public function fournisseurs()
    {
        $fournisseurs = User::where('role', 1)->get();
        return view('/fournisseurs', ['fournisseurs' => $fournisseurs]);
    }
    public function boutiques()
    {
        return view('/boutiques');
    }
    public function FAQ()
    {
        return view('/FAQ');
    }
}
