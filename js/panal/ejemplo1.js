window.addEventListener("load", function() {
      if (CarrotSearchFoamTree.supported) {
      var foamtree = new CarrotSearchFoamTree({
        id: "visualization",
        dataObject: {
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
        }
      });
    } else {
      console.log("Visualization not supported.");
    }

});