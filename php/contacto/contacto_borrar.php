<?php

  include_once('../conectar.php');

  $id_correo = $_GET['id'];

  function correo_borrar($conexion,$id){

    $stmt = $conexion->prepare('DELETE FROM contactos WHERE id=:id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();
  }

  if(isset($id_correo)){
    correo_borrar($conn,$id_correo);
  }
