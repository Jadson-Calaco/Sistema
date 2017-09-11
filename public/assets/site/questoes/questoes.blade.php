@extends('site.template.templateQuestao')

@section('conteudo')

 <form method="post" action="{{url('questoes')}}"> 
       <input type='hidden' name="_token" value="{{csrf_token()}}"
    <fieldset>
        <legend> <strong>Filtros</strong> </legend>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="tipo_usuario">Serie :</label>
                <div class="controls">
                    <select class="form-control" id="serie" name="serie"  >
                        <option value="0">Selecione a serie</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="materia">Disciplina:</label>
                <div class="controls">
                    <select class="form-control"  id="materia" name="materia">
                        <option>Selecione a disciplina</option>
                         @foreach($materias as $materia)
                           <option value="{{ $materia->id }}">{{$materia->nome}}</option>
                         @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group col-md-5">
                <label for="assunto">Assunto:</label>
                <div class="controls">
                    <select class="form-control" id="assunto"  name="assunto" >
                      
                    </select>
                </div>
            </div>
           
        </div>
        <br> <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="questoes-filter-left-buttons">
                    <input type="submit" name="submit"  value="Fitrar" class="btn btn-primary"/>
                </div>
            </div>
            
        </div>
    </fieldset>
    
</form>
<br>
<form>

    <table class="table" id="questoes" style="border-style: solid;">
        <thead>
            <tr>
                <th>  Questoes   </th>
            </tr>
        </thead>
        <tbody>
             @if($questoess!=null)
                @foreach($questoess as $questao)
             <tr>
               <td style="border-style: solid;">{{$questao->enunciado}}</td>
             </tr>
                @endforeach
             @endif             
        </tbody>                 
        
    </table>
       
</form>
@endsection

@section('conteudo2')
<form>
    <fieldset>
        <legend><strong><center> Ultimas Pesquisas</center></strong></legend>

    </fieldset>     
</form>
@endsection

