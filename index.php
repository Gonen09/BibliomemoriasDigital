<!DOCTYPE html>
<html>
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sitio para subir y buscar memorias de titulo de ingenieria en computacion">
		<meta name="author" content="Electivo III">

		<title>BiblioMemorias Digital ULS</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Estilo pagina CSS -->
		<link href="css/general.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
		<!-- Reloj -->
		<link href="css/reloj.css" rel="stylesheet">
		<!-- Fuente -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

		<?php
		  require('php/general.php');
		  require('php/contacto/contacto_modal.php');
		  require('php/acerca_modal.php');
		  require('php/login/login_modal.php');

		  session_start();
		?>
  	</head>

	<body onload="cargarReloj()">

		<?php
		  	encabezado();
		  	navegacion(1);
		  	modal_contacto();
		  	modal_uni();
		  	modal_docente();
		  	modal_curso();
		  	modal_login();
		?>

		<!-- Page Content -->
		<div class="container-fluid">
			<div class="row content" id="canvas">
				<div class="container-fluid">
				  	<h1 class="page-header text-primary titulos">
					  Recuperación de la Información
					  	<small> Electivo III</small>
				  	</h1>
				</div>
				<div class="col-sm-9">
					<div class="row" id="inicio">
					  	<div class="col-sm-12">
							<div class="panel panel-default">
						  		<div class="panel-heading" id="cabezera-panel">
									<h4 class="text-center">BiblioMemorias Digital Universidad de La Serena</h4>
						  		</div>
							  	<div class="panel-body">
									<div class="container-fluid">
								  		<div class="row">
											<div class="well col-sm-8">
										  		<h3 class="titulos">El Electivo III <strong class="text-primary" data-toggle="tooltip" data-placement="right" title="vivo!!!">esta vivo !!!</strong></h3>
										  		<br>
											  	<p class="text-justify">
											  		Bienvenido a nuestro repositorio de <strong>Memorias de Titulo</strong> de la carrera <strong>Ingeniería en Computación e Informática</strong> de la <strong>Universidad de La Serena</strong>.
											  	</p>
											  	<p class="text-justify">
													El propósito de este repositorio es administrar de manera eficiente las <strong>memorias de título</strong> de la carrera, subiendo de forma digital las memorias de titulo, con un <strong>formato definido</strong> por la escuela de ingeniería en computación, para que los estudiantes, académicos u persona interesada en trabajos en el área de <strong>Redes y Telecominicaciones</strong>, <strong>Base de Datos</strong> <strong>Ingeniería de Software</strong> e <strong>Inteligencia Artificial</strong> puedan obtener información para uso personal.
											  	</p>
											</div><!-- well col-sm-8 -->
											<div class="col-sm-4">
												<img class="img-responsive img-rounded" src="image/index/biblio.png" alt="biblio-digital">
											</div><!-- col-sm-8 -->
								  		</div><!-- row -->
									</div><!-- container-fluid -->
							  	</div><!-- panel-body -->
							</div><!-- panel-default -->
					  	</div><!-- well col-sm-12 -->
					</div><!-- row Inicio -->
					<hr>
					<div class="row" id="worldcloud">
					  	<div class="col-sm-6">
							<div class="panel panel-default">
						  		<div class="panel-heading" id="cabezera-panel">
									<h4 class="text-center">BiblioMemorias Digital WorldCloud</h4>
						  		</div>
						  		<div class="panel-body">
							  		<div id="cloud"> <!-- Aquí va el wordcloud --> </div>
						  		</div>
							</div><!--panel-default -->
					  	</div><!-- col-sm-6 -->
					  	<div class="col-sm-6">
							<div class="panel panel-default">
						  		<div class="panel-heading" id="cabezera-panel">
									<h4 class="text-center">Electivo III : Recuperación de la Información</h4>
					  			</div>
							  	<div class="panel-body text-justify">
									<img class="img-responsive img-rounded" src="image/index/biblio-IR.jpg" alt="Acerca curso">
									<br>
									<p>
									  	Es un curso de <strong>Ciclo Superior</strong>, <strong>teórico-práctico</strong>, que entrega las herramientas y conceptos en el ámbito de la <strong>Búsqueda y Recuperación de Información</strong> (Information Search and Retrieval <strong>(ISR)</strong>),esto es, búsqueda y recuperación de información en documentos electrónicos y cualquier tipo de <strong> colección documental digital</strong>, búsqueda de metadatos que describan documentos de internet, y como objetivo <strong>conocer y manejar algunas herramientas para realizar la recuperación</strong> en textos, imágenes, sonido o datos de otras características, de manera <strong>eficiente</strong>, según criterio de búsqueda, algoritmos y <strong>metodologías existentes</strong>. Se llevan a cabo diversas actividades  y proyectos que se derivan de los contenidos.
									</p>
							  	</div><!-- panel-body -->
							</div><!-- panel-default -->
						</div><!-- col-sm-6 -->
					</div><!-- row wordcloud -->
				</div><!-- col-sm-9 -->

				<!-- Blog Sidebar Widgets Column -->
				<div class="col-md-3">
					<div class="row">
					  	<div class="col-md-12">
							<!-- Blog Search Well -->
							<div class="well">
								<h4>Búsqueda</h4>
								<form action="busqueda.php" method="post">
							  		<div class="input-group">
								  		<input class="form-control" type="text" name="busqueda-index" placeholder="Ingrese contenido" required>
									  	<span class="input-group-btn">
										  	<button class="btn btn-color" type="submit">
												<span class="glyphicon glyphicon-search icon-color"></span>
										  	</button>
									  	</span>
								  	</div>
								</form>
							</div>
						</div><!-- col-sm-12 -->
					</div><!-- row -->

					<div class="row">
					  	<div class="col-md-12">
							<!-- Well Reloj  -->
							<div class="well">
						  		<div class="well clock-box">
									<div class="clock">
								  		<div class="hours-container">
											<div class="hours"></div>
								  		</div>
								  		<div class="minutes-container">
											<div class="minutes"></div>
								  		</div>
								  		<div class="seconds-container">
											<div class="seconds"></div>
								  		</div>
									</div>
							  	</div>
						  		<p class="text-center"><i id="date-box">Fecha</i></p>
							</div>
					  	</div>
					</div><!-- row -->

					<div class="row">
					  	<div class="col-md-12">
							<!-- Side Widget Well -->
							<div class="well">
								<h4>Sitios de interés</h4>
								<ul class="list-unstyled">
									<li><a href="http://www.userena.cl">Universidad de La Serena</a></li>
									<li><a href="http://www.dmatuls.cl/portal/">Departamento de Matemáticas</a></li>
									<li><a href="http://dns.uls.cl/~ej/">Página web Docente</a><li>
									<li><a href="http://www.ingecompuls.cl/">Escuela de Ingeniería en Computación</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div> <!-- col-md-3 -->
			</div>   <!-- /.row -->
		</div> <!-- /.container-fluid -->

		<?php
		  piePagina();
		?>

		<!-- jQuery -->
		<script src="js/bootstrap/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- Login -->
		<script src="js/iniciar_sesion.js"></script>
		<!-- Tooltip -->
		<script src="js/tooltip.js"></script>
		<script src="js/fireworks.js"></script>
		<!-- Reloj -->
		<script src="js/reloj.js"></script>
		<!-- Graficos -->
		<script src="js/D3/d3.v3.min.js"></script>
		<!-- worldcloud-->
		<script src="js/worldcloud/d3.layout.cloud.js"></script>
		<script src="js/worldcloud/worldcloud.js"></script>
		<script src="js/worldcloud/createCloud.js"></script>
	</body>
</html>
