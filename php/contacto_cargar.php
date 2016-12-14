<?php
  require('conectar.php');

  $stmt = $conn->prepare('SELECT * FROM contactos');

  $stmt->execute();

  while($row = $stmt->fetch()){


  }

  $idGuia = $row['Id'] + 1;




?>
