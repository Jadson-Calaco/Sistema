@extends('site.template.templateQuestao')

@section('conteudo')

 
 <table id="questoes" class="table table-striped table-bordered" cellspacing="0" width="100%" >
        <thead>
            <tr>
                <th>  Questoes   </th>
            </tr>
        </thead>
        <tbody>
            
                @for($i=0;$i<$tamanho;$i++)
                  @for($j=0;$j<1;$j++)
                
             <tr>
               <td style="border-style: solid;"> {{$questoesSimulado[$i][$j]}}</td>
             </tr>
                 @endfor
               @endfor
                    
        </tbody>                 
        
    </table>
   
  

@endsection