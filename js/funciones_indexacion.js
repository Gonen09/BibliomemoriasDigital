function enviarFormulario(){
	id = document.getElementById('idMemoria').value;
	comprobarExistenciaIdTesis (id);
}
	
function comprobarExistenciaIdTesis (id_tesis){
	alert ('Comenzando proceso Indexando.....');
	$.ajax({
           type: "POST",
           url: "php/verificar_id_ memoria.php",
           data:{'id_memoria':id_tesis},
			success: function(data)
           {
				alert (data);
				if (data == 'true'){
					alert ('la id de la tesis esta repetida');
				}
				else
				if (data == 'false'){
					indexar();
				}
				else{
					alert ('Error en la indexación');
				}
           }
    });	
}

function indexar(){
	
	var formData = new FormData(document.getElementById("formulario"));
	//formData.append("dato", "valor");
	$.ajax({
    url: "php/agregar_documento.php",
    type: "post",
    dataType: "html",
    data: formData,
    cache: false,
    contentType: false,
    processData: false
})
    .done(function(res){
		alert ('......Indexado');
       // $("#mensaje").html("Respuesta: " + res);
    });
}
