<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questoes extends Model {

    protected $table = 'tab_questoes';

    public static function retornarQuestoes($idassunto) {
        return Questoes::where('id_assunto', '=', $idassunto)->get();
    }

    //relacao de questao para assuntos
    public function assuntos() {
        return $this->hasOne('App\Models\Assunto', 'id');
    }

    //relacao de questao para disciplina
    public function disciplinas() {
        return $this->hasOne('App\Models\Materia', 'id');
    }

}
