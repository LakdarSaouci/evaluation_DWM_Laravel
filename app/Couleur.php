<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
    protected $fillable = ['marque', 'couleur_id', 'annee'];

    public function piano()
    {
        return $this->hasMany('App\Piano');
    }
}
