@extends('admin.templates.templateAdmin')

@section('conteudo')
    <div class="collapse" id="adicionar_plnos">
        <div class="well">
            <form name="cad_questoes" action="{{url('admin/update_questao/'.$questoes->id)}}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label" for="id_disciplina"> Disciplina </label>
                    <select name="id_disciplina"  id="id_disciplina" class="form-control" required="">
                        <option value=""></option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="assunto"> Assunto </label>
                    <select name="assunto" id="assunto" class="form-control" value="{!!$questoes->assunto !!}">
                        <!--option value="">Assunto da questão</option-->
                    </select>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionando Questões</div>

                    <div class="panel-body">
                        <textarea class="ckeditor" name="texto" id="ckeditor" value="{!!$questoes->enunciado !!}"required=""></textarea>
                    </div>
                    
                </div>
                <div class="hero-unit">
                    <input type="submit" class="btn btn-large btn-lg btn-primary" value="Salvar Dados" data-toggle="modal"/>
                </div>
            </form>
        </div>

    </div>


@endsection