@extends('admin.templates.templateAdmin')

@section('conteudo')
<!-- /.row -->

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Gerenciando das Disciplinas</h3>
    </div>
    <div class="panel-body">
        <div class="section">   
            <div class="col-md-2">
                <a href="#adicionar_plnos" title="Adicionar novos Plnos" class="btn btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="adicionar_plnos">
                    <i class="fa fa-3x fa-fw -plus fa-pencil-square-o" ></i>Adicionar Diciplinas
                </a>
            </div>
        </div>
    </div>
    <div class="collapse" id="adicionar_plnos">
        <div class="well">
            <form role="form" action="{{ url('/admin/disciplinas')}}" method="POST"  enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label" for="nome_disciplina">Disciplina</label>
                    <input class="form-control" id="nome_disciplina" placeholder="Nome do Plano" type="text" name="nome_disciplina" required="true">
                </div>
                <!--div class="form-group">
                    <label class="control-label" for="inputDescricao">Descrição</label>
                    <input class="form-control" id="inputDescricao" placeholder="Descrição do plano" type="text" name="inputDescricao">
                </div-->
                <div class="form-group">
                    <label class="control-label" for="carga_horaria">Carga Horaria</label>
                    <input class="form-control" id="carga_horaria" placeholder="Quantidade de Questões" type="text" name="carga_horaria" required="true">
                </div>
                
                <!--div class="form-group">
                    <label class="control-label" for="inputStatus">Ativa</label>
                    <input class="" type="checkbox" name="status">
                    <p class="help-block">Deseja ativar isso ? .</p>
                </div-->
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
                            <th>Nome</th>
                            <!--th>Descrição</th-->
                            <th>Carga Horaria</th>
                            <th>Criada</th>
                            <!--th>Status</th-->
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($mostrar_disciplinas as $dados)
                        <tr class="odd gradeX">
                            <td align="center">{{$dados->nome or 'sem nada'}}</td>
                            <td align="center">{{$dados->carga_horaria or 'sem nada'}}</td>
                            <td align="center">{{$dados->created_at or '0 mes'}}</td>
                            <!--td class="center">{{$dados->status or 'inativo'}}</td-->

                            <td class="center">
                                <a href="{!! url('admin/edit_disciplina/'.$dados->id) !!}" class="" title="Editar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="{!! url('admin/destroy_disciplina/'.$dados->id) !!}" class="" title="Deletar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-trash"></i></a>
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