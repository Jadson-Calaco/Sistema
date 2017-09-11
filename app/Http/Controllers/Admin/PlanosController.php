<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plano;
use Illuminate\Support\Facades\Input;
class PlanosController extends Controller {
    /*     * Visualizando os planos cadastrados no sistema
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        $mostrar_planos = Plano::all();
        return view('admin.planos.planos', compact('mostrar_planos'));
    }

    /**
     * Mostre o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $this->validate($request, [
            'nome_plano' => 'required',
            'quant_questao' => 'required',
            'quant_mes' => 'required',
            'valor' => 'required',
           
        ]);
        
        $planos = new Plano;
        $planos->nome_plano = $request->nome_plano;
        $planos->valor = $request->valor;
        $planos->quant_questao = $request->quant_questao;
        $planos->quant_mes = $request->quant_mes;
        $planos->status = $request->status;
        $status = Input::get('status');
        
        if ($status == '')
            $status = 'inativo';
        else
            $status = 'ativo';

        $planos->status = $status;
        $planos->created_at =$request->created_at;
        $planos->updated_at = $request->updated_at;
        $planos->save();
       //dd($planos);
        //return 'store';
        return redirect('admin/planos')->with('message','Cadastro realizado com sucesso');
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
    public function edit($id_plano) {
        $plano = Plano::find($id_plano);
        //dd($id_plano);
        if (!$plano) {
            abort(404);
        }

        return view('admin.planos.edit_planos', compact('plano'));
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
            'nome_plano' => 'required',
            'quant_questao' => 'required',
            'quant_mes' => 'required',
            'valor' => 'required',
          
        ]);
        
        $planos = Plano::find($id);
        $planos->nome_plano = $request->nome_plano;
        $planos->valor = $request->valor;
        $planos->quant_questao = $request->quant_questao;
        $planos->quant_mes = $request->quant_mes;
        $planos->status = $request->status;
        $status = Input::get('status');
        
        if ($status == '')
            $status = 'inativo';
        else
            $status = 'ativo';

        $planos->status = $status;
        $planos->created_at =$request->created_at;
        $planos->updated_at = $request->updated_at;
        $planos->save();
       // return 'updadte';
        return redirect('admin/planos')->with('message','Cadastro Atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        $planos = Plano::find($id);
        $planos->delete();
         return redirect('admin/planos')->with('message','Cadastro Excluido com sucesso');
 
    }

}
