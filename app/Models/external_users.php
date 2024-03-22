<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class external_users extends Model
{
    use HasFactory;
    
    protected $guarded = []; 

    //Relacion uno a muchos
    public function invitations(){
        return $this->hasOne('App\Models\invitations');
    }
}
