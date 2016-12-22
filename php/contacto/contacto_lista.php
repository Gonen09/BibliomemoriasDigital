<?php

	require('../conectar.php');

	//Limito la busqueda
	$TAMANO_PAGINA = 10;

	//examino la página a mostrar y el inicio del registro a mostrar
	$num_pagina = $_GET["pagina"];

	if (!$num_pagina) {
	   $inicio = 0;
	   $num_pagina = 1;
	}
	else {
	   $inicio = ($num_pagina - 1) * $TAMANO_PAGINA;
	}

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
					<td><a nohref onclick="borrar_correo('.$id.')" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
				</tr>
		');
	}

	function correo_paginacion($numero_paginas,$pagina_activa){

		// Anterior
		if ($numero_paginas <= 1){
				print ('<li class="disabled">');
		}else{
				print ('<li class="enabled">');
		}

		print('			<a href="#" aria-label="Anterior">
										<span aria-hidden="true">&laquo;</span>
								</a>
							</li>');

		// Items
		for ($i=1; $i <= $numero_paginas ; $i++){
			if($i == $pagina_activa){
					print('<li class="active" id="pagina-correo-activa"><a nohref>'.$i.'</a></li>');
			}else{
					print ('<li><a nohref">'.$i.'</a></li>');
			}
		}

		// Siguiente
		if ($numero_paginas <= 1){
				print ('<li class="disabled">');
		}else{
				print ('<li class="enabled">');
		}

		print ('			<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>');
	}

  function correo_cargar($conexion,$inicio,$fin){

    $stmt = $conexion->prepare('SELECT id,nombre,fecha,motivo,leido FROM contactos ORDER BY id DESC LIMIT :inicio , :tam_pagina');
    $stmt->execute();
		$stmt->bindParam(':inicio',$inicio);
		$stmt->bindParam(':tam_pagina',$fin);

    while($row = $stmt->fetch()){
      $date = date_create($row['fecha']);
      $fecha = date_format($date, 'd/m/Y H:i');
      correo_lista($row['id'],$row['nombre'],$row['motivo'],$fecha,$row['leido']);
    }
  }

	if($num_total_registros == 0){
			print ('<p><b><br>Sin correos<br></b><p>');
	}else{
			correo_cargar($conn,$inicio,$TAMANO_PAGINA);
			correo_paginacion($total_paginas,$num_pagina);
	}
?>
