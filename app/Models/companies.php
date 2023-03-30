<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
    public function clients(){
        return $this->belongsToMany('App\Models\Clients');
    }
    public function payments(){
        return $this->belongsToMany('App\Models\Payments');
    }
}
