function leer_correo(id_correo){

	//alert("Cargando correo numero:"+id_correo);

	document.getElementById("correo-contenido").innerHTML="";

	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("correo-contenido").innerHTML = xhttp.responseText;
		}
	};

	xhttp.open("GET","php/contacto/contacto_correo.php?id="+id_correo,true);
	xhttp.send();
}
