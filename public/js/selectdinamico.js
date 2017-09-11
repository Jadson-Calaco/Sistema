//select dinamico em relação a disciplina selecionada
$("#materia").change(function(event){
    var serie=document.getElementById("serie").value;
    var materia=document.getElementById("materia").value;
    
    if(serie==0){
    $.get("assuntos/"+event.target.value+"",function(response,materia){
        console.log(response);
        $("#assunto").empty();
        for(i=0;i<response.length;i++){
            $("#assunto").append("<option value='"+response[i].id_assunto+"'>"+response[i].assunto+"</option>");
          }
        });
    }else{
        $.get("assuntoss/"+materia+"/"+serie,function(response,materia,serie){
        console.log(response);
        $("#assunto").empty();
        for(i=0;i<response.length;i++){
            $("#assunto").append("<option value='"+response[i].id_assunto+"'>"+response[i].assunto+"</option>");
          }
        });
    }
        
     });


//select dinamico em relação a disciplina selecionada Silvan
$("#id_disciplina").change(function(event){
    var id_disciplina = document.getElementById("id_disciplina").value;
    
    $.get("pega_assuntos/"+event.target.value+"",function(response,id_disciplina){
        console.log(response);
        $("#assunto").empty();
        for(i=0;i<response.length;i++){
            $("#assunto").append("<option value='"+response[i].id+"'>"+response[i].assunto+"</option>");
          }
        });
                    
     });
     
     
//select dinamico em relação a serie selecionada
$("#serie").change(function(event){
    var serie=document.getElementById("serie").value;
    var materia=document.getElementById("materia").value;
    
    if(materia!=0){
         $.get("assuntoss/"+materia+"/"+serie,function(response,materia,serie){
        console.log(response);
        $("#assunto").empty();
        for(i=0;i<response.length;i++){
            $("#assunto").append("<option value='"+response[i].id_assunto+"'>"+response[i].assunto+"</option>");
          }
        });
    }

});