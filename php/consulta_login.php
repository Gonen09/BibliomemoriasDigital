<?php
	header('Content-Type: text/html; charset=UTF-8');
	include('conectar.php');

	$usuario = $_POST['user'];
  $pass = md5($_POST["password"]);

	session_start();

	$stmt = $conn->prepare("SELECT pass,autorizacion FROM administradores WHERE rut=:usuario;");
	$stmt->bindParam(':usuario',$usuario);
	$stmt->execute();

	if($row = $stmt->fetch()){
			echo("Usuario Encontrado<br>");
			if($pass===$row['pass']){
					echo("Contraseña Correcta<br>");
					$_SESSION["user"]=$usuario;
					$_SESSION["autorizacion"]=$row['autorizacion'];
					echo "<h1>Sesión Iniciada con éxito</h1>";
					header("location: ../index.php"); // header("location:../administrador.php");
					echo("Si aparece esto, significa que no funcionó el redireccionamiento a index.");
			}else{
					echo("<script>alert('El Rut o la Contraseña ingresadas no corresponden a un usuario registrado.'); window.history.back();</script>");
			}
	}else{
		echo("<script>alert('El Rut o la Contraseña ingresadas no corresponden a un usuario registrado.'); window.history.back();</script>");
	}
?>
