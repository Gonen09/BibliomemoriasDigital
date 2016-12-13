

function actualizarTabla(){
	var url = "php/generar_tabla_de_documentos.php"; // El script a dónde se realizará la petición.
	$.ajax({
	   type: "POST",
	   url: url,
		data:{},
		success: function(data)
	   {
			document.getElementById("panel_tabla").innerHTML = data;
			$('#tablaMemoria').DataTable( {
			"language": {
				"sProcessing":    "Procesando...",
				"sLengthMenu":    "Mostrar _MENU_ registros",
				"sZeroRecords":   "No se encontraron resultados",
				"sEmptyTable":    "Ningún dato disponible en esta tabla",
				"sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix":   "",
				"sSearch":        "Buscar:",
				"sUrl":           "",
				"sInfoThousands":  ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst":    "Primero",
					"sLast":    "Último",
					"sNext":    "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			},
			"columnDefs" : [
				{ "orderable" : false, "targets" : 5 }
			]
		});
		$('.ask').jConfirmAction();
		}
    });	
}


function eliminarDocumento (id_documento){
	var url = "php/borrar_documento.php"; // El script a dónde se realizará la petición.
	adata = {'id_documento':id_documento};
	$.ajax({
	   type: "POST",
	   url: url,
		data:adata,
		success: function(data)
	   {
			actualizarTabla();
		}
    });	

}