﻿<!DOCTYPE html>
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
		<link href="css/navbar_login.css" rel="stylesheet">
		<!-- Estilo vista admin -->
		<link href="css/administrador/admin_style.css" rel="stylesheet">

		<?php
			require('php/login/login_nav.php');
			require('php/acerca_modal.php');

			session_start();

			if(!isset($_SESSION["user"])){
				echo("<script>alert('Necesita iniciar sesion como administrador para acceder a este sitio.'); window.location='index.php';</script>");
			}
 		?>

	</head>

	<body>
	  	<!-- Header -->
	    <header>
	        <div class="row">
	            <div align="center" class="col-lg-12">
	                <img src="image/principal/banner.png" class="img-responsive" id="banner">
	    	    </div> <!-- /.col-lg-12 -->
	        </div>  <!-- /.row -->
	    </header> <!-- Header -->

			<!-- Navigation -->
		  <div class="row">
		    <div class="col-lg-12">
		      <nav id="custom-bootstrap-menu" class="navbar navbar-default navbar-static-top" role="navigation">
		          <div class="container-fluid">
		            <!-- Brand and toggle get grouped for better mobile display -->
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand">BiblioMemorias Digital</a>
		            </div>
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                <ul class="nav navbar-nav">
		                  <li><a href="index.php">Inicio</a></li>
		                  <li><a href="busqueda.php">Buscar Memorias</a></li>
                  		<li class="active"><a href="admin_home.php">Administrar</a></li>
		                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		                    Acerca <span class="caret"></span></a>
		                    <ul class="dropdown-menu">
		                      <li data-toggle="modal" data-target="#myModal1"><a href="#">Institución</a></li>
		                      <li data-toggle="modal" data-target="#myModal2"><a href="#">Docente</a></li>
		                      <li data-toggle="modal" data-target="#myModal3"><a href="#">Sobre nosotros</a></li>
		                    </ul>
		                  </li>
		                </ul>
										<?php
		                  vista_login();
		                ?>
		            </div> <!-- /.navbar-collapse -->
		          </div> <!-- /.container -->
		        </nav>
		    </div>
		  </div>

			<?php
				modal_uni();
				modal_docente();
				modal_curso();
			?>

	    <div class="page-content">
	    	<div class="row">
			  <div class="col-md-2">
			  	<div class="sidebar content-box">
							<!-- Menú principal -->
							<ul id="menu" class="nav nav-pills nav-stacked">
                  <li class="current"><a data-toggle="pill" href="admin_home.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                  <li><a data-toggle="pill" href="admin_agregar.php"><i class="glyphicon glyphicon-upload"></i> Agregar memorias</a></li>
                  <li><a data-toggle="pill" href="admin_borrar.php"><i class="glyphicon glyphicon-list-alt"></i> Gestión memorias</a></li>
									<li><a data-toggle="pill" href="admin_correo.php"><i class="glyphicon glyphicon-envelope"></i> Correo</a></li>
              </ul>
	        </div>
			  </div>
			  <div class="col-md-10">
			  	<div class="row">
			  		<div class="col-md-6">
							<div class="content-box-header">
								<div class="panel-title">Administrador BiblioMemorias Digital</div>
							</div>
							<div class="content-box-large box-with-header">
			  				<div class="panel-body">
									<legend class="titulos"><b>Admin</b></legend>
									<p>
										Bienvenido administrador, en el sitio de aministrador usted tiene todo el control para administrar
										el repositorio de memorias de BiblioMemorias Digital, entre las funcionalidades del sitio están:
										<br>
									<p>
										<strong>Agregar memorias:</strong> En esta sección el administrador puede subir las memorias de título
										de los alumnos de Ingeniería en Computación para el posterior indexado con Solr.
									</p>
									<p>
										<strong>Gestión memorias:</strong> En esta sección el administrador puede administrar las memorias de título
										de los alumnos de Ingeniería en Computación, se visualiza el total de las memorias subidas al sitio y se pueden
										descartar las memorias con algún problema.
									</p>
									<p>
										<strong>Correo:</strong> En esta sección el administrador puede ver si personas han contactado con el sitio y
										puede ver los correos enviados por ellos y administrarlos.
									</p>
									</p>
			  				</div> <!-- panel-body -->
			  			</div> <!-- content-box-large -->
			  		</div> <!-- col-md-6 -->

			  		<div class="col-md-6">
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="content-box-header">
				  					<div class="panel-title">Información servidor solr</div>
					  			</div>
					  			<div class="content-box-large box-with-header">
										<img class="img-responsive" src="image/Solr_Logo.png" alt="Solr" id="img-solr">
										<br>
						  			<?php
										$versión_solr = solr_get_version();
										echo "Versión plugin php : ";
										print $versión_solr;
										print "<br>";

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

										//print_r($response);
										//print_r ($response->lucene);
										foreach ($response->lucene as $a => $b){
											//echo $a."|".$b."<br>";
										}

										echo "solr-spec-version ".$response->lucene["solr-spec-version"]."<br>";
										echo "solr-impl-version ".$response->lucene["solr-impl-version"]."<br>";
										echo "lucene-spec-version ".$response->lucene["lucene-spec-version"]."<br>";
										echo "lucene-impl-version ".$response->lucene["lucene-impl-version"]."<br>";






									?>
								</div>
			  				</div> <!-- col-md-12 -->
			  			</div> <!-- row -->


			  		</div> <!-- col-md-6 -->
			  	</div><!-- row -->
			  </div>
			</div>
	    </div>

	    <!-- Footer -->
        <footer>
            <div class="row">
              <div align="center" class="col-lg-12">
                    <img src="image/principal/footer_uls.png" id="foot" class="img-responsive"/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

			<!-- jQuery -->
			<script src="js/bootstrap/jquery.min.js"></script>
			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap/bootstrap.min.js"></script>
			<!-- Administrador -->
			<script src="js/administrador/custom.js"></script>
	  </body>
</html>
