<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table='tab_noticias';
    
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria', 'categoria_id');
        
    }
}
