
 $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
  $(document).ready(function() {
      $('#botao2').hide();
      var questoesSelecionadas=[];
      var table = $('#questoes').DataTable({
                 select:'multi',
        "lengthMenu": [[3, 5, 10, -1], [3, 5, 10, "All"]]
   
          } );
          $('#questoes tbody').on( 'click', 'tr', function () {
              var quest=table.row( this ).data();
               $('#botao2').show();
              //console.log("Valor selecioanado= "+quest);
              //console.log("--------------------------------------------------------------------------" );
                if(questoesSelecionadas.length==0){
                    questoesSelecionadas.push(quest);
                    //console.log("Valor selecioanado= "+quest);
                     //console.log("tamanho do array inicial= "+questoesSelecionadas.length);
                   
                   
                  }else{
                    var j=questoesSelecionadas.length-1;
                    //console.log("tamanho do array= "+questoesSelecionadas.length);
                    //console.log("Valor de j= "+j);
                      for(i=0;i<questoesSelecionadas.length;i++){
                          //console.log("Interacao= "+i);
                          //console.log("Valor de j= "+j);
                          //console.log("Valor de i= "+i);
                           //console.log("Tamnaho do array= "+questoesSelecionadas.length);
                        if(questoesSelecionadas[i].toString()==quest){
                            //console.log("valor a ser removido= "+questoesSelecionadas[i].toString());
                            var itemAremover=questoesSelecionadas.indexOf(quest)
                            // console.log("if 1");
                              questoesSelecionadas.splice(itemAremover,1);
                             //console.log("valor removido= "+quest);
                            break;
                        }
                        if(i==j ||questoesSelecionadas.length==1   ){
                             questoesSelecionadas.push(quest);
                            // console.log("if 2");
                              //console.log("valor adicionado= "+quest);
                             break;
                             //console.log("tamanho= "+questoesSelecionadas.length);
                              //console.log("Valor de i= "+i);
                        }
                         //console.log(questoesSelecionadas[i]);
                      }
                     
                   
                       //console.log("--------------------------------------------------------------------------" );
                }
               console.log("Tamanho final="+questoesSelecionadas.length);
              //console.log("--------------------------------------------------------------------------" );
              //console.log("Array final-incio--------------------------------------------------------------------------" );
              //for(i=0;i<questoesSelecionadas.length;i++){
                      //  console.log(questoesSelecionadas[i].toString());
              //}
              //console.log("Array final-fim--------------------------------------------------------------------------" );
              if(questoesSelecionadas.length==0){
                   $('#botao2').hide();
                   
                   
                  }
              
        } );
        $('#botao2').click(function(event ){
            event.preventDefault();
           $.post("/pdf", {questoesPraEnviar:questoesSelecionadas}, function()
               {
                  
                       console.log(questoesSelecionadas);
                   
                  
               });
        });
         
         $("a[href]").on("click",function( event){
               event.preventDefault();
            if(questoesSelecionadas.length!=0){
                var test= confirm("Dejesa savar as questoes jรก selecionadas?");
                  if(test==true){
                     $.post("/salvarquestoesselecionadas", {questoess:questoesSelecionadas}, function()
                     {
                  
                       console.log(questoesSelecionadas);
                   
                           questoesSelecionadas=[];
                     });
                   }else{
                        questoesSelecionadas=[];
                         $("a[href]").off("click"); 
                   }
            }else{
                $("a[href]").off("click");
            }
    }); 
     } );
    
    
   