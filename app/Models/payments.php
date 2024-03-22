<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;

    protected $guarded = []; 

    //Relacion muchos a muchos
    public function client(){
        return $this->hasOne('App\Models\Clients');
    }
    public function company(){
        return $this->hasOne('App\Models\Companies');
    }
    public function suscription(){
        return $this->hasOne('App\Models\Suscriptions');
    }
}
