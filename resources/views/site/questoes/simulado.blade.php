@extends('admin.templates.templateAdmin')

@section('conteudo')

 @if($tamanho!=0)
 <table id="questoes"  class="table table-hover" cellspacing="0" width="100%" >
        <thead>
            <tr>
                <th>  Questoes   </th>
            </tr>
        </thead>
        <tbody>
            
                @for($i=0;$i<$tamanho;$i++)
                  
                
             <tr>
               <td style="border-style: solid;"> {{$questoesSimulado[$i]}}</td>
             </tr>
              
               @endfor
                    
        </tbody>                 
        
    </table>
 @else
 <p><b>Busque e selecione as questões antes de criar o simulado</b></p>
 @endif
 
<br>
    <button  type="button" id="botao2" class="btn btn-primary" >Gerar pdf</button>
    <button  type="button" id="botao3" class="btn btn-primary" >Gerar world</button>
  

@endsection