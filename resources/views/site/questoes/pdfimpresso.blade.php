<html>
    
    <head>
     <body>
        <table id="questoes" class="table table-striped table-bordered" cellspacing="0" width="100%" >
        <thead>
            <tr>
                <th> Questoes {{$tamanho}}</th>
            </tr>
        </thead>
        <tbody>
            
                @for($i=0;$i<$tamanho;$i++)
                  @for($j=0;$j<1;$j++)
                
             <tr>
               <td style="border-style: solid;"> {{$questoes[$i][$j]}}</td>
             </tr>
                 @endfor
               @endfor
                    
        </tbody>                 
        
    </table>
     </body>
    </head>    
</html>




        
          
         
  