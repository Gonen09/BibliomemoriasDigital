<?php

$texto_consulta = $_COOKIE ["ultima_consulta"];
$pag_elegida = 1;
$documento_inicial = 0;
if (isset($_POST["pagina"])){
	$pag_elegida = $_POST["pagina"];
	$documento_inicial = 3 * ($pag_elegida-1);
}
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


//$query->setQuery('alumno:patricio OR alumno:carmen');
//$query->setQuery('*:*');


//Agregando filtro de busqueda
$campo_filtro = "";
$filtro_query = "";

if (isset($_POST["ano"])){
	if ($_POST["ano"] != ""){
		$filtro_query = "ano";
		$filtro_query = "ano:".$_POST["ano"];
		$query->addFilterQuery($filtro_query);
	}	
}
if (isset($_POST["clasificacion"])){
	//echo $_POST["clasificacion"];
	if ($_POST["clasificacion"] != ""){
		$filtro_query = "clasificacion";
		$filtro_query = "clasificacion:".$_POST["clasificacion"];
		$query->addFilterQuery($filtro_query);
	}	
}
if (isset($_POST["profesor"])){
	if ($_POST["profesor"] != ""){
		$filtro_query = "profesor";
		$filtro_query = "profesor:".$_POST["profesor"];
		$query->addFilterQuery($filtro_query);
	}	
}

$query->setStart($documento_inicial);
$query->setRows(3);
$query->addField('id_tesis')->addField('ano')->addField('alumno')->addField('score')->addField('titulo_tesis')->addField('profesor')->addField('valores_clasificacion');
$query->setFacet(true);
$query->addFacetField('ano')->addFacetField('profesor')->addFacetField('clasificacion');
	
$query_response = $client->query($query);
$response = $query_response->getResponse();

//echo '-->'.$query_text.'<--';	
//echo '-->'.$query.'<--';	
/**/
?>
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
		//$documento_actual = $docs[$i];						
?>						
						<div id="<?php print $documento_actual['id_tesis'];?>" name="publicacion" class="row">
							<tr>
								<td class="col-sm-1">
									<img src="image/pdf.png" alt="pdf" class="img-responsive">
									<input type="hidden" id="<?php print $documento_actual['id_tesis'];?>_score" value="<?php print $documento_actual['score'];?>">
									<br>
									<p class="text-center"><a href="pdf/<?php print $documento_actual['id_tesis'];?>.pdf" id="archivo">Ver</a></p>
								</td>
								<td class="col-sm-1">
									<img src="image/chart.png" alt="grafico" class="img-responsive">
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
												case 'Inteligencia Artificial':
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
								  	<!--
									<p data-toggle="modal" data-target="#modal-grafico" class="text-center"   onclick="datosGraficos ()" ><a href="#" id="archivo">Ver</a></p>
									datosGraficos (ia,bdd,redes,sw)
									<!-- -->
									
									<p data-toggle="modal" data-target="#modal-grafico" class="text-center"   onclick="datosGraficos (<?php echo $IA; ?>,<?php echo $BDD; ?>,<?php echo $REDES; ?>,<?php echo $SW; ?>)" ><a href="#" id="archivo">Ver</a></p> 
									<!-- -->
									<!--
									<p data-toggle="modal" data-target="#modal-grafico" class="text-center"   onclick="datosGraficos (0.5000000,0.5000000,50.5000000,99.5000000)" ><a href="#" id="archivo">Ver</a></p> 
									<!-- -->
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
						<!--
						<li>
							<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						-->
						<?php
							$n_doc = $response->response->numFound; // maximo de documento
							
							$n_pag = floor($n_doc/3);
							$restante= $n_doc % 3;
							if ($restante > 0)
								$n_pag++;
							$c = 1;
							if ($pag_elegida != 1){
								?>
								<li>
									<a  aria-label="Previous">
										<span aria-hidden="true" onclick="<?php 
											if ($filtro_query == "")
												echo "cambiarPagina(".($pag_elegida-1).")";
											else
												echo "modificarResultados('".$campo_filtro."|".$filtro_query."',".($pag_elegida-1).")";
										?>">&laquo;</span>
									</a>
								</li>
								<?php
							}
							while ($c <= $n_pag){
								echo  "<li ";
								if ($c == $pag_elegida)
									echo 'class="active"';
								echo '><a onclick="';
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
									<a  onclick= "
									<?php 
										if ($filtro_query == "")
											echo "cambiarPagina(".($pag_elegida+1).")";
										else
											echo "modificarResultados('".$campo_filtro."|".$filtro_query."',".($pag_elegida+1).")";
										?>
										"aria-label="Next">
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



