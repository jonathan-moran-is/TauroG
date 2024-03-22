<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logs extends Model
{
    use HasFactory;

    protected $guarded = []; 

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
    public function payments(){
        return $this->belongsToMany('App\Models\Payments');
    }
}
