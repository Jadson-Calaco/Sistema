@extends('admin.templates.templateAdmin')

@section('conteudo')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Configurando Usuário</h3>
    </div>
    <div class="panel-body">
        <div class="section">   

            <form action="{{ url('/admin/permissao_usuario/'.$usuario->id)}}" method="post"  enctype="multipart/form-data">
                {!! csrf_field() !!}

                <fieldset>

                    
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="funcionalidade"> Perfil:</label>
                            <div class="controls">
                                <select class="form-control" id="funcionalidade" name="funcionalidade_id">
                                    <option>Selecione o Perfil</option>
                                        @foreach($funcionalidades as $funcionalidades)
                                            <option value="{{ $funcionalidades->id }}"
                                                    @if( isset($usuario) && $usuario->funcionalidade_id == $funcionalidades->id)
                                                      selected
                                                    @endif
                                                    > {{$funcionalidades->nome}}
                                            </option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="plano-id"> Plano:</label>
                            <div class="controls">
                                <select class="form-control" id="plano_id" name="plano_id" >
                                    <option>Selecione o Plano</option>
                                        @foreach($planos as $planos)
                                            <option value="{{ $planos->id }}"
                                                    @if( isset($usuario) && $usuario->plano_id == $planos->id)
                                                      selected
                                                    @endif
                                                    > {{$planos->nome_plano}}
                                            </option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-md-2">
                            <label> 
                                <input type="checkbox" id="status" name="status" value="ativo" @if( isset($usuario) && $usuario->status == 'ativo')checked @endif>
                                       Ativo ?
                            </label>
                        </div>
                    </div>

                </fieldset>
                <br>
                <fieldset>
                    <legend><strong>Informações Iniciais</strong></legend>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="nome">* Nome Completo:</label>
                            <input type="text" class="form-control span6" id="nome" name="nome" type="text" maxlength="255" placeholder="* Nome Completo" value="{!! $usuario->nome !!}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-append">
                            <div class="form-group col-md-4">
                                <label for="cpf">Cpf:</label>
                                <input type="text" class="form-control span4" id="cpf" name="cpf" maxlength="11" value="{!! $usuario->cpf !!}" readonly>
                            </div>
                        </div>

                        <div class="input-append">
                            <div class="form-group col-md-3">
                                <label for="data_nasc">Data de Nascimento:</label>
                                <div class="col-10">
                                    <input class="form-control span3" type="date"  id="data" name="data_nasc" value="{!! $usuario->data_nasc !!}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="input-append">
                            <label for="">* Sexo:</label>
                            <div class="form-inline">
                                <label class="radio-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo" readonly value="F"  @if( isset($usuario) && $usuario->sexo == 'F')checked @endif> Feminino
                                </label>

                                <label class="radio-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo2" readonly value="M"  @if( isset($usuario) && $usuario->sexo == 'M')checked @endif> Masculino
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-append">
                            <div class="form-group col-md-6">
                                <label for="email">* Email:</label>
                                <input type="text" class="form-control span4" id="email" name="email" type="text" maxlength="255" value="{!! $usuario->contato->first()->email !!}" readonly>
                            </div>
                        </div>
                        <div class="input-append">
                            <div class="form-group col-md-4">
                                <label for="telefone">* Telefone:</label>
                                <input type="text" class="form-control span3" id="telefone" name="telefone" value="{!! $usuario->contato->first()->telefone !!}" readonly>
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
                            <input type="text" class="form-control span4 cep-mask" id="cep" name="cep" type="text" maxlength="255" value="{!! $usuario->endereco->cep !!}" readonly>
                        </div>

                        <div class="input-append">
                            <div class="form-group col-md-6">
                                <label for="nome">* Logradouro:</label>
                                <input type="text" class="form-control span4" id="logradouro" name="logradouro" type="text" maxlength="255" value="{!! $usuario->endereco->logradouro !!}" readonly>
                            </div>
                        </div>
                        <div class="input-append">
                            <div class="form-group col-md-3">
                                <label for="nome">* Numero:</label>
                                <input type="text" class="form-control span3" id="numero" name="numero" type="text" maxlength="255" value="{!! $usuario->endereco->numero !!}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nome">* Complemento:</label>
                            <input type="text" class="form-control span4" id="complemento" name="complemento" type="text" maxlength="255" value="{!! $usuario->endereco->complemento !!}" readonly>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="nome">* Bairro:</label>
                            <input type="text" class="form-control span4" id="bairro" name="bairro" type="text" maxlength="255" value="{!! $usuario->endereco->cep !!}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-append">
                            <div class="form-group col-md-6">
                                <label for="nome">* Cidade:</label>
                                <input type="text" class="form-control span4" id="cidade" name="cidade" type="text" maxlength="255" value="{!! $usuario->endereco->cidade !!}" readonly>
                            </div>
                        </div>
                        <div class="input-append"> 
                            <div class="form-group col-md-3">
                                <label for="uf">UF:</label>
                                <input type="text" class="form-control span3" id="uf" name="uf" type="text" maxlength="255" value="{!! $usuario->endereco->uf !!}" readonly>
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

