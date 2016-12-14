<?php
  require('conectar.php');
  require('contacto_admin');

  $stmt = $conn->prepare('SELECT * FROM contactos');
  $stmt->execute();

  while($row = $stmt->fetch()){


  }

  $idGuia = $row['Id'] + 1;




?>
