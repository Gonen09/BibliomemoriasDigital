// Ventana Modal cargando
//import('modal_cargando.js');

function enviarFormulario(){
	id = document.getElementById('idMemoria').value;
	comprobarExistenciaIdTesis (id);
}

function comprobarExistenciaIdTesis (id_tesis){
	//alert ('Comenzando proceso Indexando.....');
	abre_modal();//Inicio modal
	$.ajax({
           type: "POST",
           url: "php/verificar_id_ memoria.php",
           data:{'id_memoria':id_tesis},
			success: function(data)
           {
				if (data == 'true'){
					alert ('la id de la tesis esta repetida');
					cierra_modal();//Final modal
				}
				else
				if (data == 'false'){
					indexar();
				}
				else{
					alert ('Error en la indexación');
					cierra_modal();//Final modal
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
		alert ('La memoria fue ingresada correctamente');
		cierra_modal();//Final modal
		location.href="admin_home.php";
       // $("#mensaje").html("Respuesta: " + res);
    });
}

function abre_modal(){
  $("#modal-cargando").modal("show");
}


function cierra_modal(){
  $("#modal-cargando").modal("hide");
}