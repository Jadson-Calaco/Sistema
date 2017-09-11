<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='tab_usuarios';
    protected $fillable = ['nome', 'cpf', 'plano_id','sexo','data_nasc'];
    
    
    public function endereco(){
      
        return $this->hasOne('App\Models\Endereco');
    }
    
    public function contato(){
      
        return $this->hasMany('App\Models\Contato');
    }    
    
    public function plano()
    {
        return $this->belongsTo('App\Models\Plano','plano_id');
        
    }
    
    public function funcionalidade()
    {
        return $this->belongsTo('App\Models\Funcionalidade', 'funcionalidade_id');
        
    }
    
}
