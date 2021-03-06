﻿<table class="table table-hover display" cellpadding="0" cellspacing="0"  width="100%" id="tablaMemoria">
	<thead>
		<tr>
			<th>ID</th>
			<th>Título memoria</th>
			<th>Autor(es)</th>
			<th>Profesor Guía</th>
			<th>Año</th>
			<th class="text-center">Eliminar memoria</th>
		</tr>
	</thead>
	<tbody>
		<?php
			mb_internal_encoding('UTF-8');
			mb_http_output('UTF-8');
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

			$query->setQuery("*:*");
			$query->setStart(0);
			$query->setRows(99);

			$query->addField('id_tesis')->addField('titulo_tesis')->addField('profesor')->addField('alumno')->addField('ano');
			$query->setFacet(true);



			$query_response = $client->query($query);
			$response = $query_response->getResponse();

			if($response->response->numFound > 0) {
					$docs = $response->response->docs;
					$numero_de_documentos = $response->response->numFound;

					$data = array();
					$data["data"] = array();

					//while($i < $numero_de_documentos){
					foreach ($docs as $documento_actual) {
							$a = array();

							print '<tr>';
							//Id tesis
							print '<td>'.$documento_actual['id_tesis'].'</td>';
							//Titulo tesis
							print '<td>'.$documento_actual['titulo_tesis'].'</td>';
							//Alumnos
							print '<td>';
							$alumnos = $documento_actual['alumno'];
							for($ii = 0, $size = count($alumnos); $ii < $size; ++$ii) {
								if ($ii != 0)
									print ' <br> ';
								print $alumnos[$ii];
							}
							print '</td>';
							//Profesores
							print '<td>';
							$profesores = $documento_actual['profesor'];
							for($ii = 0, $size = count($profesores); $ii < $size; ++$ii) {
								if ($ii != 0)
									print ' <br> ';
								print $profesores[$ii];
							}
							print '</td>';
							//año
							print '<td>'.$documento_actual['ano'].'</td>';

							print '<td class="text-center"><a onclick="eliminarDocumento('."'".$documento_actual['id_tesis']."'".');" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>';
							print '</tr>';
					}
			}
		?>
	</tbody>
</table>
