var w = 500,
	h = 500;

var colorscale = d3.scale.category10();

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
