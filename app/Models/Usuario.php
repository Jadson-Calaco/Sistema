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
    
    public function permissao()
    {
        return $this->belongsTo('App\Models\Permissao', 'permissao_id');
        
    }
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
        
    }
        
}
