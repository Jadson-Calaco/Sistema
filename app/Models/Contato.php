<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
     protected $table='tab_contato_user';
     protected $fillable = ['email','telefone'];
     
     public function usuario()
     {
         return $this->belongsTo('App\Models\Usuario');
     }
}
