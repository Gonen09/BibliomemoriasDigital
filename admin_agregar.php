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
		<!-- Modal cargando -->
		<link href="css/cargando.css" rel="stylesheet">

		<?php
			require('php/general.php');
			require('php/acerca_modal.php');
			require('php/cargando_modal.php');

			session_start();

			if(!isset($_SESSION["user"])){
				echo("<script>alert('Necesita iniciar sesion como administrador para acceder a este sitio.');</script>");
				echo("<script>window.location='index.php';</script>");
			}
 		?>

	</head>

	<body>

		<?php
      encabezado();
			navegacion(3);
			modal_uni();
			modal_docente();
			modal_curso();
			modal_cargando("Subir memoria");
		?>

		<div class="page-content">
			<div class="row">
				<div class="col-md-2">
					<div class="sidebar content-box">
							<!-- Menú principal -->
	            <ul class="nav">
	                <li><a href="admin_home.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
	                <li class="current"><a href="admin_agregar.php"><i class="glyphicon glyphicon-upload"></i> Agregar memorias </a></li>
	                <li><a href="admin_borrar.php"><i class="glyphicon glyphicon-list-alt"></i> Gestión memorias</a></li>
	                <li><a href="admin_correo.php"><i class="glyphicon glyphicon-envelope"></i> Correo</a></li>
	            </ul>
	        </div>
				</div> <!-- col-md32 -->

				<div class="col-md-10">
					<div class="container-fluid">
						<div class="row">
			  				<div class="col-md-12">
			  					<div class="content-box-large">
					  				<div class="panel-heading">
							            <legend class="titulos"><b>Subir memorias</b></legend>
							        </div>
					  				<div class="panel-body">
					  				<!--	<form id="formulario" class="form-horizontal" role="form" method="post" action="php/agregar_documento.php" enctype="multipart/form-data">  -->
									<form id="formulario" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" onsubmit="enviarFormulario();return false; ">
										  <div class="form-group row">
										    <label for="idMemoria" class="col-xs-2 col-form-label text-right">ID Memoria</label>
										    <div class="col-xs-10">
										    	<div class="input-group">
										    		<input class="form-control" id="idMemoria" name="id_tesis" type="text" required>
												    <span class="input-group-addon btn-color"><i class="glyphicon glyphicon-barcode icon-color"></i></span>
										    	</div>
										    	<p class="note"><i><small>Formato ID: cXX_año -> cxx = id memoria</small></i></p>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="titulo" class="col-sm-2 control-label">Título</label>
										    <div class="col-sm-10">
										    	<div class="input-group">
										    		<input class="form-control" id="titulo" name="titulo_tesis" required>
										      		<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-bookmark icon-color"></i></span>
										    	</div>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="autorMemoria" class="col-sm-2 control-label">Autor(es)</label>
										    <div class="col-sm-10">
										    	<div class="input-group">
										    		<input class="form-control" id="autorMemoria" name="tesistas" required>
										      		<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-user icon-color"></i></span>
										    	</div>
										      <p class="note"><i><small>Si es más de un autor, separados por coma (,)</small></i></p>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="profesorGuia" class="col-sm-2 control-label">Profesor(es)</label>
										    <div class="col-sm-10">
										    	<div class="input-group">
										    		<input class="form-control" id="profesorGuia" name="profesores"  required>
										    			<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-education icon-color"></i></span>
										    	</div>
													<p class="note"><i><small>Si es más de un profesor, separados por coma (,)</small></i></p>
										    </div>
										  </div>
										  <div class="form-group">
										  	<label for="anio" class="col-sm-2 control-label">Año</label>
										    <div class="col-sm-3">
										    	<div class="input-group">
										    		<input class="form-control" id="anio" type="number" name="ano" value="2016">
										    		<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-calendar icon-color"></i></span>
										    	</div>
										    </div>
										  </div>
										  <div class="form-group">
										    <label class="col-sm-2 control-label">Abstract</label>
										    <div class="col-sm-10">
										      <textarea class="form-control" placeholder="Ingrese el abstract de la memoria" rows="8" name="abstract"></textarea>
										    </div>
										  </div>
											<div class="form-group">
												<label class="col-md-2 control-label">Archivo</label>
												<div class="col-md-10">
													<div class="input-group">
														<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-open-file icon-color"></i></span>
														<input type="file" class="btn btn-default" id="exampleInputFile1" name="archivo_tesis" accept=".pdf" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-6 control-label"></label>
												<div class="col-md-6">
													<button class="btn btn-color text-color" type="submit">
														<i class="glyphicon glyphicon-send icon-color icon-margin"></i>
														Enviar
													</button>
												</div>
											</div>
										</form><!--form-->
					  				</div><!--panel-body-->
					  			</div>
			  				</div>
						</div><!--col-md-12-->
				</div><!--row-->
			</div><!--col-md-9-->
		</div> <!-- row -->

		<?php
      piePagina();
    ?>

		<!-- jQuery -->
		<script src="js/bootstrap/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- Funciones indexacion -->
		<script src="js/funciones_indexacion.js"></script>
	  </body>
</html>
