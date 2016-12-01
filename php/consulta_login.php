<?php
	session_start();
	$usuario = $_POST["user"];
	$pass = md5($_POST["pass"]);
	$retorno = "";
	
	include("conexiones/admin_users.php");
	$stmt = $conn->prepare("SELECT pass,autorizacion FROM administradores WHERE rut=:usuario;");
	$stmt->bindParam(':usuario',$usuario);
	$stmt->execute();
	if($row = $stmt->fetch()){
			if($pass===$row['pass']){
				$_SESSION["user"]=$usuario;
				$_SESSION["autorizacion"]=$row['autorizacion'];
			}		
	}
	
	echo "Sesión Iniciada con éxito";

?>