<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table='tab_disciplina';
    
    //criando relacao entre assunto e disiplinas
    public function assunto(){
        return $this->hasMany('App\Models\Assunto','id_disciplina','id');
    }
    //relacao de disciplina para questao
    public function questao(){
        return $this->hasMany('App\Models\Questoes','id_disciplina','id');
    }
}
