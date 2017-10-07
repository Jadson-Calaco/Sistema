@extends('admin.templates.templateAdmin')

@section('conteudo')

 
<form id="submeterQuestoes"  method="post">
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
    <button  type="button" id="botao2" class="btn btn-primary" >Gerar pdf</button>
    <button  type="button" id="botao3" class="btn btn-primary" >Gerar world</button>
</form>    



@endsection


