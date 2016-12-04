
function enviar_consulta(id_formulario,id_mostrar){
	// Deberia ser "../php/consulta_login.php" pero lo reconoce
	var url = "./php/consulta_login.php"

	alert("url: "+url+"  id_form: "+id_formulario+"  id_mostrar: "+id_mostrar)

	$.ajax({
		type: "POST",
		url: url,
		data: $("#"+id_formulario),
		//data: $("#"+id_formulario).serialize(),
		success: function(data){
			$("#"+id_mostrar).html(data);
		}
	});
}
