<?php
	$usuario_bd = 'memoteca';
	$passwd_bd = '1234';
	try {
		$conn = new PDO('mysql:host=localhost;dbname=memoteca;charset=utf8', $usuario_bd, $passwd_bd);	
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} 
	catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>