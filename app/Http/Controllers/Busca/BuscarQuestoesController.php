<?php

namespace App\Http\Controllers\Busca;

use PDF;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Materia;
use App\Models\Assunto;
use App\Models\Questoes;


class BuscarQuestoesController extends Controller
{
    private  $materia;
    private  $questoes;
    private  $questoesSelecionadas; 

    public function _construct(Materia $materia, Questoes $questoes){
       $this->materia=$materia;
       $this->questoes=$questoes;
   }
   
   public function trazerMaterias(Request $request){
         $materias= Materia::all();
       
        return view('site.questoes.buscarquestoes',compact('materias'));
    }
    
     public function getAssuntos(Request $request,$id){
       if($request->ajax()){
           $assuntos=Assunto::retornarAssuntos($id);
           return response()->json($assuntos);
       }
   }
    public function getAssuntosPorSerieEMateria(Request $request,$idmateria,$serie){
       if($request->ajax()){
           $assuntos=assunto::retornarAssuntosPorSerieEMateria($idmateria, $serie);
           return response()->json($assuntos);
       }
   }
     public function getQuestoes(Request $request){
        
        
         $idassunto=$request->input('assunto');
        
         $questoess=Questoes::retornarQuestoes($idassunto);
          		  
              
         return view('site.questoes.questoesencontradas',compact('questoess'));
         
   }
   
   public function gerarPdf(Request $request){
     
    
       
        $questoes=$request->input('questoesPraEnviar'); 
        $tamanho= sizeof($questoes);
    
        
   
       /*    return PDF::load(View::make('site.questoes.pdfimpresso')
                 ->with('tamanho',$tamanho)
                 ->with('questoes',$questoes))->download('my_pdf');
       */
     /*   
      return View::make('site.questoes.pdfimpresso')
                 ->with('tamanho',$tamanho)
                 ->with('questoes',$questoes);
      */  
        return view('site.questoes.pdfimpresso', compact('questoes','tamanho'));
      
   }

    public function salvarQuestao(Request $request){
            $questoesSelecionadas=$request->input('questoess');
            $tamanho=$request->input('tamanho');
            $request->session()->push('questoes', $questoesSelecionadas); 
         }  
         
    public function MostrarSimulado(Request $request){
            $questoesSimulado=$request->session()->get('questoes');
             $tamanho= sizeof($questoesSimulado);
            dd($questoesSimulado);
             return view('site.questoes.simulado',compact('questoesSimulado','tamanho'));
         }       
 }

