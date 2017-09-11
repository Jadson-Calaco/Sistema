<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Questoes;
use App\Models\Assunto;
use App\Models\Materia;
use Illuminate\Support\Facades\DB;
class QuestaoController extends Controller {
    
    public function index() {
       // $mostrar_questoes = Questoes::with('assuntos')->get();
        
        $mostrar_questoes = DB::table('tab_disciplina AS D')
                ->join('tab_assunto AS A','D.id', '=','A.id_disciplina')
                ->join('tab_questoes AS Q','.id_assunto','=','A.id')->get();
                    $disciplinas = Materia::all();
                    
                    /*foreach ($mostrar_questoes as $p){
                       echo "".$p->id."<br>";
                    }
                dd($mostrar_questoes);*/
        return view('admin.questoes.questoes', compact('mostrar_questoes'))->with('disciplinas', $disciplinas);
    }

    public function getAssuntos(Request $request, $id_disciplina) {
        if ($request->ajax()) {
            $assuntos = Assunto::retornarAssuntos($id_disciplina);
            //dd($assuntos);
            return response()->json($assuntos);
        }
    }

    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'assunto' => 'required',
            'id_disciplina' => 'required',
            'texto' => 'required',
        ]);

        $questao = new Questoes;
        $questao->id_assunto = $request->assunto;
        $questao->id_disciplina = $request->id_disciplina;
        $questao->enunciado = $request->texto;
        $questao->created_at = $request->created_at;
        $questao->updated_at = $request->updated_at;
        /* $status = Input::get('status');

          if ($status == '')
          $status = 'inativo';
          else
          $status = 'ativo';

          $disciplinas->status = $status; */

        $questao->save();
        //dd($disciplinas);
        //return 'store';
        return redirect('admin/questoes')->with('message', 'Cadastro realizado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        $questoes = DB::table('tab_disciplina AS D')
                ->join('tab_assunto AS A','D.id', '=','A.id_disciplina')
                ->join('tab_questoes AS Q','.id_assunto','=','A.id')
                ->where('Q.id','=',$id)->get();
              
        foreach ($questoes as $p){
                       echo "".$p->id."<br>";
                    }
                  
        dd($questoes);
        if (!$questoes) {
            abort(404);
        }
           // return 'editando questoes';
        return view('admin.questoes.edit_questao', compact('questoes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        return 'updade de questoes';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
         $questao = Questoes::find($id);
        $questao->delete();
        return redirect('admin/questoes')->with('message', 'Cadastro Excluido com sucesso');
    }

}
