function borrar_correo(id_correo){

	//alert("Eliminando correo numero:"+id_correo);
	confirmar = confirm("¿ Está seguro de eliminar el correo ?");

	if (confirmar){

		document.getElementById("correo-lista").innerHTML="";

		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
			 document.getElementById('correo-lista').innerHTML = xhttp.responseText;
			}
		};

		document.getElementById("correo-contenido").innerHTML=''+
			'<div class="mailbox-read-message">'+
				'<legend class="titulos"><b>Correo</b></legend>'+
				'<br><p> Seleccione un correo de la lista de correos</p><br>'+
			'</div>';

		xhttp.open("GET","php/contacto/contacto_borrar.php?id="+id_correo,true);
		xhttp.send();

		alert('Correo eliminado');
	}
}
