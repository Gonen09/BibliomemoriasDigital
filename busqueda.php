<!DOCTYPE html>
<html>
	<head>

		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="description" content="Sitio para subir y buscar memorias de titulo de ingenieria en computacion">
		  <meta name="author" content="Electivo III">

      <title>Búsqueda de BiblioMemorias Digital ULS</title>

      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Estilo pagina CSS -->
      <link href="css/general.css" rel="stylesheet">
    	<link href="css/navbar_login.css" rel="stylesheet">
      <link href="css/busqueda.css" rel="stylesheet">
      <!-- Reloj -->
      <link href="css/reloj.css" rel="stylesheet">
      <!-- Panal -->
      <link href="css/panal.css" rel="stylesheet">

			<?php
				require('php/login/login_nav.php');
				require('php/contacto_modal.php');
				require('php/acerca_modal.php');
				require('php/login/login_modal.php');

				session_start();
			?>



	</head>
	<body onload="cargarReloj();
								<?php
									if(isset($_POST['busqueda-index']) && !empty($_POST["busqueda-index"])){
										print 'enviarFormulario();';
									}
								?>
	">

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
                  <li class="active"><a href="busqueda.php">Buscar Memorias</a></li>
                  <li><a href="admin_home.php">Administrar</a></li>
                  <li data-toggle="modal" data-target="#modal-contact"><a href="#">Formulario contacto</a></li>
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
			modal_contacto();
			modal_uni();
			modal_docente();
			modal_curso();
			modal_login();
		?>

	  <!-- Modal Grafico -->
	  <div class="modal fade " id="modal-grafico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			  <!--Content-->
			  <div class="modal-content">

				  <div class="modal-header text-center">
					<h3 class="modal-title text-primary" id="myModalLabel3">Grafico tesis</h3>
				  </div>
				  <!--Body-->
				  <div class="modal-body">
					<div id="body-chart">
					  <div id="chart"></div>
					</div>
				  </div>

				  <!--Footer-->
				  <div class="modal-footer">
					  <button type="button" class="btn btn-danger center-block" data-dismiss="modal">Cerrar</button>
				  </div>
			  </div> <!--Modal content-->
		  </div>
	  </div>

	<div class="container-fluid">
	  <div class="row">
		<div class="col-sm-9">
		  <div class="panel panel-default">
			<div class="panel-heading" id="cabezera-panel">
			  <h4 class="text-center">Búsquedas</h4>
			</div>
			<div class="panel-body">
			  <div class="container" aling="center">
				<div class="row">
				  <div class="col-md-12">
					<form id="formulario" onsubmit="return false;">
						<div class="row">
						  <div class="col-md-8">
							<h3 class="text-primary"><strong>Búsqueda simple</strong></h3>
							<br>
							<div class="input-group">
							  <input type="text" id="q_contenido" class="form-control" placeholder="Buscar contenido" name="q"

								<?php
								if(isset($_POST['busqueda-index']) && !empty($_POST["busqueda-index"])){
									$indexData = $_POST['busqueda-index'];
									print 'value="'.$indexData.'"';
								}

								?>
						        >
							  <div class="input-group-btn">
								  <button class="btn btn-default" type="submit" onclick="enviarFormulario()"><i class="glyphicon glyphicon-search"></i></button>
							  </div>
							</div>
						  </div>
						  <div class="col-md-4" align="center">
							<img class="img-rounded" src="image/find-simple.png" alt="busqueda-simple"  id="busqueda-simple">
						  </div>
						</div>
					</form>
				  </div>
				</div>
			  </div>
			  <hr>
			  <div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading" id="busqueda-avanzada">
						<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" id="p_avanzada"><a>Búsqueda avanzada</a></h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">
						<div class="panel-body">
						  <div class="row">
							<div class="col-sm-8" aling="center">
							  <h3 class="text-primary text-center"><strong>Búsqueda avanzada</strong></h3>
							  <br>
							  <div class="form-group row">
								<label for="example-text-input" class="col-xs-2 col-form-label text-right">Titulo</label>
								<div class="col-xs-10">
								  <div class="input-group">
									<input class="form-control" type="text" placeholder="Titulo memoria" id="q_titulo">
									<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
								  </div>
								</div>
							  </div>
							  <div class="form-group row">
								<label for="example-search-input" class="col-xs-2 col-form-label text-right">Autor</label>
								<div class="col-xs-10">
								  <div class="input-group">
									<input class="form-control" type="text" placeholder="Autor(es) memoria" id="q_autor">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								  </div>
								</div>
							  </div>
							  <div class="form-group row">
								<label for="example-email-input" class="col-xs-2 col-form-label text-right">Profesor</label>
								<div class="col-xs-10">
								  <div class="input-group">
									<input class="form-control" type="text" placeholder="Profesor(es) memoria" id="q_profesor">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
								  </div>
								</div>
							  </div>
							  <div class="form-group row">
								<label for="example-url-input" class="col-xs-2 col-form-label text-right">Año</label>
								<div class="col-xs-10">
								  <div class="input-group">
									<input class="form-control" type="number" value="2000" id="q_ano">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								  </div>
								</div>
							  </div>
							  <div class="form-group row">
								<label for="example-tel-input" class="col-xs-2 col-form-label text-right">Abstract</label>
								<div class="col-xs-10">
								  <div class="input-group">
									<input class="form-control" type="text" placeholder="Resumen memoria" id="q_abstract">
									<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
								  </div>
								</div>
							  </div>
							  <div class="form-group row">
								<div class="col-xs-6 col-xs-offset-6">
								  <!-- <button type="submit" class="btn btn-primary" onclick="enviarFormulario()"> -->
								  <button  class="btn btn-primary" onclick="agregarFiltro('clasificacion|Inteligencia Artificial');">
									<i class="glyphicon glyphicon-search"></i>
									Consultar
								  </button>
								</div>
							  </div>
							</div>
							<div class="col-sm-4" align="center">
								<br><br><br>
								<img class="img-rounded img-responsive" src="image/find-advanced.png" alt="busqueda-avanzada">
								<br><br><br>
							</div>
						  </div>
						</div>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		</div> <!-- col-sm-9 -->

		<div class="col-sm-3">
		  <div class="row">
			  <div class="col-lg-12">
				<div class="well">
				  <!-- Well Reloj  -->
				  <div class="well clock-box">
					<!-- Reloj -->
					<article class="clock">
					  <div class="hours-container">
						<div class="hours"></div>
					  </div>
					  <div class="minutes-container">
						<div class="minutes"></div>
					  </div>
					  <div class="seconds-container">
						<div class="seconds"></div>
					  </div>
					</article>
					<!-- Reloj -->
				  </div>
				  <p class="text-center"><i id="date-box">Fecha</i></p>
				</div>
			  </div>
		  </div>
		</div> <!-- col-sm-3 -->
	  </div> <!-- row content -->


<!-- 	  <div class="row">  -->




	     <div class="row" id= "contenedor_panal_y_resultados">



		  </div> <!-- col-sm-6 -->
<!--		</div> <!-- row content -->
	</div> <!-- container-fluid -->

	  <!-- Footer -->
	  <footer>
		  <div class="row">
			<div align="center" class="col-lg-12">
				  <img src="image/principal/footer_uls.png" id="foot" class="img-responsive"/>
			</div> <!-- /.col-lg-12 -->
		  </div>  <!-- /.row -->
	  </footer>  <!-- Footer -->

	  <!-- jQuery -->
	  <script src="js/bootstrap/jquery.min.js"></script>
	  <!-- Bootstrap Core JavaScript -->
	  <script src="js/bootstrap/bootstrap.min.js"></script>
	  <!-- Reloj -->
	  <script src="js/reloj.js"></script>
	  <!-- Grafico panal -->
	  <script src="js/panal/carrotsearch.foamtree.js"></script>
	  <script src="js/panal/hammer.min.js"></script>
	  <script src="js/panal/createPanal.js"></script>
	  <!-- Grafico araña -->
	  <script src="js/D3/d3.v3.min.js"></script>
	  <script src="js/grafico-arana/RadarChart.js"></script>
	  <script src="js/grafico-arana/webchart.js"></script>
	    <!--Funciones de la pagina -->
		<script src="js/interpretando_ajax.js"></script>
		<script src="js/funciones_busqueda.js"></script
	</body>
</html>
