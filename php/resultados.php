<?php
/*
$versi�n_solr = solr_get_version();
print $versi�n_solr;
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
$globals= array('USERNAME' => 'john', 'USERID' => '18068416846');
// echo "--->".$texto_consulta."<---";
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
//$q = $_GET["texto_busqueda"];
/*
$q = 'alumno:patricio OR alumno:carmen';
if  ($query_text == '')
	exit;
$query->setQuery($query_text);
*/


$query->setStart(0);

$query->setRows(3);

$query->addField('id_tesis')->addField('ano')->addField('alumno')->addField('score')->addField('titulo_tesis')->addField('profesor');
$query->setFacet(true);
$query->addFacetField('ano')->addFacetField('profesor')->addFacetField('id_tesis');
//$query->addFacetQuery('profesor')->addFacetQuery('ano');

$query_response = $client->query($query);
$response = $query_response->getResponse();

//echo '-->'.$query_text.'<--';	
//echo '-->'.$query.'<--';	
/**/
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
									<p data-toggle="modal" data-target="#modal-grafico" class="text-center"><a href="#" id="archivo">Ver</a></p>
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
										//a�o
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
								if ($n_pag > 1)
									echo "cambiarPagina(".$c.")";
								echo '">';
								echo $c;
								echo "</a></li>";
								$c++;
							}
							if ($pag_elegida != $n_pag && $n_pag > 1){
								?>
								<li>
								<a  onclick= "<?php echo "cambiarPagina(".($pag_elegida+1).")";?>"aria-label="Next">
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
//alert('<?php //echo $info_campos; ?>');
  if (CarrotSearchFoamTree.supported) {
  var foamtree = new CarrotSearchFoamTree({
	id: "visualization",
	dataObject: {
	  groups: [
		{   id: "1", 
			label: "Profesores Gu�a", 
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
							echo '"1.'.$i.'" , label: "';
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
			label: "A�o", 
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
							echo '"2.'.$i.'" , label: "';
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
			label: "Id memorias", 
			groups: [
					<?php
					$facet_id = $response->facet_counts->facet_fields->id_tesis;
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
				  { id: "1.1", label: "Ingenier�a de Software" },
				  { id: "1.2", label: "Base de Datos" },
				  { id: "1.3", label: "Comunicaci�n de Datos y Redes"},
				  { id: "1.4", label: "Inteligencia Artificial"}
				  /**/
			]
		}
	  ]
	}
  });
} else {
  console.log("Visualization not supported.");
}
/**/
</script>






























