<?php

	require('../conectar.php');

	//Limite la busqueda
	$TAMANO_PAGINA = 10;

	if (!isset($_GET["pagina"]) || $_GET["pagina"] == 0) {
	    $inicio = 0;
	    $fin = $TAMANO_PAGINA;
	    $num_pagina = 1;
	}else{
			$num_pagina = $_GET["pagina"];
	    $inicio = ($num_pagina - 1) * $TAMANO_PAGINA;
			$fin = $inicio + $TAMANO_PAGINA;
	}

	//print("Inicio:".$inicio." Fin: ".$fin." Num_pagina: ".$num_pagina);

	//calculo el total de páginas
	$num_total_registros = correo_contar($conn);
	$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

	function correo_contar($conexion){

		$stmt = $conexion -> prepare('SELECT * FROM contactos');
		$stmt->execute();
		$correos = $stmt->rowCount();
		return $correos;
	}

	function correo_lista($id,$nombre,$motivo,$fecha,$leido){

		if($leido == 0){
			print ('				<tr class="correo-cerrado">
												<td class="mailbox-name"><b><a nohref onclick="leer_correo('.$id.')">'.$nombre.'</a></b></td>
												<td class="mailbox-subject"><b><a nohref onclick="leer_correo('.$id.')">'.$motivo.'</a></b></td>
			');

		}else{
			print ('				<tr class="correo-abierto">
												<td class="mailbox-name"><a nohref onclick="leer_correo('.$id.')">'.$nombre.'</a></td>
												<td class="mailbox-subject"><a nohref onclick="leer_correo('.$id.')">'.$motivo.'</a></td>
			');
		}

		print ('
					<td class="mailbox-date">'.$fecha.'</td>
					<td><a nohref onclick="borrar_correo('.$id.'); listar_correo(0); " class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
				</tr>
		');
	}

	function correo_paginacion($numero_paginas,$pagina_activa){

		print ('<nav class="text-center" aria-label="Page navigation">
							<ul class="pagination" id="paginacion-correo">
		');

		// Anterior
		if ($numero_paginas <= 1 || $pagina_activa == 1){
				print ('<li class="disabled">');
		}else{
				print ('<li class="enabled" onclick="listar_correo('.($pagina_activa-1).')">');
		}

		print('			<a href="#" aria-label="Anterior">
										<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
		');

		// Items
		for ($i=1; $i <= $numero_paginas ; $i++){
			if($i == $pagina_activa){
					print('<li class="active"><a nohref onclick="listar_correo('.$i.')">'.$i.'</a></li>');
			}else{
					print ('<li><a nohref">'.$i.'</a></li>');
			}
		}

		// Siguiente
		if ($numero_paginas <= 1 || $pagina_activa == $numero_paginas){
				print ('<li class="disabled">');
		}else{
				print ('<li class="enabled" onclick="listar_correo('.($pagina_activa+1).')">');
		}

		print ('			<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
				</ul>
			</nav>
		');
	}

  	function correo_cargar($conexion,$inicio,$fin){

	    $stmt = $conexion->prepare('SELECT id,nombre,fecha,motivo,leido FROM contactos ORDER BY id DESC LIMIT '.$inicio.','.$fin);
			$stmt->execute();

			print ('<table class="table table-hover display" cellpadding="0" cellspacing="0"  width="100%">
							<tbody id="correo-lista">
			');

	    while($row = $stmt->fetch()){
	      $date = date_create($row['fecha']);
	      $fecha = date_format($date,'d/m/Y H:i');
	      correo_lista($row['id'],$row['nombre'],$row['motivo'],$fecha,$row['leido']);
	    }

			print('				</tbody>
						</table>
		  ');
  	}

  	if($num_total_registros == 0){
			print ('<p><b><br>Sin correos<br></b><p>');
  	}else{
			correo_cargar($conn,$inicio,$fin);
			correo_paginacion($total_paginas,$num_pagina);
  	}
?>
