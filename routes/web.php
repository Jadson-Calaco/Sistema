<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |

  Auth::routes();
  Route::get('/home', 'HomeController@index');
 */

Auth::routes();

Route::group(['namespace' => 'Site'], function() {

    Route::get('/', 'SiteController@index');
    Route::get('/index', 'SiteController@index');
    Route::get('/cadastro', 'SiteController@cadastro');
    // Route::get('/planos', 'SiteController@planos');
    // Route::get('/sobre', 'SiteController@sobre');  
});
Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function() {
    // Route::get('/home', 'AdminController@index');
    Route::get('/admin', 'AdminController@index');
    Route::get('/planos', 'AdminController@planos');
    Route::get('/questoes', 'AdminController@questoes');
    Route::get('/parceiros', 'AdminController@parceiros');
    Route::get('/tipo_usuario', 'AdminController@tipo_usuario');
    Route::resource('/clientes', 'AdminController');

    Route::resource('/usuarios', 'AdminController@index_usuarios');
    Route::get('/permissao_usuario/{id}', 'AdminController@editar_usuario');
    Route::post('/permissao_usuario/{id}', 'AdminController@permissao_usuario');
    Route::get('/deletar_usuario/{id}', 'AdminController@destroy_usuario');
    Route::get('/status_usuario/{id}', 'AdminController@mudarStatusUsuario');

    Route::get('/noticias', 'AdminController@noticia');
    Route::post('/criar_noticia', 'AdminController@criar_noticia');
    Route::get('/editar_noticia/{id}', 'AdminController@editar_noticia');
    Route::post('/editar_noticia/{id}', 'AdminController@update');
    Route::get('/deletar_noticia/{id}', 'AdminController@destroy');
    Route::get('/status_noticia/{id}', 'AdminController@mudarStatus');
    // Route::get('/admin/index_noticia','AdminController@index_noticia');

    /* dados atulizados por silvano-leonsil 
     * url de usuarios em geral 
     * */
    //Route::get('/ver_usuarios','AdminController@ver_usuarios');
    Route::get('/clientes', 'AdminController@ver_clientes');
    //adicionando permissoes aos usuarios
    Route::get('/controle', 'AdminController@permissao');

    //dados do planos
    Route::get('/planos', 'PlanosController@index');
    Route::post('/planos', 'PlanosController@store');
    Route::get('/editar_plano/{id}', 'PlanosController@edit');
    Route::get('/destroy/{id}', 'PlanosController@destroy');
    Route::post('/update/{id}', 'PlanosController@update');
    Route::get('/status_plano/{id}', 'PlanosController@mudarStatus');

    //dados das questoes,
    Route::get('/questoes', 'QuestaoController@index');
    Route::post('/questoes', 'QuestaoController@store');
    //Route::get('/edit_questao/{id}','QuestaoController@edit');
    //Route::post('/update_questao/{id}','QuestaoController@update');
    Route::get('/destroy_questao/{id}', 'QuestaoController@destroy');
    Route::get('/pega_assuntos/{id}', 'AssuntoController@getAssuntos');

    //dados das disciplinas
    Route::get('/disciplinas', 'DisciplinaController@index');
    Route::post('/disciplinas', 'DisciplinaController@store');
    Route::get('/edit_disciplina/{id}', 'DisciplinaController@edit');
    Route::post('/update_disciplina/{id}', 'DisciplinaController@update');
    Route::get('/destroy_disciplina/{id}', 'DisciplinaController@destroy');

    //dados dos assuntos
    Route::get('/assuntos', 'AssuntoController@index');
    Route::post('/assuntos', 'AssuntoController@store');
    Route::get('/edit_assunto/{id}', 'AssuntoController@edit');
    Route::post('/update_assunto/{id}', 'AssuntoController@update');
    Route::get('/destroy_assunto/{id}', 'AssuntoController@destroy');

    Route::any('/questoesencontradas', 'BuscarQuestoesController@getQuestoes');
    Route::any('/buscarquestoes', 'BuscarQuestoesController@trazerMaterias');
    Route::any('/questoes', 'BuscarQuestoesController@trazerMaterias');
    Route::get('/assuntos/{id}', 'BuscarQuestoesController@getAssuntos');
    Route::get('/assuntoss/{idmateria}/{serie}', 'BuscarQuestoesController@getAssuntosPorSerieEMateria');
    Route::any('/pdf', 'BuscarQuestoesController@guardarDadosPdf');
    Route::any('/salvarquestoesselecionadas', ['as' => 'salvaqquestoes', 'uses' => 'BuscarQuestoesController@salvarQuestao']);
    Route::any('/simulado', 'BuscarQuestoesController@mostrarSimulado');
    Route::any('/gerarPdf', 'BuscarQuestoesController@gerarPdf');
    Route::any('/world', 'BuscarQuestoesController@guardarDadosWorld');
    Route::any('/gerarWorld', 'BuscarQuestoesController@gerarWorld');

    Route::get('/editar_perfil/{id}', 'AdminController@editar_perfil');
    Route::post('/editar_perfil/{id}', 'AdminController@update_perfil');
});
Route::group(['namespace' => 'Usuario'], function() {

    Route::get('/usuario', 'UsuarioController@home');
    Route::get('/usuario/dados', 'UsuarioController@dados');
    Route::get('/usuario/planos', 'UsuarioController@planos');
    Route::resource('/index', 'UsuarioController@store');
    Route::get('/editar_usuario/{id_usuarios}', 'UsuarioController@editar_usuario');
    Route::post('/editar_usuario/{id_usuarios}', 'UsuarioController@update_usuario');
    
    Route::post('/emailDuvidas', 'UsuarioController@emailDuvidas');
    Route::post('/emailNoticias', 'UsuarioController@emailNoticias');

    //Route::resource('/admin/usuarios','UsuarioController');
});
/*
  Route::group(['namespace' => 'Busca','middleware'=>'auth'], function() {

  Route::any('questoesencontradas', 'BuscarQuestoesController@getQuestoes');
  Route::any('buscarquestoes', 'BuscarQuestoesController@trazerMaterias');
  Route::any('questoes', 'BuscarQuestoesController@trazerMaterias');
  Route::get('assuntos/{id}','BuscarQuestoesController@getAssuntos' );
  Route::get('assuntoss/{idmateria}/{serie}','BuscarQuestoesController@getAssuntosPorSerieEMateria' );
  Route::any('pdf',['as'=>'pdf','uses'=>'BuscarQuestoesController@guardarDadosPdf']);
  Route::any('salvarquestoesselecionadas',['as'=>'salvaqquestoes','uses'=>'BuscarQuestoesController@salvarQuestao']);
  Route::any('simulado','BuscarQuestoesController@mostrarSimulado');
  Route::any('gerarPdf','BuscarQuestoesController@gerarPdf');
  Route::any('world',['as'=>'world','uses'=>'BuscarQuestoesController@guardarDadosWorld']);
  Route::any('gerarWorld','BuscarQuestoesController@gerarWorld');



  });
 */
Route::get('error', function () {
    return response()->view('error.404', [], 404);
});

Route::get('error', function () {
    return response()->view('errors.503', [], 503);
});

