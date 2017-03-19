<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Sitio para subir y buscar memorias de título de Ingenieria en Computación">
		<meta name="author" content="Electivo III">

		<title>Administrador de BiblioMemorias Digital</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Estilo pagina CSS -->
		<link href="css/general.css" rel="stylesheet">
		<!-- Estilo vista admin -->
		<link href="css/administrador/admin_style.css" rel="stylesheet">
		<!-- Data Tables -->
		<link href="css/administrador/dataTables.bootstrap.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

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

	<body onload="actualizarTabla()">

		<?php
		encabezado();
			navegacion(3);
			modal_uni();
			modal_docente();
			modal_curso();
		?>

		<div class="page-content">
			<div class="row">
				<!-- Menú Lateral -->
				<div class="col-md-2">
					<div class="sidebar content-box">
						<!-- Menú principal -->
						<ul class="nav">
							<li><a href="admin_home.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
							<li><a href="admin_agregar.php"><i class="glyphicon glyphicon-upload"></i> Agregar memorias </a></li>
							<li class="current"><a href="admin_borrar.php"><i class="glyphicon glyphicon-list-alt"></i> Gestión memorias</a></li>
							<li><a href="admin_correo.php"><i class="glyphicon glyphicon-envelope"></i> Correo</a></li>
						</ul>
					</div>
				</div><!-- col-md-2 -->

				<!-- Lista de las memorias -->
				<div class="col-md-10">
					<div class="content-box-large">
						<div class="panel-heading">
							<legend class="titulos"><b>Lista de memorias</b></legend>
						</div> <!-- panel-heading -->

						<!-- Aquí va la tabla para listar las memorias -->
						<div class="panel-body" id="panel_tabla"> </div><!-- panel-body -->
					</div>
				</div><!-- col-md-10 -->
			</div><!-- row -->
		</div><!-- page-content -->

		<?php
	  		piePagina();
		?>

		<!-- jQuery -->
		<script src="js/bootstrap/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- DataTable plugin -->
		<script src="js/administrador/jquery.dataTables.min.js"></script>
		<!-- DataTable Boostrap -->
		<script src="js/administrador/dataTables.bootstrap.js"></script>
		<!-- Cargar Tabla -->
		<script src="js/administrador/cargar_dataTable.js"></script>
		<!-- Tooltip -->
		<script src="js/tooltip.js"></script>
		<!-- Funciones eliminacion -->
		<script src="js/funciones_eliminar.js"></script>
	</body>
</html>
