<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', 'MainController@index');
Route::get('/index', 'MainController@index');
Route::get('/accueil', 'MainController@index');
Route::get('/FAQ','MainController@FAQ');
Route::get('/fournisseurs', 'MainController@fournisseurs');
Route::get('/boutiques', 'MainController@boutiques');

Route::any('/client', 'ClientController@index');
Route::any('/client/index', 'ClientController@index');

Route::get('/fournisseur','FournisseurController@index');
Route::get('/fournisseur/index','FournisseurController@index');

Route::any('/ajouterProduit','FournisseurController@ajouterProduit');

Route::delete('/supprimerProduit/{id_produit}','FournisseurController@supprimerProduit');
Route::get('/modifierProduit/{id_produit}','FournisseurController@modifierProduit');

Route::post('/ajouter','FournisseurController@ajouter');
Route::any('/modifier','FournisseurController@modifier');