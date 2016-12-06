



function enviarFormulario(){
	
	var url = "php/resultados.php"; // El script a dónde se realizará la petición.
	var a = document.getElementById("p_avanzada");
	
	var contenido = document.getElementById("q_contenido").value;
	//alert (contenido);
		
	var adata = new Array();
	if (a.getAttribute('aria-expanded') == 'false'){ //Si la busqueda es normal
		if (contenido== ''){
			alert('No se ha completado ningún criterio campo de búsqueda');
			return;
		}
		adata = {'busqueda':'inicial','contenido':contenido};
	}
	else{
		var titulo  = document.getElementById("q_titulo").value;
		var autor  = document.getElementById("q_autor").value;		
		var profesor  = document.getElementById("q_profesor").value;	
		var ano  = document.getElementById("q_ano").value;	
		var abs  = document.getElementById("q_abstract").value;	
		if (
			(contenido	== '') &&
			(titulo		== '') &&
			(autor		== '') &&
			(profesor	== '') &&
			(abs		== '') 
		){
			alert('No se ha completado ningún criterio campo de búsqueda');
			return;
		}
		adata = {'busqueda':'inicial','contenido':contenido,'titulo':titulo,'autor':autor,'profesor':profesor,'ano':ano,'abs':abs};
	}	
	
    $.ajax({
           type: "POST",
           url: url,
           //data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
		   //data: {"parametro1" : "valor1", "parametro2" : "valor2"},//.serialize(), // Adjuntar los campos del formulario enviado.
			//data:adata,
			data:adata,
			success: function(data)
           {
			 	//if (data.length == 0)
					//alert('no se han especificado criterios de búsqueda');
				//else
					document.getElementById("contenedor_panal_y_resultados").innerHTML = data;
					//rellenar_panal();
				//alert (data);
				var scs=data.extractScript();    //capturamos los scripts 
				scs.___evalScript();       //interpretación  scripts
				
				
           }
    });	
	
}

function cambiarPagina(pagina){
	modificarResultados(null,pagina);
	//alert(pagina);
	//modificarResultados(null,pagina);
}


function modificarResultados(facet,pagina){
	var adata = new Array();
	
	if (facet == null){//cambiando pagina
		adata = {'pagina':pagina};
	}
	var url = "php/modificar_resultados.php"; // El script a dónde se realizará la petición.
	$.ajax({
           type: "POST",
           url: url,
           data: adata,//.serialize(), // Adjuntar los campos del formulario enviado.
			success: function(data)
           {
			 	document.getElementById("panel_resultados").innerHTML = data;
			}
    });	
	
}
