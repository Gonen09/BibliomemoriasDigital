<?php
	$nombre_bd = 'memoteca';
	$usuario_bd = 'memorias';
	$passwd_bd = 'biblio';

	try {
		$conn = new PDO('mysql:host=localhost;dbname='.$nombre_bd.';charset=utf8', $usuario_bd, $passwd_bd);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		print "<h1>Conexión exitosa !!!</h1>";
	}catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>