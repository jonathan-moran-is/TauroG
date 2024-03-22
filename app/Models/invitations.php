<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitations extends Model
{
    use HasFactory;

    protected $guarded = []; 

    //Relacion uno a muchos
    public function company(){
        return $this->hasOne('App\Models\companies');
    }

    public function externalUsers(){
        return $this->belongsToMany('App\Models\external_users');
    }
}
