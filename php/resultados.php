<?php
/*
$versión_solr = solr_get_version();
print $versión_solr;
print "<br>";
*/
/*
$id_campos = array();

while ($post = each($_POST))
{
	echo $post[0] . " = ->" . $post[1]."<br>";
	
	$rest = substr($post[0],0, 12);
	if ($rest == "tipo_filtro_"){
		$numero = str_replace("tipo_filtro_", "", $post[0]);
	//	echo "->".$numero."<-";
		$id_campos[] = $numero;
	}
    /**/	
//}
/*
//Formando consulta 

$query_text = '';
if($_POST['contenido'] != ''){
	$query_text = $query_text.$_POST['contenido'];
	//$query_text = $query_text.' contenido:'.$_POST['contenido'];
}



foreach ($id_campos as &$valor) {
    
	
	$tipo_filtro = $_POST['tipo_filtro_'.$valor];
	$buscar = $_POST['buscar_'.$valor];
	if ($buscar != ''){
		if($query_text != '')
			$query_text = $query_text.' OR ';
		switch ($tipo_filtro) {
			case "Titulo":
				$query_text = $query_text.' titulo_tesis:'.$buscar;
				break;
			case "Autor":
				$query_text = $query_text.' alumno:'.$buscar;
				break;
			case "Profesor guia":
				$query_text = $query_text.' profesor:'.$buscar;
				break;
			//case "Año":
				//$query_text = $query_text.' ano:'.$buscar;
				//break;
			case "Abstract":
				$query_text = $query_text.' abstract:'.$buscar;
				break;
			default:
				$query_text = $query_text.' ano:'.$buscar;
				break;
		}
	}
	
		
}
*/

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

//$query->setQuery('alumno:patricio OR alumno:carmen');
$query->setQuery('*:*');
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

<div class="col-sm-6" onchange="alert('')"  > <!-- Resultados busqueda -->
	<div class="panel panel-default">
		<div class="panel-heading" id="cabezera-panel">
			<h4 class="text-center">Resultados</h4>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-condensed table-hover table-borderless">
					<tbody>
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
	echo "No Documents Found".PHP_EOL;
}
?>						
					</tbody>
				</table>
			</div>
			<hr>
			<div align="center">
				<nav aria-label="Page navigation">
					<ul class="pagination" class="search-pagination">
						<li>
							<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<?php
							$n_doc = $response->response->numFound; // maximo de documento
							$n_pag = floor($n_doc/3);
							echo "numero de paginas = ".$n_pag;
							$restante= $n_doc % 3;
							echo "restantes ".$restante;
							if ($restante > 0)
								$n_pag++;
							$c = 1;
							$pag_elegida = 2;
							while ($c <= $n_pag){
								echo  "<li ";
								if ($c == $pag_elegida)
									echo 'class="active"';
								echo '><a href="#">';
								echo $c;
								echo "</a></li>";
								$c++;
							}
						?>
						<li>
						<a href="#" onclick= "alert('1')"aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div> <!-- End resultados -->

<script>
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
				  { id: "1.1", label: "Ingeniería de Software" },
				  { id: "1.2", label: "Base de Datos" },
				  { id: "1.3", label: "Comunicación de Datos y Redes"},
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































