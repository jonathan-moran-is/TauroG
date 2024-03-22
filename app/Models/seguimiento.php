<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguimiento extends Model
{
    use HasFactory;

    protected $guarded = []; 


    //Relacion muchos a muchos
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function companies(){
        return $this->belongsTo('App\Models\Companies');
    }
    public function client(){
        return $this->belongsTo('App\Models\client');
    }
}
