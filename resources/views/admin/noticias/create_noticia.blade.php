@extends('admin.templates.templateAdmin')

@section('conteudo')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Gerenciando Noticias</h3>
    </div>

    <div class="panel-body">
        <div class="section">   
            <div class="col-md-2">
                <a href="#adicionar_noticias" title="Adicionar novos Noticias" class="btn btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="adicionar_noticias">
                    <i class="fa fa-3x fa-fw -plus fa-pencil-square-o" ></i>Adicionar Noticias
                </a>
            </div><br>
        </div>
    </div> 
    <div class="collapse" id="adicionar_noticias">
        <div class="well">
            <form action="{{ url('/admin/criar_noticia')}}" method="post"  enctype="multipart/form-data">
                {!! csrf_field() !!}
                <!-- /.row-->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="titulo">Titulo</label>
                                <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Titulo">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="subtitulo">Subtitulo</label>
                                <input name="subtitulo" type="text" class="form-control" id="subtitulo" placeholder="Subtitulo">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="descricao">Descrição</label>
                                <textarea name="descricao" class="form-control" id="descricao"></textarea >
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="categoria">Categorias:</label>
                                <div class="controls">
                                    <select class="form-control"  id="materia" name="id_categoria">
                                        <option>Selecione a categoria</option>
                                        @foreach($categorias as $categorias)
                                        <option value="{{ $categorias->id }}">{{$categorias->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="imagem">Imagem</label>
                                <input type="file" id="imagem" name="imagem">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label> 
                                    <input type="checkbox" id="status" name="status" value="ativo">
                                    Ativo ?
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-default">Salvar</button>
                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
<hr>
<div class="row">

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Noticias Cadastradas</div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Criada</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($noticias as $dados)
                        <tr class="odd gradeX">
                            <td>{{$dados->titulo or 'sem nada'}}</td>
                            <td>{{$dados->descricao or 'sem nada'}}</td>
                            <td>{{$dados->categoria->name or 'sem nada'}}</td>
                            <td class="center">{{$dados->updated_at or '00/00/0000'}}</td>
                            <td>{{$dados->status or 'sem nada'}}</td>
                            <td class="center">
                                <a href="{!! url('admin/editar_noticia/'.$dados->id) !!}" class="" title="Editar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-pencil"></i></a>
                                <a href="{!! url('admin/deletar_noticia/'.$dados->id) !!}" class="" title="Deletar Cadastro" data-toggle="tooltip" data-placement="top"><i class="glyphicon glyphicon-trash"></i></a>
                                <a href="{!! url('admin/status_noticia/'.$dados->id) !!}" class="" title="{{$dados->status}}" data-toggle="tooltip" data-placement="top">

                                    @if($dados->status=='ativo')
                                    <i class="fa fa-1x fa-fw fa-star"></i>
                                    @else
                                    <i class="fa fa-1x fa-fw fa-star-o"></i>
                                    @endif

                                </a>
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
