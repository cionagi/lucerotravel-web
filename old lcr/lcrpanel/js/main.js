$(document).ready(function(){   
    oTable = $('.recep').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
                "oLanguage":{
                "sProcessing":   "Procesando...",
                "sLengthMenu":   "Mostrar _MENU_ registros",
                "sZeroRecords":  "No se encontraron resultados",
                "sInfo":         "Mostrando desde _START_ hasta _END_ de _TOTAL_ registros",
                "sInfoEmpty":    "Mostrando desde 0 hasta 0 de 0 registros",
                "sInfoFiltered": "(filtrado de _MAX_ registros en total)",
                "sInfoPostFix":  "",
                "sSearch":       "Buscar:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sPrevious": "Anterior",
                    "sNext":     "Siguiente",
                    "sLast":     "Último"
                }
            }
    });
    
    
    $("#table #galeria .enlace").click(function(){
        var id = $(this).attr("id");
        if(confirm("Estas seguro que deseas eliminar esta foto?")){
            $.ajax({
                type    : "POST",
                url     : "ajax/eliminar_foto_galeria.php",
                data    : "codigo="+id,
                success : function(valor){
                    
                    if(valor == ""){
                        $(location).attr('href',"galeria.php");
                    }else{
                        alert(valor);
                    }
                }
            })
        }
    })
    
    $("#table #slider .enlace").click(function(){
        var id = $(this).attr("id");
        if(confirm("Estas seguro que deseas eliminar este slider: "+$(this).attr("title")+"?")){
            $.ajax({
                type    : "POST",
                url     : "ajax/eliminar_slider.php",
                data    : "codigo="+id,
                success : function(valor){
                    if(valor == ""){
                        $(location).attr('href',"slider.php");
                    }else{
                        alert(valor);
                    }
                },
                 error: function(valor){
                    alert(valor);
                 }
            })
        }
    })
    
    $("#table .ofertas .enlace").click(function(){
        var id = $(this).attr("id");
        if(confirm("Estas seguro que deseas eliminar esta oferta: "+$(this).attr("title")+"?")){
            $.ajax({
                type    : "POST",
                url     : "ajax/eliminar_oferta.php",
                data    : "codigo="+id,
                success : function(valor){
                    $(location).attr('href',"ofertas.php");
                },
                 error: function(valor){
                    alert(valor);
                 }
            })
        }
    })
    
    $("#table .recepcion .enlace").click(function(){
        var id = $(this).attr("id");
        if(confirm("Estas seguro que deseas eliminar este recepcionista: "+$(this).attr("title")+"?")){
            $.ajax({
                type    : "POST",
                url     : "ajax/eliminar_recep.php",
                data    : "codigo="+id,
                success : function(valor){
                    $(location).attr('href',"recepcionistas.php");
		    //alert(valor);
                },
                 error: function(valor){
                    alert(valor);
                 }
            })
        }
    })
    
    
    
    $("#table .excursiones_e .enlace").click(function(){
        var id = $(this).attr("id");
        if(confirm("Estas seguro que deseas eliminar esta Excursion: "+$(this).attr("title")+"?")){
            $.ajax({
                type    : "POST",
                url     : "ajax/eliminar_excursion.php",
                data    : "codigo="+id,
                success : function(valor){
                    if(valor == ""){
                        $(location).attr('href',"excursiones.php");
                    }else{
                        alert(valor);
                    }
                },
                 error: function(valor){
                    alert(valor);
                 }
            })
        }
    })
    
    $("#table .ver-comentarios .enlace").click(function(){
        var id = $(this).attr("id");
	    $.ajax({
		type    : "POST",
		url     : "ajax/ver-comentarios.php",
		data    : "codigo="+id,
		success : function(valor){
		    if(valor == ""){
			$(location).attr('href',"excursiones.php");
		    }else{
			alert(valor);
		    }
		},
		 error: function(valor){
		    alert(valor);
		 }
	    })
    })
    
    
    
    $("#table .subscript .enlace").click(function(){
        var id = $(this).attr("title");
        if(confirm("Estas seguro que deseas eliminar esta subscriptor: "+$(this).attr("title")+"?")){
            $.ajax({
                type    : "POST",
                url     : "ajax/eliminar_sub.php",
                data    : "codigo="+id,
                success : function(valor){
                    $(location).attr('href',"subscripciones.php");
                },
                 error: function(valor){
                    alert(valor);
                 }
            })
        }
    })
    
    
    $("#select_excursion").click(function(){
       if(($("#oferta option:selected").val())=="Sin excursiones"){
            alert("Usted no tiene Excursiones o puede que las excursiones que tenga ya tengan descuento");
       }else{
            $("#boton1").css("visibility","visible");
            var id= $("#oferta option:selected").attr("id");
            $.ajax({
                 type    : "POST",
                 url     : "ajax/monto_ajax.php",
                 data    : "codigo="+id,
                 success : function(valor){
                    $("#monto_exc").attr('value', valor);
                 }
            })
       }
    });
    
    
    $("#descuento").keyup(function(){
        var inicial = $("#monto_exc").val();
        var desc = $("#descuento").val();
        var total = inicial - ((inicial * desc)/100);
        $("#total").val(total);
    });
    
    
    $("#ver-comentarios").click(function(){
	
    });


    
    
    
});