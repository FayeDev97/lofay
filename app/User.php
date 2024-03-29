<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','numero','adresse'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function produits()
    {
        return $this->hasMany('App\Produit');
    }
    function estClient()
    {
        if($this->role == 2)
        {
            return true;
        }else
        {
            return false;
        }
    }
    function estFournisseur()
    {
        if($this->role == 1)
        {
            return true;
        }else
        {
            return false;
        }
    }
    function estAdmin()
    {
        if($this->role == 0)
        {
            return true;
        }else
        {
            return false;
        }
    }
}
