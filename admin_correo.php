<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Sitio para subir y buscar memorias de titulo de ingenieria en computacion">
		<meta name="author" content="Electivo III">

		<title>Administrador de BiblioMemorias Digital</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Estilo pagina CSS -->
		<link href="css/general.css" rel="stylesheet">
		<!-- Estilo vista admin -->
		<link href="css/administrador/admin_style.css" rel="stylesheet">
		<link href="css/administrador/correo.css" rel="stylesheet">
		<!-- Fuente -->
   	<link href="css/SourceSansPro.css" rel="stylesheet">

		<?php

			require('php/general.php');
			require('php/acerca_modal.php');

			session_start();

			if(!isset($_SESSION["user"])){
				echo("<script>alert('Necesita iniciar sesion como administrador para acceder a este sitio.');</script>");
				echo("<script>window.location='index.php';</script>");
			}
		?>
	</head>

	<body onload="listar_correo(0)">

		<?php
			encabezado();
			navegacion(3);
			modal_uni();
			modal_docente();
			modal_curso();
		?>

		<div class="page-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<div class="sidebar content-box">
								<!-- Menú principal -->
							<ul class="nav">
								<li><a href="admin_home.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
								<li><a href="admin_agregar.php"><i class="glyphicon glyphicon-upload"></i> Agregar memorias </a></li>
								<li><a href="admin_borrar.php"><i class="glyphicon glyphicon-list-alt"></i> Gestión memorias</a></li>
								<li class="current"><a href="admin_correo.php"><i class="glyphicon glyphicon-envelope"></i> Correo</a></li>
							</ul>
						</div>
					</div> <!-- col-md-2 -->

					<div class="col-md-10">
						<div class="row">
							<div class="col-lg-5">
								<div class="content-box-large">
									<div class="panel-heading">
										<legend class="titulos"><b>Bandeja de entrada</b></legend>
									</div>
									<!-- Bandeja de Entrada -->
									<div class="panel-body" id="panel-correo-lista">
											<!-- Sistema de correo -->
									</div>
								</div>
							</div><!-- col-lg-5 -->

							<div class="col-lg-7">
								<div class="box box-primary" id="correo-contenido">
									<!-- Contenido del mensaje -->
									<div class="mailbox-read-message">
										<legend class="titulos"><b>Correo</b></legend>
										<br><p> Seleccione un correo de la lista de correos</p><br>
									</div>
								</div><!-- /. box -->
							</div><!-- col-lg-7 -->
					  </div><!-- /.row -->
					</div> <!--col-md-10-->
				</div> <!-- row -->
			</div>
		</div>

		<?php
		  	piePagina();
		?>

		<!-- jQuery -->
		<script src="js/bootstrap/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- Correo -->
		<script src="js/correo/correo_lista.js"></script>
		<script src="js/correo/correo_leer.js"></script>
		<script src="js/correo/correo_borrar.js"></script>
		<!-- Tooltip -->
		<script src="js/tooltip.js"></script>
	</body>
</html>
