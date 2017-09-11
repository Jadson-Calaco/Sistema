@extends('admin.template.templateAdmin')

@section('conteudo')

<div class="row">
    <div class="col-md-12">

        <div class="row">
            <center>
                <img src="{!! url($noticia->imagem) !!}" alt="" />
            </center>
        </div>
        <div class="row">
            <br>
            {!! $noticia->titulo !!}
        </div>
        <div class="row">
            <br>
            {!! $noticia->subtitulo !!}
        </div>
        <div class="row">
            <br>
            {!! $noticia->descricao !!}
        </div>
    </div>
</div>
@endsection
