<?php
	/*
	$versión_solr = solr_get_version();
	print $versión_solr;
	print "<br>";
	*/

	/*
	$info_campos = "";
	while ($post = each($_POST))
	{
		$info_campos = $info_campos."|".$post[0] . " = " . $post[1];
	}
	/**/
	//}

	function limpiarTexto  ($texto){
		$texto = str_replace(":","",$texto);
		$texto = str_replace("*","",$texto);
		$texto = str_replace(".","",$texto);
		$texto = str_replace(",","",$texto);
		$texto = str_replace("?","",$texto);
		$texto = str_replace("=","",$texto);
		$texto = str_replace("&","",$texto);
		$texto = str_replace("?","",$texto);
		$retorno = "";
		$palabras = explode(" ",$texto);
		$primera = true;
		foreach ($palabras as $p) {
			if ($p != ""){
				if (!$primera){
					$retorno = $retorno." ";
				}
				$retorno = $retorno.$p;
				$primera = false;
			}
		}
		return $retorno;
	}
	//Formando consulta
	$texto_consulta = "";


	//Agregando filtro de busqueda
	$campo_filtro = "";
	$filtro_query = "";
	if (isset($_POST["clasificacion"])){
		if ($_POST["clasificacion"] != ""){
			$campo_filtro = "clasificacion";
			$filtro_query = $_POST["clasificacion"];
			$texto_consulta = "*:*";
		}
	}
	else
	if ($_POST["busqueda"] == 'inicial' ){
		$contenido = limpiarTexto($_POST["contenido"]);
		if ($contenido != "")
			$texto_consulta = " contenido: ".$contenido;
		if (isset($_POST["titulo"])){
			$titulo = limpiarTexto($_POST["titulo"]);
			if ($titulo != ""){
				if ($texto_consulta != "")
					$texto_consulta = $texto_consulta." OR ";
				$texto_consulta = $texto_consulta." titulo_tesis: ".$titulo;
			}
		}
		if (isset($_POST["autor"])){
			$autor = limpiarTexto($_POST["autor"]);
			if ($autor != ""){
				if ($texto_consulta != "")
					$texto_consulta = $texto_consulta." OR ";
				$texto_consulta = $texto_consulta." alumno: ".$autor;
			}
		}
		if (isset($_POST["profesor"])){
			$profesor = limpiarTexto($_POST["profesor"]);
			if ($profesor != ""){
				if ($texto_consulta != "")
					$texto_consulta = $texto_consulta." OR ";
				$texto_consulta = $texto_consulta." profesor: ".$profesor;
			}
		}
		if (isset($_POST["ano"])){
			$ano = limpiarTexto($_POST["ano"]);
			if ($ano != ""){
				if ($texto_consulta != "")
					$texto_consulta = $texto_consulta." OR ";
				$texto_consulta = $texto_consulta." ano: ".$ano;
			}
		}
		if (isset($_POST["abs"])){
			$abs = limpiarTexto($_POST["abs"]);
			if ($abs != ""){
				if ($texto_consulta != "")
					$texto_consulta = $texto_consulta." OR ";
				$texto_consulta = $texto_consulta." abstract: ".$abs;
			}
		}
	}
	Setcookie("ultima_consulta", $texto_consulta);
	$options = array
	(
	    'hostname' => 'localhost',
	    'login'    => 'admin',
	    'password' => '',
	    'port'     => 8983,
	    'path'     => 'solr/tesis',
	);

	$client = new SolrClient($options);
	$query = new SolrQuery();
	$query->setQuery($texto_consulta);
	$query->setStart(0);
	$query->setRows(3);
	$query->addField('id_tesis')->addField('ano')->addField('alumno')->addField('score')->addField('titulo_tesis')->addField('profesor')->addField('valores_clasificacion');
	$query->setFacet(true);
	$query->addFacetField('ano')->addFacetField('profesor')->addFacetField('clasificacion');
	$query->addSortField('score', SolrQuery::ORDER_DESC);
	if ($campo_filtro  != "" && $filtro_query!= "")
		$query->addFilterQuery($campo_filtro.":".$filtro_query);

	$query_response = $client->query($query);
	$response = $query_response->getResponse();
?>

<div class="col-sm-6"> <!-- Panal resultados -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading" id="cabezera-panel">
				<h4 class="text-center">Panal</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12"> <!-- Agregar contenido para agrandar el grafico flotante -->
							<br><br><br><br><br><br>
							<br><br><br><br><br><br>
							<br><br><br><br><br><br>
							<br><br><br><br><br><br>
							<br><br><br><br>
							<div id="visualization"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- col-sm-6 --> <!-- End panal resultados-->

<div class="col-sm-6" id="panel_resultados"  > <!-- Resultados busqueda -->
	<div class="panel panel-default">
		<div class="panel-heading" id="cabezera-panel">
			<h4 class="text-center">Resultados</h4>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-condensed table-hover table-borderless">
					<tbody >
						<?php
							if($response->response->numFound > 0) {
								$docs = $response->response->docs;
								$numero_de_documentos = $response->response->numFound;
								$i=0;
							//	while($i < $numero_de_documentos){
								foreach ($docs as $documento_actual) {
						?>
									<div id="<?php print $documento_actual['id_tesis'];?>" name="publicacion" class="row">
										<tr>
											<td class="col-sm-1">
												<img src="image/busqueda/pdf.png" alt="pdf" class="img-responsive">
												<input type="hidden" id="<?php print $documento_actual['id_tesis'];?>_score" value="<?php print $documento_actual['score'];?>">
												<br>
												<p class="text-center"><a href="pdf/<?php print $documento_actual['id_tesis'];?>.pdf" id="archivo">Ver</a></p>
											</td>
											<td class="col-sm-1">
												<img src="image/busqueda/chart.png" alt="grafico" class="img-responsive">
												<br>
												<?php
													$texto_valores_areas = $documento_actual['valores_clasificacion'];
													$valores_areas = explode("|",$texto_valores_areas);
													$IA = 0;
													$SW = 0;
													$REDES = 0;
													$BDD = 0;

													foreach ($valores_areas as $valor){
														$aux = explode(":",$valor);
														switch ($aux[0]) {
															case 'Base de datos':
																$BDD = $aux[1];
																$BDD = $BDD / 100;
																break;
															case 'Ing Software':
																$SW = $aux[1];
																$SW = $SW / 100;
																break;
															case 'Inteligencia Artificial    ':
																$IA = $aux[1];
																$IA = $IA / 100;
																break;
															case 'Redes':
																$REDES = $aux[1];
																$REDES = $REDES / 100;
																break;
														}
													}
												?>
												<p data-toggle="modal" data-target="#modal-grafico" class="text-center"   onclick="datosGraficos (<?php echo $IA; ?>,<?php echo $BDD; ?>,<?php echo $REDES; ?>,<?php echo $SW; ?>)" ><a href="#" id="archivo">Ver</a></p>
											</td>
											<td class="col-sm-1">
												<hr>
											</td>
											<td class="col-sm-9">
												<?php
													//titulo
													print  '<h4><strong>Titulo: </strong><i id="titulo">'.$documento_actual['titulo_tesis'].'</i></h4>';
													//Alumnos
													$alumnos = $documento_actual['alumno'];
													for($ii = 0, $size = count($alumnos); $ii < $size; ++$ii) {
														print '<h4><strong>Autor: </strong><i id="autor">'.$alumnos[$ii].'</i></h4>';
													}
													//Profesores
													$profesores = $documento_actual['profesor'];
													for($ii = 0, $size = count($profesores); $ii < $size; ++$ii) {
														print '<h4><strong>Profesor: </strong><i id="profesor">'.$profesores[$ii].'</i></h4>';
													}
													//año
													print '<h4><strong>A&ntildeo: </strong><i id="ano">'.$documento_actual['ano'].'</i></h4>';
													//Id tesis
													print '<h4><strong>Id memoria: </strong><i id="id_tesis">'.$documento_actual['id_tesis'].'</i></h4>';
												?>
											</td>
										</tr>
									</div>
							<?php
									$i++;
								}//end while
							} else {
								//echo "No Documents Found".PHP_EOL;
							}
?>
					</tbody>
				</table>
			</div>
			<hr>
			<div align="center">
				<nav aria-label="Page navigation">
					<ul class="pagination" class="search-pagination">
						<?php
							$n_doc = $response->response->numFound; // maximo de documento
							$n_pag = floor($n_doc/3);
							$restante= $n_doc % 3;
							if ($restante > 0)
								$n_pag++;
							$c = 1;
							$pag_elegida = 1;

							if ($pag_elegida != 1){
								?>
								<li>
									<a  aria-label="Previous">
										<span aria-hidden="true" onclick="<?php echo "cambiarPagina(".($pag_elegida-1).")";?>">&laquo;</span>
									</a>
								</li>
								<?php
							}
							while ($c <= $n_pag){
								echo  "<li ";
								if ($c == $pag_elegida)
									echo 'class="active"';
								echo '><a onclick="';
								//if ($n_pag > 1)
									//echo "cambiarPagina(".$c.")";
								if ($n_pag > 1){
									if ($filtro_query == "")
										echo "cambiarPagina(".$c.")";
									else
										echo "modificarResultados('".$campo_filtro."|".$filtro_query."',".$c.")";
								}
								echo '">';
								echo $c;
								echo "</a></li>";
								$c++;
							}
							if ($pag_elegida != $n_pag && $n_pag > 1){
								?>
								<li>
								<a  onclick= "<?php
								//echo "cambiarPagina(".($pag_elegida+1).")";
									if ($filtro_query == "")
										echo "cambiarPagina(".($pag_elegida+1).")";
									else
										echo "modificarResultados('".$campo_filtro."|".$filtro_query."',".($pag_elegida+1).")";

								?>"aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
								</li>
								<?php
							}
						?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div> <!-- End resultados -->


<script>
	//GRAFICO PANAL

	//alert('<?php //echo $info_campos; ?>');
	//
	var ultimaOpcion;
	  	if (CarrotSearchFoamTree.supported) {
	  		var foamtree = new CarrotSearchFoamTree({
				id: "visualization",
				dataObject: {
		  			groups: [
						{   id: "1",
							label: "Profesores Guía",
							groups: [
									<?php
									$facet_profesores = $response->facet_counts->facet_fields->profesor;
									$primero_p = true;
									$i = 1;
									foreach ($facet_profesores as $clave => $valor) {
										if ($valor > 0){
											if(!$primero_p)
												echo ',';
											echo '{ id:';
											echo '"1|'.$i.'" , label: "';
											echo $clave;
											echo '" }';
											$primero_p = false;
											$i++;
										}
									}
									?>
							]
						},
						{   id: "2",
							label: "Año",
							groups: [
									<?php
									$facet_anos = $response->facet_counts->facet_fields->ano;
									$primero = true;
									$i = 1;
									foreach ($facet_anos as $clave => $valor) {
										if ($valor > 0){
											if(!$primero)
												echo ',';
											echo '{ id:';
											echo '"ano|'.$i.'" , label: "';
											echo $clave;
											echo '" }';
											$primero = false;
											$i++;
										}
									}
									?>
							]
						},
						{
							id: "3",
							label: "Clasificación",
							groups: [
									<?php
									$facet_id = $response->facet_counts->facet_fields->clasificacion;
									$primero_id = true;
									$i = 1;
									foreach ($facet_id as $clave => $valor) {
										if ($valor > 0){
											if(!$primero_id)
												echo ',';
											echo '{ id:';
											echo '"3.'.$i.'" , label: "';
											echo $clave;
											echo '" }';
											$primero_id = false;
											$i++;
										}
									}
									?>

								  /*
								  { id: "1.1", label: "Ingeniería de Software" },
								  { id: "1.2", label: "Base de Datos" },
								  { id: "1.3", label: "Comunicación de Datos y Redes"},
								  { id: "1.4", label: "Inteligencia Artificial"}
								  /**/
							]
						}
					  ]
		},
		onGroupClick: function(event) {
	      var label = event.group.label;
	        if(label == "Profesores Guía")
	          ultimaOpcion = "profesor";
	        else if(label == "Año")
	          ultimaOpcion = "ano";
	        else if(label == "Clasificación")
	          ultimaOpcion = "clasificacion";
	        else
				agregarFiltro(ultimaOpcion + "|" + label)
				//alert(ultimaOpcion + " -> " + label);
		    	  //console.log(ultimaOpcion + " -> " + label);

	    }
	  });
	} else {
	  console.log("Visualization not supported.");
	}
	/**/
</script>
