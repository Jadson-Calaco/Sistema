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
    //protected $questoesPdf;
    //protected $tamanhoQuestoesPdf;
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
   
   public function guardarDadosPdf(Request $request){
     
          $dq=$request->input('questoesPraEnviar');
          $tm=sizeof($dq);
        $request->session()->put('questoesPdf', $dq);
        $request->session()->put('tamanho', $tm);
   
       $link='gerarPdf';
       return $link ;
   }
   
   public function gerarPdf(Request $request){
      $value1 = $request->session()->get('questoesPdf');
      $value2 = $request->session()->get('tamanho');
      
      
       return PDF::load(View::make('site.questoes.pdfimpresso')
                 ->with('tamanho', $value2)
                 ->with('questoes', $value1))->download('my_pdf');
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

