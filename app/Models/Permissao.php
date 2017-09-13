<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
     //
    protected $table = 'permissaos';
    
    public function usuario(){
        
        return $this->hasOne('App\Models\Usuario');
    }
    
}
