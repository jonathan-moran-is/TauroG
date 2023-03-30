<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suscriptions extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos
    public function suscriptions(){
        return $this->hasOne('App\Models\Payments');
    }
}
