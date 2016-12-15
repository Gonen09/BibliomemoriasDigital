<?php

  require('../conectar.php');

  $id_correo = $_GET['id'];

  function correo_item($motivo,$correo,$fecha,$comentario){
    print ('
        <div class="mailbox-read-info">
          <h3 class="titulos-correo"><b>'.$motivo.'</b></h3>
          <br>
          <h5>De: '.$correo.' <span class="mailbox-read-time pull-right"> '.$fecha.'</span></h5>
        </div>
        <!-- /.mailbox-read-info -->
        <div class="mailbox-read-message">
          <br><p>'.$comentario.'</p><br>
        </div>
    ');
  }

  function correo_marcar($conexion,$id){

    $stmt = $conexion->prepare('UPDATE contactos SET leido=1 WHERE id=:id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();
  }

  function correo_leer($conexion,$id){

    $stmt = $conexion->prepare('SELECT motivo,email,fecha,comentario,leido FROM contactos WHERE id=:id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    while($row = $stmt->fetch()){

      if($row['leido'] == 0){
          correo_marcar($conexion,$id);
      }

      $date = date_create($row['fecha']);
      $fecha = date_format($date, 'd/m/Y H:i');
      correo_item($row['motivo'],$row['email'],$fecha,$row['comentario']);
    }
  }

  if(isset($id_correo)){
    correo_leer($conn,$id_correo);
  }
?>
