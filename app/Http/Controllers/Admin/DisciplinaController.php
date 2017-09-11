<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Materia;
class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mostrar_disciplinas = Materia::all();
        return view('admin.disciplinas.disciplinas', compact('mostrar_disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome_disciplina' => 'required',
            'carga_horaria' => 'required',
                       
        ]);
        
        $disciplinas = new Materia;
        $disciplinas->nome = $request->nome_disciplina;
        $disciplinas->carga_horaria = $request->carga_horaria;
        $disciplinas->created_at = $request->created_at;
        $disciplinas->updated_at = $request->updated_at;
       /* $status = Input::get('status');
        
        if ($status == '')
            $status = 'inativo';
        else
            $status = 'ativo';

        $disciplinas->status = $status;*/
        
        $disciplinas->save();
       //dd($disciplinas);
        //return 'store';
        return redirect('admin/disciplinas')->with('message','Cadastro realizado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $disciplinas = Materia::find($id);
        //dd($id_plano);
        if (!$disciplinas) {
            abort(404);
        }

        return view('admin.disciplinas.edit_disciplinas', compact('disciplinas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome_disciplina' => 'required',
            'carga_horaria' => 'required',
        ]);
        
        $disciplinas = Materia::find($id);
         $disciplinas->nome = $request->nome_disciplina;
         $disciplinas->carga_horaria = $request->carga_horaria;
        $disciplinas->created_at =$request->created_at;
         $disciplinas->updated_at = $request->updated_at;
         /*
        $status = Input::get('status');
        
        if ($status == '')
            $status = 'inativo';
        else
            $status = 'ativo';

        $planos->status = $status;*/
         
         $disciplinas->save();
       // return 'updadte';
        return redirect('admin/disciplinas')->with('message','Cadastro Atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $disciplinas = Materia::find($id);
        $disciplinas->delete();
         return redirect('admin/disciplinas')->with('message','Cadastro Excluido com sucesso');
    }
}
