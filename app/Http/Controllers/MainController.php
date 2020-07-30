<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/index');
    }
    public function fournisseurs()
    {
        return view('/fournisseurs');
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
