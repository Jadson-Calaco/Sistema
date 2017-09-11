@extends('admin.templates.templateAdmin')

@section('conteudo')
<form action="{{ url('/admin/update/'.$plano->id)}}" method="post"  enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
        <label class="control-label" for="inputPlano">Nome do Plano</label>
        <input class="form-control" id="inputPlano" placeholder="Nome do Plano" value="{!!$plano->nome_plano !!}" type="text" name="nome_plano" required="true">
    </div>
    <!--div class="form-group">
        <label class="control-label" for="inputDescricao">Descrição</label>
        <input class="form-control" id="inputDescricao" placeholder="Descrição do plano" type="text" name="inputDescricao">
    </div-->
    <div class="form-group">
        <label class="control-label" for="inputDescricao">Quantidade de Quesões</label>
        <input class="form-control" id="inputQuant" placeholder="Quantidade de Questões" value="{!! $plano->quant_questao !!}" type="text" name="quant_questao" required="true">
    </div>
    <div class="form-group">
        <label class="control-label" for="inputValidade">Validade (em Mêses)</label>
        <input class="form-control" id="inputValidade" placeholder="validade do plano" type="text" value="{!! $plano->quant_mes!!}" name="quant_mes" required="true">
    </div>
    <div class="form-group">
        <label class="control-label" for="inputValor">Valor em R$</label>
        <input class="form-control" id="inputValor" placeholder="Valor do plano" value="{!! $plano->valor!!}" type="text" name="valor" required="true">
    </div>
    <div class="form-group">
        <label> 
            <input type="checkbox" id="status" name="status" value="ativo" @if( isset($plano) && $plano->status == 'ativo')checked @endif>
            Ativo ?
        </label>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check"></i>Alterar ?</button>

</form>
@endsection