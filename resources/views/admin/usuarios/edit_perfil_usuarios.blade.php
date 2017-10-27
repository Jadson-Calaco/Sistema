@extends('admin.templates.templateAdmin')

@section('conteudo')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
        <div class="section">   

            <form action="{{ url('/admin/editar_perfil/'.$usuario->id)}}" method="post"  enctype="multipart/form-data">
                {!! csrf_field() !!}
                <input type="hidden"  name="plano_id" value="{!! $usuario->plano->id !!}">
                <br>
                <fieldset>
                    <legend><strong>Informações Iniciais</strong></legend>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="nome">* Nome Completo:</label>
                            <input type="text" class="form-control span6" id="nome" name="nome" type="text" maxlength="255" placeholder="* Nome Completo" value="{!! $usuario->nome !!}" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-append">
                            <div class="form-group col-md-4">
                                <label for="cpf">Cpf:</label>
                                <input type="text" class="form-control span4" id="cpf" name="cpf" maxlength="11" value="{!! $usuario->cpf !!}" >
                            </div>
                        </div>

                        <div class="input-append">
                            <div class="form-group col-md-3">
                                <label for="data_nasc">Data de Nascimento:</label>
                                <div class="col-10">
                                    <input class="form-control span3" type="date"  id="data" name="data_nasc" value="{!! $usuario->data_nasc !!}" >
                                </div>
                            </div>
                        </div>

                        <div class="input-append">
                            <label for="">* Sexo:</label>
                            <div class="form-inline">
                                <label class="radio-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo"  value="F"  @if( isset($usuario) && $usuario->sexo == 'F')checked @endif> Feminino
                                </label>

                                <label class="radio-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo2"  value="M"  @if( isset($usuario) && $usuario->sexo == 'M')checked @endif> Masculino
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-append">
                            <div class="form-group col-md-6">
                                <label for="email">* Email:</label>
                                <input type="text" class="form-control span4" id="email" name="email" type="text" maxlength="255" value="{!! $usuario->contato->first()->email !!}" >
                            </div>
                        </div>
                        <div class="input-append">
                            <div class="form-group col-md-4">
                                <label for="telefone">* Telefone:</label>
                                <input type="text" class="form-control span3" id="telefone" name="telefone" value="{!! $usuario->contato->first()->telefone !!}" >
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <legend><strong>Endereço</strong></legend>

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="nome">* Cep:</label>
                            <input type="text" class="form-control span4 cep-mask" id="cep" name="cep" type="text" maxlength="255" value="{!! $usuario->endereco->cep !!}" >
                        </div>

                        <div class="input-append">
                            <div class="form-group col-md-6">
                                <label for="nome">* Logradouro:</label>
                                <input type="text" class="form-control span4" id="logradouro" name="logradouro" type="text" maxlength="255" value="{!! $usuario->endereco->logradouro !!}" >
                            </div>
                        </div>
                        <div class="input-append">
                            <div class="form-group col-md-3">
                                <label for="nome">* Numero:</label>
                                <input type="text" class="form-control span3" id="numero" name="numero" type="text" maxlength="255" value="{!! $usuario->endereco->numero !!}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nome">* Complemento:</label>
                            <input type="text" class="form-control span4" id="complemento" name="complemento" type="text" maxlength="255" value="{!! $usuario->endereco->complemento !!}" >
                        </div>


                        <div class="form-group col-md-6">
                            <label for="nome">* Bairro:</label>
                            <input type="text" class="form-control span4" id="bairro" name="bairro" type="text" maxlength="255" value="{!! $usuario->endereco->bairro !!}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-append">
                            <div class="form-group col-md-6">
                                <label for="nome">* Cidade:</label>
                                <input type="text" class="form-control span4" id="cidade" name="cidade" type="text" maxlength="255" value="{!! $usuario->endereco->cidade !!}" >
                            </div>
                        </div>
                        <div class="input-append"> 
                            <div class="form-group col-md-3">
                                <label for="uf">UF:</label>
                                <input type="text" class="form-control span3" id="uf" name="uf" type="text" maxlength="255" value="{!! $usuario->endereco->uf !!}" >
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br><br>
                <div class="input-append"> 
                    <div class="form-group col-md-2">
                        <button type="submit" class="primary success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>

@endsection

