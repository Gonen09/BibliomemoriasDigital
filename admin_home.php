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
		<!-- Fuente -->
   	<link href="css/SourceSansPro.css" rel="stylesheet">

		<?php
			require('php/general.php');
			require('php/acerca_modal.php');

			session_start();

			if(!isset($_SESSION["user"])){
				echo("<script>alert('Necesita iniciar sesión como administrador para acceder a este sitio.');</script>");
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
		?>

		<div class="page-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<div class="sidebar content-box">
							<!-- Menú principal -->
							<ul class="nav">
								<li class="current"><a href="admin_home.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
								<li><a href="admin_agregar.php"><i class="glyphicon glyphicon-upload"></i> Agregar memorias </a></li>
								<li><a href="admin_borrar.php"><i class="glyphicon glyphicon-list-alt"></i> Gestión memorias</a></li>
								<li><a href="admin_correo.php"><i class="glyphicon glyphicon-envelope"></i> Correo</a></li>
							</ul>
						</div>
					</div>
						<div class="col-md-10">
						<div class="row">
							<div class="col-md-6">
								<div class="content-box-header">
									<div class="panel-title"><h4 class="text-center">Administrador BiblioMemorias Digital</h4></div>
								</div>
								<div class="content-box-large box-with-header">
									<div class="panel-body text-justify">
										<legend class="titulos"><b>Admin</b></legend>
										<p>
											Bienvenido administrador, en el sitio de aministrador usted tiene todo el control para administrar
											el repositorio de memorias de BiblioMemorias Digital, entre las funcionalidades del sitio están:
											<br>

											<ul>
												<li>
													<strong>Agregar memorias:</strong> En esta sección el administrador puede subir las memorias de título de los alumnos de Ingeniería en Computación para el posterior indexado con Solr.
												</li>
												<li>
													<strong>Gestión memorias:</strong> En esta sección el administrador puede administrar las memorias de título de los alumnos de Ingeniería en Computación, se visualiza el total de las memorias subidas al sitio y se pueden descartar las memorias con algún problema.
												</li>
												<li>
													<strong>Correo:</strong> En esta sección el administrador puede ver si personas han contactado con el sitio y puede ver los correos enviados por ellos y administrarlos.
												</li>
											</ul>
										</p>
									</div> <!-- panel-body -->
								</div> <!-- content-box-large -->
							</div> <!-- col-md-6 -->

							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">
										<div class="content-box-header">
											<div class="panel-title"><h4 class="text-center">Información servidor Solr</h4></div>
										</div>
										<div class="content-box-large box-with-header">
												<img class="img-responsive" src="image/admin/Solr_Logo.png" alt="Solr" id="img-solr">
												<br>

												<?php

													if (!function_exists('solr_get_version')){

														print ('<br><strong>Cliente SOLR no encontrado, por favor instale SOLR o inicie el servicio SOLR
														con su correspondiente nombre de repositorio (CORE).</strong><br>');

													}else{

														$version_solr = solr_get_version();
														print ('Versión plugin php: '.$version_solr.'<br>');

														$options = array
														(
															'hostname' => 'localhost',
															'login'    => 'admin',
															'password' => '',
															'port'     => 8983,
															'path'     => 'solr/tesis',
														);

														$client = new SolrClient($options);
														$query_response = $client->system();
														$response = $query_response->getResponse();

														/*print_r($response);
														print_r ($response->lucene);

														foreach ($response->lucene as $a => $b){
															echo $a."|".$b."<br>";
														}*/

														echo "solr-spec-version ".$response->lucene["solr-spec-version"]."<br>";
														echo "solr-impl-version ".$response->lucene["solr-impl-version"]."<br>";
														echo "lucene-spec-version ".$response->lucene["lucene-spec-version"]."<br>";
														echo "lucene-impl-version ".$response->lucene["lucene-impl-version"]."<br>";
													}
												?>
											</div>
									</div> <!-- col-md-12 -->
								</div> <!-- row -->
							</div> <!-- col-md-6 -->
						</div><!-- row -->
						</div>
				</div><!-- row -->
			</div>
		</div>

		<?php
			piePagina();
		?>

		<!-- jQuery -->
		<script src="js/bootstrap/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
