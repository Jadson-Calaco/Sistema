
 $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
  $(document).ready(function() {
      $('#botao2').hide();
       $('#botao3').hide(); 
      var questoesSelecionadas=[];
      var table = $('#questoes').DataTable({
                 select:'multi',
        "lengthMenu": [[3, 5, 10, -1], [3, 5, 10, "All"]]
   
          } );
          $('#questoes tbody').on( 'click', 'tr', function () {
              var quest=table.row( this ).data();
              $('#botao2').show();
               $('#botao3').show();
              
                if(questoesSelecionadas.length==0){
                    questoesSelecionadas.push(quest);
                }else{
                    var j=questoesSelecionadas.length-1;
                     for(i=0;i<questoesSelecionadas.length;i++){
                        if(questoesSelecionadas[i].toString()==quest){
                           
                            var itemAremover=questoesSelecionadas.indexOf(quest)
                            questoesSelecionadas.splice(itemAremover,1);
                            break;
                        }
                        if(i==j ||questoesSelecionadas.length==1   ){
                             questoesSelecionadas.push(quest);
                             break;
                        }
                        
                     }
                }
               console.log("Tamanho final="+questoesSelecionadas.length);
              
                  if(questoesSelecionadas.length==0){
                    $('#botao2').hide(); 
                    $('#botao3').hide(); 
                  }
              
       });
       $('#botao2').on("click",function(event ){
           // event.preventDefault();
           $.post("pdf", {questoesPraEnviar:questoesSelecionadas}, function(data){

                       console.log(data);
                        window.location=data;
           });
       });
        $('#botao3').on("click",function(event ){
           // event.preventDefault();
           $.post("world", {questoesPraEnviar:questoesSelecionadas}, function(data){

                       console.log(data);
                        window.location=data;
           });
       });
         
       $("a[href]").on("click",function( event){
           event.preventDefault();
           var link=this.href;
            console.log(link);
              if(questoesSelecionadas.length!=0){
                 var test= confirm("Dejesa salvar as questoes já selecionadas?");
                    if(test==true){
                      $.post("salvarquestoesselecionadas", {questoess:questoesSelecionadas}, function()
                      {
                       console.log(questoesSelecionadas);
                           questoesSelecionadas=[];
                           window.location=link;
                       });
                   }else{
                        questoesSelecionadas=[];
                          window.location=link;
                   }
              }else{
                window.location=link;
              }
      }); 
   });
    
    
   