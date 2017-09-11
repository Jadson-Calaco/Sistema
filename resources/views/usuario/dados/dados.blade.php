@extends('usuario.template.templateUsuario')

@section('conteudo')

<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <br>
            <form>
                <fieldset>
                    <legend><strong>Informações Iniciais</strong></legend>

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="tipo_usuario">* Tipo de Usuário:</label>
                            <div class="controls">
                                <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                                    <option value="Aluno" >Aluno</option>
                                    <option value="Empresa" >Empresa</option>
                                    <option value="Escola" >Escola</option>
                                    <option value="Professor" >Professor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nome">* Nome Completo:</label>
                            <input type="text" class="form-control" id="nome" name="nome" type="text" maxlength="255" value="">
                        </div>
                    </div>
                    <div class="row">	
                        <div class="form-group col-md-6">
                            <label for="apelido">* Apelido:</label>
                            <input type="text" class="form-control" id="apelido" name="apelido" type="text" maxlength="255" value="">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="cpf">Cpf:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="rg">Rg:</label>
                            <input type="text" class="form-control" id="rg" name="rg" type="text" maxlength="255" value="">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="data">Data de Nascimento:</label>
                            <div class="col-10">
                                <input class="form-control" type="date" value="" id="data" name="data">
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="sexo">* Sexo:</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="feminino"> Feminino
                                </label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="masculino"> Masculino
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">* Email:</label>
                            <input type="text" class="form-control" id="email" name="email" type="text" maxlength="255" value="">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="telefone">* Telefone:</label>
                            <input type="text" class="form-control" id="telefone" name="telefone">
                        </div>
                    </div>

                </fieldset>
                <fieldset>
                    <legend><strong>Endereço</strong></legend>

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="nome">* Cep:</label>
                            <input type="text" class="form-control" id="nome" name="cpf" type="text" maxlength="255" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nome">* Logradouro:</label>
                            <input type="text" class="form-control" id="nome" name="cpf" type="text" maxlength="255" value="">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nome">* Numero:</label>
                            <input type="text" class="form-control" id="nome" name="cpf" type="text" maxlength="255" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nome">* Complemento:</label>
                            <input type="text" class="form-control" id="nome" name="cpf" type="text" maxlength="255" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nome">* Bairro:</label>
                            <input type="text" class="form-control" id="nome" name="cpf" type="text" maxlength="255" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nome">* Cidade:</label>
                            <input type="text" class="form-control" id="nome" name="cpf" type="text" maxlength="255" value="">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="tipo_usuario">UF:</label>
                            <div class="controls">
                                <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                                    <option value="Aluno" >Aluno</option>
                                    <option value="Empresa" >Empresa</option>
                                    <option value="Escola" >Escola</option>
                                    <option value="Professor" >Professor</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </fieldset>
                <br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="questoes-filter-right-button">
                            <button type="submit" id="botao" class="btn btn-success btn-lg ">Cadastrar</button>
                        </div>
                    </div>
                </div>
                <br><br>
            </form>
        </div>
    </div>
</div>

@endsection
