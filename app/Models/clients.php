<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
    public function companies(){
        return $this->belongsToMany('App\Models\Companies');
    }
    public function payments(){
        return $this->belongsToMany('App\Models\Payments');
    }
}
