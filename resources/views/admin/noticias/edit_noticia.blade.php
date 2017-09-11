@extends('admin.templates.templateAdmin')

@section('conteudo')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Gerenciando Noticias</h3>
    </div>
    <div class="panel-body">
        <div class="section">   

            <form action="{{ url('/admin/editar_noticia/'.$noticia->id)}}" method="post"  enctype="multipart/form-data">
                {!! csrf_field() !!}
                <!-- /.row-->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="titulo">Titulo</label>
                                <input value="{!! $noticia->titulo !!}" name="titulo" type="text" class="form-control" id="titulo" placeholder="Titulo">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="subtitulo">Subtitulo</label>
                                <input value="{!! $noticia->subtitulo !!}" name="subtitulo" type="text" class="form-control" id="subtitulo" placeholder="Subtitulo">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="descricao">Descrição</label>
                                <textarea name="descricao" class="form-control" id="descricao">{{$noticia->descricao}}</textarea >
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="categoria">Categorias:</label>
                                <div class="controls">
                                    <select class="form-control"  id="materia" name="id_categoria">
                                        <option>Selecione a categoria</option>
                                        @foreach($categorias as $categorias)
                                            <option value="{{ $categorias->id }}"
                                                    @if( isset($noticia) && $noticia->categoria_id == $categorias->id)
                                                      selected
                                                    @endif
                                                    > {{$categorias->name}}
                                            </option>
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
                                    <input type="checkbox" id="status" name="status" value="ativo" @if( isset($noticia) && $noticia->status == 'ativo')checked @endif>
                                           Ativo ?
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-default">Salvar Alterações</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>
@endsection
