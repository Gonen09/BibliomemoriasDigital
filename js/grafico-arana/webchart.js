var w = 500,
	h = 500;

var colorscale = d3.scale.category10();

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

////////////////////////////////////////////
/////////// Initiate legend ////////////////
////////////////////////////////////////////

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
	.attr("font-size", "12px")											// Tamaño titulo
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
	  .attr("font-size", "11px")  // Tamaño letra leyenda
	  .attr("fill", "#737373")
	  .text(function(d) { return d; })
	  ;
