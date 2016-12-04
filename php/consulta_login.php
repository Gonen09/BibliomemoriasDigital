<?php

	include('conectar.php');

	$usuario = $_POST['user'];
	$pass = $_POST['password'];
	// $pass = md5($_POST["password"]);
	$retorno = "";

	session_start();

	$stmt = $conn->prepare("SELECT pass,autorizacion FROM administradores WHERE rut=:usuario;");
	$stmt->bindParam(':usuario',$usuario);
	$stmt->execute();

	if($row = $stmt->fetch()){
			if($pass===$row['pass']){

					$_SESSION["user"]=$usuario;
					$_SESSION["autorizacion"]=$row['autorizacion'];
					echo "<h1>Sesión Iniciada con éxito</h1>";
					header("location:../administrador.php");
			}else{
					echo "<h1>Error al iniciar sesión</h1>";
			}
	}
?>
