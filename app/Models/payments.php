<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
    public function clients(){
        return $this->belongsToMany('App\Models\Clients');
    }
    public function companies(){
        return $this->belongsToMany('App\Models\Companies');
    }
    public function suscriptions(){
        return $this->belongsToMany('App\Models\Suscriptions');
    }
}
