<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = []; 

    //Relacion muchos a muchos
    public function clients(){
        return $this->hasOne('App\Models\Clients');
    }
    public function payments(){
        return $this->belongsToMany('App\Models\Payments');
    }
}
