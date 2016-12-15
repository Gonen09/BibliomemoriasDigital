<?php

	function correo_lista($id,$nombre,$motivo,$fecha,$leido){

		if($leido == 0){
			print ('				<tr class="correo-cerrado">
												<td class="mailbox-name"><b><a href="#" onclick="leer_correo('.$id.')">'.$nombre.'</a></b></td>
												<td class="mailbox-subject"><b><a href="#" onclick="leer_correo('.$id.')">'.$motivo.'</a></b></td>
			');

		}else{
			print ('				<tr class="correo-abierto">
												<td class="mailbox-name"><a href="#" onclick="leer_correo('.$id.')">'.$nombre.'</a></td>
												<td class="mailbox-subject"><a href="#" onclick="leer_correo('.$id.')">'.$motivo.'</a></td>
			');
		}

		print ('
					<td class="mailbox-date">'.$fecha.'</td>
					<td><a onclick="borrar_correo('.$id.')" href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
				</tr>
		');
	}

  function correo_cargar($conexion){
    $stmt = $conexion->prepare('SELECT id,nombre,fecha,motivo,leido FROM contactos');
    $stmt->execute();

    $contador = 0;

    while($row = $stmt->fetch()){
      $date = date_create($row['fecha']);
      $fecha = date_format($date, 'd/m/Y H:i');
      correo_lista($row['id'],$row['nombre'],$row['motivo'],$fecha,$row['leido']);
      $contador++;
    }

    if ($contador == 0){
      	print ('<p><b><br>Sin correos<br></b><p>');
    }
  }
?>
