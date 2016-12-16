<?php

  include_once('../conectar.php');
  include_once('contacto_lista.php');

  $id_correo = $_GET['id'];

  function correo_borrar($conexion,$id){

    $stmt = $conexion->prepare('DELETE FROM contactos WHERE id=:id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    correo_cargar($conexion);

  }

  if(isset($id_correo)){
    correo_borrar($conn,$id_correo);
  }
