<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $guarded = []; 


    //Relacion muchos a muchos
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function companies(){
        return $this->belongsToMany('App\Models\Companies');
    }
    public function payments(){
        return $this->belongsToMany('App\Models\Payments');
    }
}
