@extends('admin.templates.templateAdmin')

@section('conteudo')

<form role="form" action="{{ url('/admin/update_assunto/'.$assuntos->id)}}" method="POST"  enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group">
        <label class="control-label" for="id_disciplina">Disciplina</label>
        <select class="form-control" id="id_disciplina" name="id_disciplina" required="true">
            @foreach($disciplinas as $disciplina)
                <option value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="control-label" for="assunto">Assunto</label>
        <input class="form-control" id="assunto" value="{!!$assuntos->assunto !!}" type="text" name="assunto" required="true">
    </div>
    <div class="form-group">
        <label class="control-label" for="serie">Serie/Ano</label>
        <input class="form-control" id="serie" value="{!!$assuntos->serie !!}" type="text" name="serie" required="true">
    </div>

    <!--div class="form-group">
        <label class="control-label" for="inputStatus">Ativa</label>
        <input class="" type="checkbox" name="status">
        <p class="help-block">Deseja ativar isso ? .</p>
    </div-->
    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check"></i>Salvar</button>
</form>
@endsection