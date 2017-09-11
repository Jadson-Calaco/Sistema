<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionalidade extends Model
{
    protected $table = 'funcionalidades';

    public function usuario(){
        
        return $this->hasOne('App\Models\Usuario');
    }
}
