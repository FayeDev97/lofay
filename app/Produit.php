<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produit';
    function user()
    {
        return $this->belongsTo('App\User');
    }
}
