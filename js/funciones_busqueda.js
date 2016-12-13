function enviarFormulario(){
	
	var url = "php/resultados.php"; // El script a d�nde se realizar� la petici�n.
	var a = document.getElementById("p_avanzada");
	var contenido = document.getElementById("q_contenido").value;
	var adata = new Array();
	if (a.getAttribute('aria-expanded') == 'false'){ //Si la busqueda es normal
		if (contenido== ''){
			alert('No se ha completado ning�n criterio campo de b�squeda');
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
			alert('No se ha completado ning�n criterio campo de b�squeda');
			return;
		}
		adata = {'busqueda':'inicial','contenido':contenido,'titulo':titulo,'autor':autor,'profesor':profesor,'ano':ano,'abs':abs};
	}	
	
    $.ajax({
           type: "POST",
           url: url,
           //data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
			data:adata,
			success: function(data)
           {
				document.getElementById("contenedor_panal_y_resultados").innerHTML = data;
				var scs=data.extractScript();    //capturamos los scripts 
				scs.___evalScript();       //interpretaci�n  scripts
           }
    });	
}
function cambiarPagina(pagina){
	modificarResultados(null,pagina);
}

function agregarFiltro(filtro){
	modificarResultados(filtro,null);
}

function modificarResultados(facet,pagina){
	var adata = new Array();
	var ano = '';
	var clasificacion = '';
	var profesor = '';
	if(facet != null){
		var opciones = facet.split('|');
		switch(opciones[0]){
			case 'ano':
				ano = opciones[1];
			break;
			case 'clasificacion':
				clasificacion = opciones[1];
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
		adata = {'ano':ano,'clasificacion':clasificacion,'profesor':profesor};
	}
	else{
		adata = {'pagina':pagina,'ano':ano,'clasificacion':clasificacion,'profesor':profesor};
	}
	var url = "php/modificar_resultados.php"; // El script a d�nde se realizar� la petici�n.
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


function datosGraficos (ia,bdd,redes,sw){
	var datos = [
	 //Grupos para el gr�fico
		  [
			{ axis: "Inteligencia Artificial"       , value : ia },
			{ axis: "Base de Datos"                 , value : bdd  },
			{ axis: "Redes"        					, value : redes },
			{ axis: "Ingenieria de software"        , value : sw }
		  ]
	];
	mostrarGrafico (datos);
}

function mostrarGrafico (datos){
	//Opciones para el grafico ara�a, si no se configuran se cargaran las por defecto,
	//para cambiar de posicion el grafico configurar RadarChart.js
	var mi_configuracion = {
	  w: 300,													// Tama�o grafico horizontal
	  h: 300,													// Tama�o grafico vertical
	  maxValue: 0.6,
	  levels: 6,
	  ExtraWidthX: 300
	}
	RadarChart.draw("#chart", datos, mi_configuracion);
	
	var svg = d3.select('#body-chart')
	.selectAll('svg')
	.append('svg')
	.attr("width", w+300)
	.attr("height", h)

//Create the title for the legend
var text = svg.append("text")
	.attr("class", "title")
	.attr('transform', 'translate(90,0)')
	.attr("x", w - 430)															// Titulo x- = izquierda , x+ = derecha
	.attr("y", 10)																	// Titulo y- = arriba , y+ = abajo
	.attr("font-size", "12px")											// Tama�o titulo
	.attr("font-style","italic")										// Cursiva
	.attr("font-weight","bold")											// Negrita
	.attr("fill", "#404040")
	.text("Perfil del alumno VS Perfiles de ACM");  // Cambiar titulo

//Initiate Legend
var legend = svg.append("g")
	.attr("class", "legend")
	.attr("height", 100)
	.attr("width", 200)
	.attr('transform', 'translate(-200,20)')	// Posicion leyenda (x,y) : x- = izquierda , x+ = derecha ; y- = arriba , y+ = abajo
	;
	//Create colour squares
	legend.selectAll('rect')
	  .data(LegendOptions)
	  .enter()
	  .append("rect")
	  .attr("x", w - 65)
	  .attr("y", function(d, i){ return i * 20;})
	  .attr("width", 10)			// Ancho cuadrito leyenda
	  .attr("height", 10)			// Alto cuadrito leyenda
	  .style("fill", function(d, i){ return colorscale(i);})
	  ;
	//Create text next to squares
	legend.selectAll('text')
	  .data(LegendOptions)
	  .enter()
	  .append("text")
	  .attr("x", w - 52)
	  .attr("y", function(d, i){ return i * 20 + 9;})
	  .attr("font-size", "11px")  // Tama�o letra leyenda
	  .attr("fill", "#737373")
	  .text(function(d) { return d; })
	  ;
}








