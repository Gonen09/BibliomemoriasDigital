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

function agregarFiltro(filtro){
	modificarResultados(filtro,null);
}

function modificarResultados(facet,pagina){
	var adata = new Array();
	var ano = '';
	var id_memoria = '';
	var profesor = '';
	if(facet != null){
		var opciones = facet.split('|');
		switch(opciones[0]){
			case 'ano':
				ano = opciones[1];
			break;
			case 'id_memoria':
				id_memoria = opciones[1];
			break;
			case 'profesor':
				profesor = opciones[1];
			break;
		}
	}
	
	
		
	
	
	if (facet == null){//cambiando pagina
		adata = {'pagina':pagina};
	}
	else
	if (pagina == null){
		adata = {'ano':ano,'id_memoria':id_memoria,'profesor':profesor};
	}
	else{
		adata = {'pagina':pagina,'ano':ano,'id_memoria':id_memoria,'profesor':profesor};
	}
	
	//adata = {'pagina':pagina,'ano':'2010','id_memoria':'','profesor':''};
	//adata = {'busqueda':'inicial','busquedaa':'inicial','abusdsqueda':'inicial'};
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
