<?php

	include("php/conectar.php");

	$usuario = $_POST["user"];
	$pass = md5($_POST["pass"]);
	$retorno = "";

	$stmt = $conn->prepare("SELECT pass,autorizacion FROM administradores WHERE rut=:usuario;");
	$stmt->bindParam(':usuario',$usuario);
	$stmt->execute();
	if($row = $stmt->fetch()){
			if($pass===$row['pass']){
					session_start();
					$_SESSION["user"]=$usuario;
					$_SESSION["autorizacion"]=$row['autorizacion'];
			}
	}

	echo "Sesión Iniciada con éxito";
?>
