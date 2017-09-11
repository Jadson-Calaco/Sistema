@extends('admin.template.templateAdmin')

@section('conteudo')
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-10">
            <br>

            <div class="row">
                <?php foreach ($noticias as $key => $value): ?>
                    <div class="col-md-6">
                        <div class="thumbnail">
                            <img src="{!! url($value->imagem) !!}" alt="" />
                            <div class="caption">
                                <h3>{!! $value->titulo !!}</h3>
                                <h3>{!! $value->subtitulo !!}</h3>
                                <h3>{!! $value->descricao !!}</h3>
                                <h3>{!! $value->categoria !!}</h3>
                                <span class="pull-right"> {!! $value->created_at->diffForHumans() !!}</span>
                                <p>
                                    <!--a href="{!! url('admin/visualizar_slide/'.$value->id) !!}" class="btn btn-success" role="button">Visualizar</a-->
                                    <a href="{!! url('admin/editar_noticia/'.$value->id) !!}" class="btn btn-primary" role="button">Editar</a>
                                    <a href="{!! url('admin/deletar_noticia/'.$value->id) !!}" class="btn btn-danger" role="button">Deletar</a>
                                </p>          
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

@endsection
