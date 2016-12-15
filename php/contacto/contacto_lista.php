<?php
	include('php/conectar.php');

	function correo_lista($id,$nombre,$motivo,$fecha,$leido){

		if($leido == 0){
			print ('				<tr class="correo-cerrado" onclick="leer_correo('.$id.')">
												<td class="mailbox-name"><b><a href="read-mail.html">'.$nombre.'</a></b></td>
												<td class="mailbox-subject"><b><a href="#">'.$motivo.'</a></b></td>
			');

		}else{
			print ('				<tr class="correo-abierto" onclick="leer_correo('.$id.')">
												<td class="mailbox-name"><a href="read-mail.html">'.$nombre.'</a></td>
												<td class="mailbox-subject"><a href="#">'.$motivo.'</a></td>
			');
		}

		print ('
					<td class="mailbox-date">'.$fecha.'</td>
					<td><a id="'.$id.'" href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
				</tr>
		');
	}

  function cargar_correos($conexion){
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
