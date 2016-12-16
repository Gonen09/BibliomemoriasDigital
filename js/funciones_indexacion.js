function enviarFormulario(){
	id = document.getElementById('idMemoria').value;
	comprobarExistenciaIdTesis (id);
}
	
function comprobarExistenciaIdTesis (id_tesis){
	alert ('Comenzando proceso Indexando.....');//Inicio modal
	$.ajax({
           type: "POST",
           url: "php/verificar_id_ memoria.php",
           data:{'id_memoria':id_tesis},
			success: function(data)
           {
				if (data == 'true'){
					alert ('la id de la tesis esta repetida'); //final modal
				}
				else
				if (data == 'false'){
					indexar();
				}
				else{
					alert ('Error en la indexación');//final modal
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
		alert ('......Indexado');//final modal
       // $("#mensaje").html("Respuesta: " + res);
    });
}
