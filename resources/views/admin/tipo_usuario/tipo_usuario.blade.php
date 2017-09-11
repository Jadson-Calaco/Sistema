@extends('admin.templates.templateAdmin')
@section('conteudo')
    <!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Planos</h3>
              </div>
              <div class="panel-body">
                <p>Adicionar Usuários</p>
              </div>
            </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" type="text" maxlength="255" value="">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="descricao">Descrição:</label>
                <textarea rows="8" cols="80" maxlength="500" name="descricao"  id="descricao" value=""></textarea>
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <div class="questoes-filter-right-button">
                    <button type="submit" id="botao" class="btn btn-success btn-lg ">Salvar</button>
                </div>
            </div>
        </div>

        <br><br>
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td class="center">X</td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</div>
    
@endsection