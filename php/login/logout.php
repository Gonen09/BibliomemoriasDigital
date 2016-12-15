<?php
  	header('Content-Type: text/html; charset=UTF-8');

    session_start();
    session_unset();
    session_destroy();

    header("location:../../index.php");
    exit();
 ?>
