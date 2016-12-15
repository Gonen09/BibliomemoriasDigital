<!DOCTYPE html>
<html>
  <head>
    <?php
      require('php/conectar.php');
      date_default_timezone_set('Chile/Continental');
      //echo date("d-m-Y H:i");
      $fechaactual = getdate();
      print_r($fechaactual);
      //echo "Hoy es: $fechaactual[weekday], $fechaactual[mday] de $fechaactual[month] de $fechaactual[year]";
     ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina de pruebas</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
    <h1>Pagina de pruebas</h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
