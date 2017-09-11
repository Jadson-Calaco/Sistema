@extends('admin.templates.templateAdmin')

@section('conteudo')

<form role="form" action="{{ url('/admin/update_disciplina/'.$disciplinas->id)}}" method="POST"  enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
        <label class="control-label" for="nome_disciplina">Disciplina</label>
        <input class="form-control" id="nome_disciplina" value="{!!$disciplinas->nome !!}" type="text" name="nome_disciplina" required="true">
    </div>
    <!--div class="form-group">
        <label class="control-label" for="inputDescricao">Descrição</label>
        <input class="form-control" id="inputDescricao" placeholder="Descrição do plano" type="text" name="inputDescricao">
    </div-->
    <div class="form-group">
        <label class="control-label" for="carga_horaria">Carga Horaria</label>
        <input class="form-control" id="carga_horaria" value="{!!$disciplinas->carga_horaria !!}" type="text" name="carga_horaria" required="true">
    </div>

    <!--div class="form-group">
        <label class="control-label" for="inputStatus">Ativa</label>
        <input class="" type="checkbox" name="status">
        <p class="help-block">Deseja ativar isso ? .</p>
    </div-->
    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check"></i>Salvar</button>
</form>
@endsection