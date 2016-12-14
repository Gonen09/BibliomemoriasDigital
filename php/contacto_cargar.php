<?php
	require('conectar.php');
  require('contacto_admin.php');

  function cargar_correos($conexion){
    $stmt = $conexion->prepare('SELECT * FROM contactos');
    $stmt->execute();

    $contador = 0;

    while($row = $stmt->fetch()){
      correo_lista($row['id'],$row['nombre'],$row['motivo'],$row['fecha'],$row['leido']);
      $contador++;
    }

    if ($contador == 0){
      print ('<h1>Sin correos</h1>');
    }
  }
?>
