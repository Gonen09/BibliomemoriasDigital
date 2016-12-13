function enviarFormulario(){
	/*
	var url = "php/agregar_documento.php"; // El script a dónde se realizará la petición.
	alert ('inicio indexado');
	$.ajax({
           type: "POST",
           url: url,
           data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
		   success: function(data)
           {
			 	alert ('Indexado'+data);
           }
    });	
	*/
	alert ('Indexando.....');
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
	
