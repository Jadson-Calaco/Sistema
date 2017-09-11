<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    //
    protected $table='tab_plano';
    
    public function usuario(){
        
        return $this->hasOne('App\Models\Usuario');
    }
}
