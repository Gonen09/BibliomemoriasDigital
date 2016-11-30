//Legend titles
var LegendOptions = ['ACM','Perfil de la tesis'];

//Data
var d = [
		  [
			{axis: "Inteligencia Artificial",value:0.59},
			{axis: "Base de Datos",value:0.6},
			{axis: "Ingeniería de Software",value:0.32},
			{axis: "Comunicación de Datos y Redes",value:0.34},
			{axis: "Computing Science",value: 0.4},
			{axis: "Software Engineering",value: 0.11},
			{axis: "Information System",value: 0.27},
			{axis: "Computer Engineering", value: 0.36},
			{axis: "Information Technology", value: 0.12}
		  ],
		  [
			{axis: "Inteligencia Artificial",value:0.59},
			{axis: "Base de Datos",value:0.56},
			{axis: "Ingeniería de Software",value:0.42},
			{axis: "Comunicación de Datos y Redes",value:0.34},
			{axis: "Computing Science",value: 0.48},
			{axis: "Software Engineering",value: 0.41},
			{axis: "Information System",value: 0.27},
			{axis: "Computer Engineering", value: 0.3},
			{axis: "Information Technology", value: 0.12}
		  ]
		];

//Opciones para el grafico araña, si no se configuran se cargaran las por defecto,
//para cambiar de posicion el grafico configurar RadarChart.js
var mycfg = {
  w: 300,													// Tamaño grafico horizontal
  h: 300,													// Tamaño grafico vertical
  maxValue: 0.6,
  levels: 6,
  ExtraWidthX: 300
}

//Call function to draw the Radar chart
//Will expect that data is in %'s
RadarChart.draw("#chart", d, mycfg);
