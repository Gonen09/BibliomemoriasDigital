// JavaScript Document

function enviar_consulta(id_formulario,id_mostrar){
	var url = "../consulta_login-php";
	$.ajax({
		type: "POST",
		url: url,
		data: $("#"+id_formulario).serialize(),		
		success: function(data){
			$("#"+id_mostrar).html(data);
		}
	});	
}