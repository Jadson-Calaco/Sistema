<?php

namespace App\Http\Controllers\Admin;

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
       //dd($link);
       return $link ;
   }
   
   public function gerarPdf(Request $request){
       
      $value1 = $request->session()->get('questoesPdf');
      $value2 = $request->session()->get('tamanho');
      
      
       return PDF::load(View::make('site.questoes.pdfimpresso')
                 ->with('tamanho', $value2)
                 ->with('questoes', $value1))->download('my_pdf');
   }
    public function guardarDadosWorld(Request $request){
             
          $dqw=$request->input('questoesPraEnviar');
          $tmw=sizeof($dqw);
        $request->session()->put('questoesWorld', $dqw);
        $request->session()->put('tamanhoW', $tmw);
   
       $link='gerarWorld';
       //dd($link);
       return $link ;
   }
   
    public function gerarWorld(Request $request){
       
      $value1 = $request->session()->get('questoesWorld');
      $value2 = $request->session()->get('tamanhoW');
      
  /*    
      View::make('site.questoes.worldimpresso')
                 ->with('tamanho', $value2)
                 ->with('questoes', $value1);
     
 */
     $wordTest = new \PhpOffice\PhpWord\PhpWord();
     $newSection = $wordTest->addSection();
 
    //$desc1 = "The Portfolio details is a very useful feature of the web page. You can establish your archived details and the works to the entire web community. It was outlined to bring in extra clients, get you selected based on this details.";
              $html=' ';
               for($i=0;$i<$value2;$i++){
                  for($j=0;$j<1;$j++){
                    $html.= '<p>'.$value1[$i][$j].'</p>';                   
                   
                  }
               }

\PhpOffice\PhpWord\Shared\Html::addHtml($newSection, $html);


    //$newSection->addText($desc1, array('name' => 'Tahoma', 'size' => 15, 'color' => 'red'));
 
    $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
    try {
        $objectWriter->save(storage_path('TestWordFile.docx'));
    } catch (Exception $e) {
    }
 
    return response()->download(storage_path('TestWordFile.docx'));
   }
   
   
   

    public function salvarQuestao(Request $request){
            $questoesSelecionadas=$request->input('questoess');
            $tamanho= sizeof($questoesSelecionadas);
            for($i=0;$i<$tamanho;$i++){
                for($j=0;$j<1;$j++){
                   $request->session()->push('questoes', $questoesSelecionadas[$i][$j]);  
                }
            }
            
     }  
         
    public function MostrarSimulado(Request $request){
            $questoesSimulado=$request->session()->get('questoes');
             $tamanho= sizeof($questoesSimulado);
           // dd($questoesSimulado);
             return view('site.questoes.simulado',compact('questoesSimulado','tamanho'));
    }       
 }

