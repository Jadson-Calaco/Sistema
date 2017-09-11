@extends('site.template.templateCadastro')

@section('cadastro')

@if(isset($errors) && count($errors) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>  
    @endforeach
</div>
@endif

<div class="col-md-12">
    <form class="form" method="post" action="{{route('index.store')}}">
        {!!csrf_field()!!}
        <input type="hidden" name="vinculo" value="<?= date('y-m-d') ?>">
        <fieldset>
            <legend><strong>Informações Iniciais</strong></legend>

            <input type="hidden"  name="id_plano" value="<?=$_GET['id']?>">
            <div class="form-group col-md-3">
                <label for="tipo_usuario">* Tipo de Usuário:</label>
                <div class="controls">
                    <select class="form-control" id="tipo_usuario" name="tipo_usuario" value="{{old('tipo_usuario')}}">
                        <option value="Aluno" >Aluno</option>
                        <option value="Empresa">Empresa</option>
                        <option value="Escola">Escola</option>
                        <option value="Professor">Professor</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label" for="nome">* Nome Completo:</label>
                <input type="text" class="form-control span6" id="nome" name="nome" type="text" maxlength="255" placeholder="* Nome Completo" value="{{old('nome')}}">
            </div>

            <div class="input-append">	
                <div class="form-group col-md-6">
                    <label for="apelido">* Apelido:</label>
                    <input type="text" class="form-control span3" id="apelido" name="apelido" type="text" maxlength="255" value="{{old('apelido')}}">
                </div>
            </div>
            <div class="input-append">
                <div class="form-group col-md-4">
                    <label for="cpf">Cpf:</label>
                    <input type="text" class="form-control span4" id="cpf" name="cpf" maxlength="11" value="{{old('cpf')}}">
                </div>
            </div><br>

            <div class="input-append">
                <div class="form-group">
                    <label for="rg">Rg:</label>
                    <input type="text" class="form-control span4" id="rg" name="rg" type="text" maxlength="255" value="{{old('rg')}}">
                </div>
            </div>
            <div class="input-append">
                <div class="form-group col-md-3">
                    <label for="data">Data de Nascimento:</label>
                    <div class="col-10">
                        <input class="form-control span3" type="date"  id="data" name="data" value="{{old('date')}}">
                    </div>
                </div>
            </div>

            <div class="input-append">
                <label for="">* Sexo:</label>
                <div class="form-inline">
                    <label class="radio-label">
                        <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F"> Feminino
                    </label>

                    <label class="radio-label">
                        <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="M"> Masculino
                    </label>
                </div>
            </div><br>

            <div class="input-append">
                <div class="form-group col-md-6">
                    <label for="email">* Email:</label>
                    <input type="text" class="form-control span4" id="email" name="email" type="text" maxlength="255" value="{{old('email')}}">
                </div>
            </div>
            <div class="input-append">
                <div class="form-group col-md-4">
                    <label for="telefone">* Telefone:</label>
                    <input type="text" class="form-control span3" id="telefone" name="telefone" value="{{old('telefone')}}">
                </div>
            </div>

        </fieldset>
        <fieldset>
            <legend><strong>Endereço</strong></legend>


            <div class="form-group col-md-3">
                <label for="nome">* Cep:</label>
                <input type="text" class="form-control span4 cep-mask" id="cep" name="cep" type="text" maxlength="255" value="{{old('cep')}}">
            </div>

            <div class="input-append">
                <div class="form-group col-md-6">
                    <label for="nome">* Logradouro:</label>
                    <input type="text" class="form-control span4" id="logradouro" name="logradouro" type="text" maxlength="255" value="{{old('logradouro')}}">
                </div>
            </div>
            <div class="input-append">
                <div class="form-group col-md-3">
                    <label for="nome">* Numero:</label>
                    <input type="text" class="form-control span3" id="numero" name="numero" type="text" maxlength="255" value="{{old('numero')}}">
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="nome">* Complemento:</label>
                <input type="text" class="form-control span4" id="complemento" name="complemento" type="text" maxlength="255" value="{{old('complemento')}}">
            </div>


            <div class="form-group col-md-6">
                <label for="nome">* Bairro:</label>
                <input type="text" class="form-control span4" id="bairro" name="bairro" type="text" maxlength="255" value="{{old('bairro')}}">
            </div>

            <div class="input-append">
                <div class="form-group col-md-6">
                    <label for="nome">* Cidade:</label>
                    <input type="text" class="form-control span4" id="cidade" name="cidade" type="text" maxlength="255" value="{{old('cidade')}}">
                </div>
            </div>
            <div class="input-append"> 
                <div class="form-group col-md-3">
                    <label for="uf">UF:</label>
                    <input type="text" class="form-control span3" id="uf" name="uf" type="text" maxlength="255" value="{{old('uf')}}">
                </div>
            </div>

        </fieldset>
        <br><br>
        <div>
            <div class="col-col-12">
                <div class="questoes-filter-right-button">
                    <button type="submit" class="button">Cadastrar</button>
                </div>
            </div>
        </div>

        <br><br>
    </form>
</div>
@endsection
