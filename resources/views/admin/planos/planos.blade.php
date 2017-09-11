@extends('admin.templates.templateAdmin')

@section('conteudo')
<!-- /.row -->

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Gerenciando Planos</h3>
    </div>
    <div class="panel-body">
        <div class="section">   
            <div class="col-md-2">
                <a href="#adicionar_plnos" title="Adicionar novos Plnos" class="btn btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="adicionar_plnos">
                    <i class="fa fa-3x fa-fw -plus fa-pencil-square-o" ></i>Adicionar Planos
                </a>
            </div>
        </div>
    </div>
    <div class="collapse" id="adicionar_plnos">
        <div class="well">
            <form role="form" action="{{ url('/admin/planos')}}" method="POST"  enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label" for="inputPlano">Nome do Plano</label>
                    <input class="form-control" id="inputPlano" placeholder="Nome do Plano" type="text" name="nome_plano" required="true">
                </div>
                <!--div class="form-group">
                    <label class="control-label" for="inputDescricao">Descrição</label>
                    <input class="form-control" id="inputDescricao" placeholder="Descrição do plano" type="text" name="inputDescricao">
                </div-->
                <div class="form-group">
                    <label class="control-label" for="inputDescricao">Quantidade de Quesões</label>
                    <input class="form-control" id="inputQuant" placeholder="Quantidade de Questões" type="text" name="quant_questao" required="true">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputValidade">Validade (em Mêses)</label>
                    <input class="form-control" id="inputValidade" placeholder="validade do plano" type="text" name="quant_mes" required="true">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputValor">Valor em R$</label>
                    <input class="form-control" id="inputValor" placeholder="Valor do plano" type="text" name="valor" required="true">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputStatus">Ativa</label>
                    <input class="" type="checkbox" name="status">
                    <p class="help-block">Deseja ativar isso ? .</p>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check"></i>Salvar</button>
            </form>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Planos Cadastrados</div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Plano</th>
                            <!--th>Descrição</th-->
                            <th>Validade(Mês)</th>
                            <th>Valor em R$</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($mostrar_planos as $dados)
                        <tr class="odd gradeX">
                            <td align="center">{{$dados->nome_plano or 'sem nada'}}</td>
                            <td align="center">{{$dados->quant_mes or 'sem nada'}}</td>
                            <td align="center">{{$dados->valor or '0 mes'}}</td>
                            <td class="center">{{$dados->status or 'inativo'}}</td>

                            <td class="center">
                                <a href="{!! url('admin/editar_plano/'.$dados->id) !!}" class="" title="Editar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="{!! url('admin/destroy/'.$dados->id) !!}" class="" title="Deletar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-trash"></i></a>
                                <a href="{!! url('admin/update_q/'.$dados->id) !!}" class="" title="{{$status or 'Ativa/Desativar'}}" data-toggle="tooltip" data-placement="top"><i class="fa fa-1x fa-fw fa-star-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
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