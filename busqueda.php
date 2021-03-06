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
    <link href="css/busqueda.css" rel="stylesheet">
    <!-- Panal -->
    <link href="css/panal.css" rel="stylesheet">
    <!-- Fuente -->
   	<link href="css/SourceSansPro.css" rel="stylesheet">

		<?php
			require('php/general.php');
			require('php/contacto/contacto_modal.php');
			require('php/acerca_modal.php');
			require('php/login/login_modal.php');

			session_start();
		?>
	</head>

	<body onload="<?php
					if(isset($_POST['busqueda-index']) && !empty($_POST["busqueda-index"])){
						print 'enviarFormulario();';
					}
				  ?>
	">

		<?php
	    encabezado();
			navegacion(2);
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
						<h3 class="modal-title text-primary" id="myModalLabel3">Estadísticas de la memoria</h3>
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
	  	</div><!-- Modal Gráfico -->

		<div class="container-fluid">
		  <div class="row">
				<div class="col-sm-9">
			  		<div class="panel panel-default">
							<div class="panel-heading" id="cabezera-panel">
					  			<h4 class="text-center">Búsquedas</h4>
							</div>
							<div class="panel-body">
								<div class="row">
					  			<div class="col-md-12">
										<form id="formulario" onsubmit="return false;">
										<div class="row">
							  				<div class="col-sm-offset-1 col-sm-7">
												<h3 class="text-primary titulos"><strong>Búsqueda simple</strong></h3>
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
													  <button class="btn btn-color" type="submit" onclick="enviarFormulario()"><i class="glyphicon glyphicon-search icon-color"></i></button>
												  	</div>
												</div><!-- input-group-->
											</div><!-- col-md-4-->
							  				<div class="col-sm-4" align="center">
												<img class="img-rounded" src="image/busqueda/find-simple.png" alt="busqueda-simple"  id="busqueda-simple">
							  				</div><!-- col-md-4-->
										</div><!-- row -->
									</form><!-- form -->
					  			</div><!-- col-md-12-->
								</div><!--row -->
							</div><!-- panel-body -->
			  		</div><!-- panel-default -->

						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
							<div class="panel-heading" id="busqueda-avanzada">
								<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" id="p_avanzada">
									<a>Búsqueda avanzada</a>
								</h4>
							</div><!-- panel-heading- -->
							<div class="panel-collapse collapse" id="collapseOne">
								<div class="panel-body">
										<div class="row">
											<div class="col-sm-8" aling="center">
													<h3 class="text-primary titulos text-center"><strong>Búsqueda avanzada</strong></h3>
													<br>
													<div class="form-group row">
														<label for="example-text-input" class="col-xs-2 col-form-label text-right">Titulo</label>
														<div class="col-xs-10">
															<div class="input-group">
																<input class="form-control" type="text" placeholder="Titulo memoria" id="q_titulo">
																<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-bookmark icon-color"></i></span>
																</div>
														</div>
													</div>
													<div class="form-group row">
														<label for="example-search-input" class="col-xs-2 col-form-label text-right">Autor</label>
														<div class="col-xs-10">
															<div class="input-group">
															<input class="form-control" type="text" placeholder="Autor(es) memoria, separados por coma" id="q_autor">
															<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-user icon-color"></i></span>
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label for="example-email-input" class="col-xs-2 col-form-label text-right">Profesor</label>
														<div class="col-xs-10">
															<div class="input-group">
																<input class="form-control" type="text" placeholder="Profesor(es) memoria, separados por coma" id="q_profesor">
																<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-education icon-color"></i></span>
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label for="example-url-input" class="col-xs-2 col-form-label text-right">Año</label>
														<div class="col-xs-10">
															<div class="input-group">
															<input class="form-control" type="number" <?php print ('value="'.date("Y").'"'); ?> id="q_ano">
															<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-calendar icon-color"></i></span>
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label for="example-tel-input" class="col-xs-2 col-form-label text-right">Abstract</label>
														<div class="col-xs-10">
																<div class="input-group">
																<input class="form-control" type="text" placeholder="Resumen memoria" id="q_abstract">
																<span class="input-group-addon btn-color"><i class="glyphicon glyphicon-book icon-color"></i></span>
																</div>
														</div>
													</div>
													<div class="form-group row">
														<div class="col-xs-6 col-xs-offset-6">
																<button id="btn-consultar" type="submit" class="btn btn-color text-color" onclick="enviarFormulario()" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
																	<i class="glyphicon glyphicon-search icon-color icon-margin"></i>
																Consultar
																</button>
														</div>
													</div><!-- form-group row -->
											</div><!-- col-sm-8-->
											<div class="col-sm-4">
												<br><br><br>
												<img class="img-rounded img-responsive" src="image/busqueda/find-advanced.png" alt="busqueda-avanzada">
												<br><br><br>
											</div><!-- col-sm-4-->
										</div><!-- row -->
								</div><!-- panel-body -->
							</div><!-- panel-collapse -->
						</div><!-- panel-default -->
						</div><!-- panel-group (Acordión) -->
				</div> <!-- col-sm-9 -->

				<div class="col-sm-3">
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
						</div><!-- col-md-12 -->
					</div><!-- row -->
				</div> <!-- col-sm-3 -->
			</div> <!-- row -->

			<!-- Aquí va el gráfico panal -->
			<div class="row" id="contenedor_panal_y_resultados"></div><!-- col-sm-6 -->
		</div><!-- container-fluid -->

		<?php
			piePagina();
		?>

	  	<!-- jQuery -->
	  	<script src="js/bootstrap/jquery.min.js"></script>
	  	<!-- Bootstrap Core JavaScript -->
	  	<script src="js/bootstrap/bootstrap.min.js"></script>
	  	<!-- Grafico panal -->
	  	<script src="js/panal/carrotsearch.foamtree.js"></script>
	  	<script src="js/panal/hammer.min.js"></script>
	  	<!-- Grafico araña -->
	  	<script src="js/D3/d3.v3.min.js"></script>
	  	<script src="js/grafico-arana/RadarChart.js"></script>
	    <!--Funciones de la pagina -->
			<script src="js/interpretando_ajax.js"></script>
			<script src="js/funciones_busqueda.js"></script>
	</body>
</html>
