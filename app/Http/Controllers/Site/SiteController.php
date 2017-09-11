<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Noticia;

class SiteController extends Controller
{
   public function index (){       
                
        $principal = \DB::table('tab_noticias')->where('status', 'ativo')
                                               ->where('categoria_id','1')
                                               ->get();
        
        $servico = \DB::table('tab_noticias')->where('status', 'ativo')
                                               ->where('categoria_id','2')
                                               ->get();
        
        $sobre = \DB::table('tab_noticias')->where('status', 'ativo')
                                               ->where('categoria_id','4')
                                               ->limit(1)
                                               ->get(); 

        $planos = \DB::table('tab_plano')->where('status', 'ativo')->get();               
                
        return view('site.home.index')
                ->with('principal',$principal)
                ->with('servico',$servico)
                ->with('planos',$planos)
                ->with('sobre',$sobre);
                
   }
   
   public function planos (){
        return view('site.planos.planos');
   }
   
   public function sobre (){
       return view('site.sobre.sobre'); 
   }
   
   public function cadastro (){
       return view('site.cadastro.cadastro'); 
   }
      
   public function questoes (){
       return view('site.questoes.questoes'); 
   }
}
