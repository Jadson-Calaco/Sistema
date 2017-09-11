<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Assunto;
use App\Models\Materia;

class AssuntoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $mostrar_assuntos = Assunto::with('disciplinas')->get();
        $disciplinas = Materia::all();
        //dd($mostrar_assuntos);
        //return 'index';
   return view('admin.assuntos.assuntos', compact('mostrar_assuntos'))->with('disciplinas',$disciplinas);
    }

    public function getAssuntos(Request $request, $id) {
         if ($request->ajax()) {
            $assuntos = Assunto::retornarAssuntos($id);
            return response()->json($assuntos);
        }
        //dd($id);
       // return 'getAssuntos';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'id_disciplina' => 'required',
            'assunto' => 'required',
            'serie' => 'required',
        ]);

        $assuntos = new Assunto;
        $assuntos->id_disciplina = $request->id_disciplina;
        $assuntos->assunto = $request->assunto;
        $assuntos->serie = $request->serie;
        $created_at =date('d/m/Y');

        $assuntos->created_at = $request->created_at;
        $assuntos->updated_at = $request->updated_at;
        /* $status = Input::get('status');

          if ($status == '')
          $status = 'inativo';
          else
          $status = 'ativo';

          $disciplinas->status = $status; */

        $assuntos->save();
        //dd($disciplinas);
        //return 'store';
        return redirect('admin/assuntos')->with('message', 'Cadastro realizado com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $assuntos = Assunto::find($id);
        $disciplinas = Materia::all();
        //dd($id_plano);
        if (!$assuntos) {
            abort(404);
        }

        return view('admin.assuntos.edit_assunto', compact('assuntos'))->with('disciplinas', $disciplinas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'id_disciplina' => 'required',
            'assunto' => 'required',
            'serie' => 'required',
        ]);

        $assuntos = Assunto::find($id);
        $assuntos->id_disciplina = $request->id_disciplina;
        $assuntos->assunto = $request->assunto;
        $assuntos->serie = $request->serie;
        $assuntos->created_at = $request->created_at;
        $assuntos->updated_at = $request->updated_at;
        /*
          $status = Input::get('status');

          if ($status == '')
          $status = 'inativo';
          else
          $status = 'ativo';

          $planos->status = $status; */

        $assuntos->save();
        // return 'updadte';
        return redirect('admin/assuntos')->with('message', 'Cadastro Atualizado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $assuntos = Assunto::find($id);
        $assuntos->delete();
        return redirect('admin/assuntos')->with('message', 'Cadastro Excluido com sucesso');
    }

}
