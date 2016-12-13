<?php

	header('Content-Type: text/html; charset=UTF-8');
	include('conectar.php');

	date_default_timezone_set('Chile/Continental');
	echo

	$nombre=$_POST["nombre"];
	$mail=$_POST["correo"];
	$telefono=$_POST["telefono"];
	$motivo=$_POST["motivo"];
	$comentario=$_POST["comentario"];
	//getdate();

	$fecha = date("d-m-Y H:i");

	$stmt = $conn->prepare("INSERT INTO contactos VALUES(null,:nombre,:mail,:telefono,:motivo,:comentario,:fecha,0);");
	$stmt->bindParam(':nombre',$nombre);
	$stmt->bindParam(':mail',$mail);
	$stmt->bindParam(':telefono',$telefono);
	$stmt->bindParam(':motivo',$motivo);
	$stmt->bindParam(':comentario',$comentario);
	$stmt->bindParam(':fecha',$fecha);

	if($stmt->execute()){
		print ("<script>alert('Comentario enviado con éxito.');</script>");
	}else{
		print ("<script>alert('Hemos tenido un error al ingresar su comentario, por favor inténtelo de nuevo.');</script>");
	}

	$conn->close();
	print ("<script>window.history.back();</script>");
	exit();
?>
