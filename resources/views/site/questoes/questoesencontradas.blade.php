@extends('site.template.templateQuestao')

@section('conteudo')

 
<form id="submeterPdf" method="post" action="{{url('pdf')}}">
        <input  type="hidden" name="_token" value="{{csrf_token()}}" >      
    <table id="questoes" class="table table-hover" cellspacing="0" width="100%" >
        <thead>
            <tr>
                <th>  Questoes   </th>
            </tr>
        </thead>
        <tbody>
             @if($questoess!=null)
                @foreach($questoess as $questao)
             <tr>
               <td style="border-style: solid;">
                   {{$questao->enunciado}}
               </td>
             </tr>
                @endforeach
             @endif             
        </tbody>                 
        
    </table>
   
    <br>
    <input type="submit" id="botao2" value="Imprimir"  class="btn btn-primary" />
</form>    

@endsection


