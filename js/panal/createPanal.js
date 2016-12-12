window.addEventListener( "load", function () {

  // Obtiene los datos. Este ejemplo usa los resultados de la búsqueda para la query "visualization".
  var dataObject = {
	  	groups: [
			{   id: "1", 
				label: "Profesores Guía", 
				groups: [
					  { id: "1.1", label: "Eric Jeltsch" },
					  { id: "1.2", label: "Guillermo Leyton" },
					  { id: "1.3", label: "Manuel Yáñez"},
					  { id: "1.4", label: "Juan Torres"},
					  { id: "1.5", label: "Mauro San Martín"},
					  { id: "1.6", label: "Miguel Ramos"}
				]
			},
			{   id: "2", 
				label: "Año", 
				groups: [
					  { id: "1.1", label: "2003" },
					  { id: "1.2", label: "2004" },
					  { id: "1.3", label: "2005" },
					  { id: "1.4", label: "2006" },
					  { id: "1.5", label: "2007" },
					  { id: "1.6", label: "2008" },
					  { id: "1.7", label: "2009" },
					  { id: "1.8", label: "2010" },
					  { id: "1.9", label: "2011" },
					  { id: "1.10", label: "2012"},
					  { id: "1.11", label: "2013"},
					  { id: "1.12", label: "2014"},
					  { id: "1.13", label: "2015"},
					  { id: "1.14", label: "2016"}
				]
			},
			{   id: "3", 
				label: "Temas", 
				groups: [
					  { id: "1.1", label: "Ingeniería de Software" },
					  { id: "1.2", label: "Base de Datos" },
					  { id: "1.3", label: "Comunicación de Datos y Redes"},
					  { id: "1.4", label: "Inteligencia Artificial"}
				]
			}
		]
	};

	var elemento = document.getElementById("visualization");

	// Inicializacion del FoamTree
	if( CarrotSearchFoamTree.supported ){
		var foamtree = new CarrotSearchFoamTree( {
			element : elemento,
			pixelRatio : window.devicePixelRatio || 1,
			relaxationInitializer : "fisheye",
			dataObject : dataObject,
			titleBarDecorator : function (opts, props, vars) {
				vars.titleBarText = props.group.snippet;
			},
			maxLabelSizeForTitleBar : Number.MAX_VALUE
		});
	} else {
		console.log("La visualización no está soportada...Lo sentimos");
	}


	// Redimensiona el FoamTree cuando la orientación cambia
  	window.addEventListener("orientationchange", foamtree.resize);

  	// Redimensiona ante cambios de dimesiones de la ventana
  	window.addEventListener("resize", (function() {
		var timeout;
		return function() {
		  window.clearTimeout(timeout);
		  timeout = window.setTimeout(foamtree.resize, 300);
		}
 	})());
});