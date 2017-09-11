@extends('admin.templates.templateAdmin')

@section('conteudo')
<!-- /.row -->
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Gerenciando Questões</h3>
    </div>
    <div class="panel-body">
        <div class="section">   
            <div class="col-md-2">
                <a href="#adicionar_plnos" title="Adicionar novos Plnos" class="btn btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="adicionar_plnos">
                    <i class="fa fa-3x fa-fw -plus fa-pencil-square-o" ></i>Adicionar Questões
                </a>
            </div>
        </div>
    </div>
    <div class="collapse" id="adicionar_plnos">
        <div class="well">
            <form name="cad_questoes" action="{{url('admin/questoes')}}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label" for="id_disciplina"> Disciplina </label>
                    <select name="id_disciplina"  id="id_disciplina" class="form-control" required="">
                        <option value=""></option>
                        @foreach($disciplinas as $disciplina)
                           <option value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="assunto"> Assunto </label>
                    <select name="assunto" id="assunto" class="form-control" required="">
                        <!--option value="">Assunto da questão</option-->
                    </select>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionando Questões</div>

                    <div class="panel-body">
                        <textarea class="ckeditor" name="texto" id="ckeditor" required=""></textarea>
                    </div>
                    
                </div>
                <div class="hero-unit">
                    <input type="submit" class="btn btn-large btn-lg btn-primary" value="Salvar Dados" data-toggle="modal"/>
                </div>
            </form>
        </div>

    </div>
</div>

<hr class="alert-success">
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Quesões Cadastradas</div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Texto</th>
                            <!--th>Descrição</th-->
                            <th>Assunto</th>
                            <th>Disciplina</th>

                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mostrar_questoes as $dados )
                        <tr class="odd gradeX">
                            
                            <td>{{$dados->enunciado or 'sem nada'}}</td>
                            <td>{{$dados->assunto or 'sem nada'}}</td>
                            <td align="center">{{$dados->nome or '0 mes'}}</td>


                            <td class="center">
                                <a href="{!! url('admin/edit_questao/'.$dados->id) !!}" class="" title="Editar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="{!! url('admin/destroy_questao/'.$dados->id) !!}" class="" title="Deletar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-trash"></i></a>
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
</div>
@endsection
<script src="{{url('assets/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('assets/ckeditor/adapters/jquery.js')}}"></script>
@stack('scripts') 

   