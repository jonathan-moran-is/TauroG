<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_users extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function company(){
        return $this->hasOne('App\Models\Companies');
    }
}
