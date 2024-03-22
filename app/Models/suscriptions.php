<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suscriptions extends Model
{
    use HasFactory;

    protected $guarded = []; 

    //Relacion Uno a Muchos
    public function payments(){
        return $this->belongsToMany('App\Models\Payments');
    }
}
