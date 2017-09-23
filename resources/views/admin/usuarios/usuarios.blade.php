@extends('admin.templates.templateAdmin')

@section('conteudo')


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><b>Tabela de Usuários</b></h4>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Data de Vinculo</th>
                            <th>Nome</th>
                            <th>Plano</th>
                            <th>Status</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr class="odd gradeX">
                            <td>{{$usuario ->created_at}}</td>
                            <td>{{$usuario ->nome}}</td>
                            <td>{{$usuario->plano->nome_plano}}</td>
                            <td>{{$usuario ->status}}</td>
                            <td class="center">
                                <a href="{!! url('admin/permissao_usuario/'.$usuario->id) !!}" class="" title="Configurar" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="{!! url('admin/deletar_usuario/'.$usuario->id) !!}" class="" title="Deletar " data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-trash"></i></a>
                                <a href="{!! url('admin/status_usuario/'.$usuario->id) !!}" class="" title="{{$usuario->status}}" data-toggle="tooltip" data-placement="top">

                                    @if($usuario->status=='ativo')
                                    <i class="fa fa-1x fa-fw fa-star"></i>
                                    @else
                                    <i class="fa fa-1x fa-fw fa-star-o"></i>
                                    @endif

                                </a>
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

<!-- /#page-wrapper -->
@endsection
