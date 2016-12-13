<?php

	header('Content-Type: text/html; charset=UTF-8');
	include('conectar.php');

	$nombre=$_POST["nombre"];
	$mail=$_POST["correo"];
	$telefono=$_POST["telefono"];
	$motivo=$_POST["motivo"]; //Rotular name y values en el formulario del html.
	$comentario=$_POST["comentario"]; //rotular el name en el formulario del html.
	$fecha=getdate();

	$stmt = $conn->prepare("INSERT INTO contactos VALUES(null,:nombre,:mail,:telefono,:motivo,:comentario,:fecha,0);");
	$stmt->bindParam(':nombre',$nombre);
	$stmt->bindParam(':mail',$mail);
	$stmt->bindParam(':telefono',$telefono);
	$stmt->bindParam(':motivo',$motivo);
	$stmt->bindParam(':comentario',$comentario);
	$stmt->bindParam(':fecha',$fecha);

	if($stmt->execute()){
		echo "Comentario enviado con éxito.";
	}else{
		echo "Hemos tenido un error al ingresar su comentario, por favor inténtelo de nuevo."
	}

?>
