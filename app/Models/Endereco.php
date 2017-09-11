<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table='tab_endereco';
    protected $fillable = ['numero', 'cep', 'bairro','cidade','logradouro','uf','complemento'];
    
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'usuario_id');
        
    }
}
