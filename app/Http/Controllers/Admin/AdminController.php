<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Http\Requests\Usuario\UsuarioFormRquest;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\Plano;
use App\Models\Permissao;
use Illuminate\Support\Facades\Input;
use File;


class AdminController extends Controller
{  
    private $usuario;
    
    public function __construct(Usuario $usuario) {
        $this-> middleware('auth');
        $this->usuario = $usuario;
    }
    public function index() {
       return view('admin.templates.templateAdmin');
    }
   public function assuntos (){
        return view('admin.assuntos.assuntos');
   }
   
   public function disciplinas (){
        return view('admin.disciplinas.disciplinas');
   }
   
   public function parceiros (){
        return view('admin.parceiros.parceiros');
   }
   
   public function questoes (){
        return view('admin.questoes.questoes');
   }
   
   public function planos (){
        return view('admin.planos.planos');
   }
   
   public function tipo_usuario (){
        return view('admin.tipo_usuario.tipo_usuario');
   }
   //atualizado por silvan visializacao de clintes ativos/inativos
   public function ver_clientes (){
        return view('admin.usuarios.clientes');
   }
      
   // CRUD DE NOTICIA NO ADMIN
   
   public function noticia (){
        $noticias = Noticia::all();
        $categorias = Categoria::all();
        return view('admin.noticias.create_noticia',compact('categorias'))->with('noticias',$noticias);
   }
 
   public function criar_noticia(Request $request){
       
     if(Input::file('imagem'))
      {
        $imagem = Input::file('imagem');
        $extensao = $imagem->getClientOriginalExtension();
        if($extensao != 'jpg' && $extensao != 'png')
        {
          return back()->with('erro','Erro: Este arquivo não é imagem');
        }
      }
	  
      $noticia = new Noticia;
      $noticia->categoria_id = Input::get('id_categoria');
      $noticia->titulo = Input::get('titulo');
      $noticia->subtitulo = Input::get('subtitulo');
      $noticia->descricao = Input::get('descricao');
      $noticia->imagem = "";
      $status = Input::get('status');
      
      if($status == '')
          $status = 'inativo';
      else
          $status = 'ativo';
      
      $noticia->status = $status;
      $noticia->created_at = Input::get('created_at');
      $noticia->updated_at = Input::get('upadated_at');
      $noticia->save();
	  
      if(Input::file('imagem'))
      {
        File::move($imagem,public_path().'/img/noticia-id_'.$noticia->id.'.'.$extensao);
        $noticia->imagem = '/img/noticia-id_'.$noticia->id.'.'.$extensao;
        $noticia->save();
      }
      
      \Session::flash('message', 'Noticia cadastrada com sucesso!');
  
      return redirect('admin/noticias');
   }
   
   public function editar_noticia ($id){

       $noticia = Noticia::find($id);
       $categorias = Categoria::all();
       return view('admin.noticias.edit_noticia',compact('categorias'))->with('noticia',$noticia);
   }
   
    public function update(Request $request, $id)
    {
      $noticia = Noticia::find($id);
      if(Input::file('imagem'))
      {
        $imagem = Input::file('imagem');
        $extensao = $imagem->getClientOriginalExtension();
        if($extensao != 'jpg' && $extensao != 'png')
        {
          return back()->with('erro','Erro: Este arquivo não é imagem');
        }
      }

      if($noticia->titulo!=Input::get('titulo'))
      {
        $noticia->titulo = Input::get('titulo');
      }

      if($noticia->subtitulo!=Input::get('subtitulo'))
      {
        $noticia->subtitulo = Input::get('subtitulo');
      }
      
      if($noticia->descricao!=Input::get('descricao'))
      {
        $noticia->descricao = Input::get('descricao');
      }

      if($noticia->categoria_id!=Input::get('id_categoria'))
      {
        $noticia->categoria_id = Input::get('id_categoria');
      }
      
      $status = Input::get('status');
      
      if($status == '')
          $status = 'inativo';
      else
          $status = 'ativo';
      
      if($noticia->status!= $status)
      {
        $noticia->status = $status;
      }

      $noticia->save();

      if(Input::file('imagem'))
      {
        File::delete(public_path().$noticia->imagem);
        File::move($imagem,public_path().'/img/noticia-id_'.$noticia->id.'.'.$extensao);
        $noticia->imagem = '/img/noticia-id_'.$noticia->id.'.'.$extensao;
        $noticia->save();
      }
      
       \Session::flash('message', 'Noticia atualizada com sucesso!');
       
       return redirect('admin/noticias');
    }

    public function destroy($id)
    {
      $noticia = Noticia::find($id);
      File::delete(public_path().$noticia->imagem);
      $noticia->delete();
      
      \Session::flash('message', 'Noticia excluida com sucesso!');
      return redirect('admin/noticias');
    }

    // CRUD DE USUARIO NO ADMIN
    
    public function index_usuarios(){
        $usuarios = $this->usuario->all();
        return view('admin.usuarios.usuarios',compact('usuarios'));
   }
    
    public function editar_usuario($id){

       $usuario = Usuario::find($id);
       $permissao = Permissao::all();
       
       $planos = \DB::table('tab_plano')->where('status', 'ativo')->get();          
       
       return view('admin.usuarios.edit_usuarios',compact('planos','permissao'))->with('usuario',$usuario);
   }

    public function permissao_usuario(Request $request, $id) {
        
        $usuario = Usuario::find($id);
      

      if($usuario->nome!=Input::get('nome'))
      {
        $usuario->nome = Input::get('nome');
      }

      if($usuario->cpf!=Input::get('cpf'))
      {
        $usuario->cpf = Input::get('cpf');
      }
      
      if($usuario->plano_id!=Input::get('plano_id'))
      {
        $usuario->plano_id = Input::get('plano_id');
      }

      if($usuario->data_nasc!=Input::get('data_nasc'))
      {
        $usuario->data_nasc = Input::get('data_nasc');
      }
      
      if($usuario->sexo!=Input::get('sexo'))
      {
        $usuario->sexo = Input::get('sexo');
      }
      
      if($usuario->permissao_id!=Input::get('permissao_id'))
      {
        $usuario->permissao_id = Input::get('permissao_id');
      }
      
            
      $status = Input::get('status');
      
      if($status == '')
          $status = 'inativo';
      else
          $status = 'ativo';
      
      if($usuario->status!= $status)
      {
        $usuario->status = $status;
      }
      
      $usuario->save();
      
      \Session::flash('message', 'Usuário atualizado com sucesso!');
      return redirect('admin/usuarios');

    }

    public function destroy_usuario($id)
    {
      $usuario = Usuario::find($id);
      $usuario->delete();
      
     \Session::flash('message', 'Usuário excluida com sucesso!');
      return redirect('admin/usuarios');
    }
    
     
    /*
    public function show($id)
    {
        $noticia = Noticia::find($id);
        return view('admin.noticias.show_noticia')->with('noticia',$noticia);
    }
    
    
   public function index_noticia (){
      $noticias = Noticia::all();
      return view('admin.noticias.index_noticia')->with('noticias',$noticias);
   }*/
   
}
