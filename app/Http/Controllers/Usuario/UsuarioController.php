<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\Endereco;
use App\Models\Contato;
use App\Models\Noticia;
use App\Http\Requests\Usuario\UsuarioFormRquest;
use App\Models\EmailNoticias;
use App\Models\EmailDuvidas;

class UsuarioController extends Controller {

    private $usuario;

    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
    }

    public function home() {
        return view('usuario.template.templateUsuario');
    }

    public function dados() {
        return view('usuario.dados.dados');
    }

    public function planos() {
        return view('usuario.planos.planos');
    }

    /*
      public function index()
      {
      $usuarios = $this->usuario->all();
      return view('admin.usuarios.usuarios',compact('usuarios'));
      } */

    public function store(UsuarioFormRquest $request) {
        /*
          $dataForm = $request ->except('_token');
          // $this->validate($request,$this->usuario->rules,$this->usuario->mensagens);
          $insert = $this->usuario->insert($dataForm);

          if($insert)
          return view('site.home.index');
          else
          return view('site.cadastro.cadastro');
         * 
         */

        $usuario = Usuario::create($request ->only('nome','cpf','plano_id','data_nasc','sexo'));

        $endereco = new Endereco($request->all());
        $endereco->usuario_id = $usuario->id;
        $endereco->cep = $request->get('cep');
        $endereco->logradouro = $request->get('logradouro');
        $endereco->numero = $request->get('numero');
        $endereco->complemento = $request->get('complemento');
        $endereco->bairro = $request->get('bairro');        
        $endereco->cidade = $request->get('cidade');
        $endereco->uf = $request->get('uf');
        $endereco->save();

        $contato = new Contato($request->all());
        $contato->usuario_id = $usuario->id;
        $contato->email = $request->get('email');
        $contato->celular = $request->get('celular');
        $contato->telefone = $request->get('telefone');
        $contato->obs = $request->get('obs');
        $contato->save();
        
        \Session::flash('mensagem','Cadastro realizado com sucesso ! ');
        
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
    
    public function editar_usuario($id){

       $usuario = Usuario::find($id);
       return view('admin.usuarios.edit_usuarios')->with('usuario',$usuario);
   }

    public function update_usuario(Request $request, $id) {
        
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
            
      $end = $usuario->endereco->id;
      $endereco = Endereco::find($end);
          
      if($endereco->logradouro !=Input::get('logradouro'))
      {
        $endereco->logradouro = Input::get('logradouro');
      }
      
      if($endereco->numero !=Input::get('numero'))
      {
        $endereco->numero = Input::get('numero');
      }
      
      if($endereco->bairro !=Input::get('bairro'))
      {
        $endereco->bairro = Input::get('bairro');
      }
      
      if($endereco->complemento !=Input::get('complemento'))
      {
        $endereco->complemento = Input::get('complemento');
      }
      
      if($endereco->cep !=Input::get('cep'))
      {
        $endereco->cep = Input::get('cep');
      }
      
      if($endereco->cidade !=Input::get('cidade'))
      {
        $endereco->cidade = Input::get('cidade');
      }
      
      if($endereco->uf !=Input::get('uf'))
      {
        $endereco->uf = Input::get('uf');
      }
      
      $con = $usuario->contato->first()->id;
      $contato = Contato::find($con);
          
      if($contato->email !=Input::get('email'))
      {
        $contato->email = Input::get('email');
      }
      
      if($contato->telefone !=Input::get('telefone'))
      {
        $contato->telefone = Input::get('telefone');
      }
      
      if($contato->celular !=Input::get('celular'))
      {
        $contato->celular = Input::get('celular');
      }
      
      if($contato->obs !=Input::get('obs'))
      {
        $contato->obs = Input::get('obs');
      }
      
      $contato->save();
      $endereco->save();
      $usuario->save();
      
      \Session::flash('message', 'Usuário atualizado com sucesso!');
      return redirect('site.home.index');

    }
    
    // EMAIL NOTICIAS

    public function emailNoticias(Request $request) {

        $this->validate($request, [
            'email' => 'required',
        ]);

        $emailNoticia = new EmailNoticias;
        $emailNoticia->email = $request->email;
       
        $emailNoticia->save();

        return redirect('/index');
                                           
    }

    // EMAIL DUVIDAS
    public function emailDuvidas(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $comment = $request->comment;

        $message = "NOME: $name<br>
                    EMAIL: $email<br>
                    COMENTARIO: $comment";

        dd($message);

        /*
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html; charset=utf-8" . "\r\n";
          $headers .= "From: <$emailFrom>" . "\r\n";
          $headers .= "Reply-To: <$email>" . "\r\n";

          $assunto=" Duvidas - MetaEduca";
          $email_to = "";

          $status = mail($email_to, $assunto, $message, $headers);
         */

         return redirect('/index');
    }
  

}
