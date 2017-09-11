<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assunto extends Model {

    protected $table = 'tab_assunto';

    public static function retornarAssuntos($id) {
        return Assunto::where('id_disciplina', '=', $id)->get();
    }

    public static function retornarAssuntosPorSerieEMateria($idmateria, $serie) {
        return Assunto::where('id_disciplina', '=', $idmateria)->where('serie', "=", $serie)->get();
    }

    //criando relacao entre assunto e disiplinas
    public function disciplinas() {
        return $this->hasOne('App\Models\Materia', 'id', 'id_disciplina');
    }

    //criando relacao entre assunto e questoes
    public function questoes() {
        return $this->hasMany('App\Models\Questoes', 'id_disciplina');
    }

}
