@extends('admin.templates.templateAdmin')

@section('conteudo')
<div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">Clientes Cadastrados</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Plano</th>
                      <th>Validade(Mês)</th>
                      <th>Valor em R$</th>
                      <th>Status</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                   <tr class="gradeA">
                      <td>{{$nome or 'sem nada'}}</td>
                      <td class="center">{{$nome_plano or 'sem nada'}}</td>
                      <td class="center">{{$valor or '0,00'}}</td>
                      <td class="center">{{$quant_mes or '0,0'}}</td>
                      <td class="center">{{$status or 'inativo'}}</td>
                      <td class="center">
                          <a href="" class="" title="Editar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-pencil"></i></a>
                          <a href="" class="" title="Deletar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-trash"></i></a>
                               
                      </td>
                    </tr>
                  </tbody>
                </table>
               
              </div>
              <!-- /.panel-body -->
            </div>
            
            <!-- /.panel -->
          </div>
          <!-- /.col-lg-12 -->

    </div>
@endsection