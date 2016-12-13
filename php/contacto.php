<?php

	header('Content-Type: text/html; charset=UTF-8');
	include('conectar.php');

	date_default_timezone_set('Chile/Continental');

	$nombre=$_POST["nombre"];
	$mail=$_POST["correo"];
	$telefono=$_POST["telefono"];
	$motivo=$_POST["motivo"];
	$comentario=$_POST["comentario"];

	$stmt = $conn->prepare("INSERT INTO contactos VALUES(null,:nombre,:mail,:telefono,:motivo,:comentario,NOW(),0);");
	$stmt->bindParam(':nombre',$nombre);
	$stmt->bindParam(':mail',$mail);
	$stmt->bindParam(':telefono',$telefono);
	$stmt->bindParam(':motivo',$motivo);
	$stmt->bindParam(':comentario',$comentario);

	if($stmt->execute()){
		print ("<script>alert('Comentario enviado con éxito.');</script>");
	}else{
		print ("<script>alert('Hemos tenido un error al ingresar su comentario, por favor inténtelo de nuevo.');</script>");
	}

	print ("<script>window.history.back();</script>");
	exit();
?>
