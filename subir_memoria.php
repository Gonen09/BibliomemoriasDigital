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
		<!-- styles -->
		<link href="css/administrador/styles.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/general.css" rel="stylesheet">
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
					  <li data-toggle="modal" data-target="#modal-contact"><a href="#">Formulario contacto</a></li>
					  <li data-toggle="modal" data-target="#myModal1"><a href="#">Institución</a></li>
					  <li data-toggle="modal" data-target="#myModal2"><a href="#">Docente</a></li>
					  <li data-toggle="modal" data-target="#myModal3"><a href="#">Sobre nosotros</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					  <li  class="active" data-toggle="modal" data-target="#modal-login"><a href="#"><span class="glyphicon glyphicon-cog"></span> Administrar</a></li>
					</ul>
				</div> <!-- /.navbar-collapse -->
		  </div> <!-- /.container -->
		</nav>


		<!-- Modal Contact -->
		<div class="modal fade modal-ext" data-keyboard="false" data-backdrop="static" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<!--Content-->
				<div class="modal-content">
					<!--Body-->
					<div class="modal-body">
						<img class="img-rounded img-responsive" id="img_contacto" src="image/principal/contacto.png">
						<br>
						<div class="md-form">
						  <div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="nombre" value="" placeholder="Nombre completo">
						  </div>
						</div>
						<br>
						<div class="md-form">
						  <div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input id="login-username" type="text" class="form-control" name="correo" value="" placeholder="Correo electrónico">
						  </div>
						</div>
						<br>
						<div class="md-form">
						  <div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							<input id="login-username" type="text" class="form-control" name="telefono" value="" placeholder="Telefono">
						  </div>
						</div>
						<br>
						<div class="md-form">
						  <div class="form-group">
						   <label for="sel1">Motivo contacto:</label>
						   <select class="form-control" id="sel1">
							 <option>Sugerencia</option>
							 <option>Felicitación</option>
							 <option>Reclamo</option>
							 <option>Otros</option>
						   </select>
						  </div>
						</div>
						<div class="md-form">
							<div class="form-group">
							 <label for="comment">Comentarios:</label>
							 <textarea type="text" class="form-control md-textarea" style="resize: none;" rows="2" id="comment" placeholder="Ingrese su mensaje aquí"></textarea>
							</div>
						</div>
					</div>
					<!--Footer-->
					<div class="modal-footer">
					  <div class="col-md-8 center-block">
						<button type="button" class="btn btn-primary">Enviar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					  </div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal  1: Contacto -->
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel1">Contacto</h4>
					</div>
					<div class="modal-body text-center">
						<img src="image/principal/uls-logo.png" class="img-responsive center-block" id ="logo-uls"><br>
						<p><strong>Universidad de la Serena</strong><br> Departamento de Matematicas<br>
							 Avenida Cisternas Nº 1200<br> La Serena <br> Teléfono: 51 2 204102 / 51 2 204103</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary center-block" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal  2: Docente -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
			  <div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel2">Docente</h4>
			  </div>
			  <div class="modal-body text-center">
				<img src="image/principal/jeltsch.jpg" class="img-responsive center-block img-rounded" id ="jeltsh"><br>
				<p><strong>Dr. Eric Jeltsch F.</strong><br> Depto. de Matemáticas <br>Av. Cisternas 1200, La Serena, CHILE.
				  <br>2º Piso, Of. 215<br>Fono: (+56)-51-2-334732 <br>e-mail: ejeltsch@userena.cl</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary center-block" data-dismiss="modal">Cerrar</button>
			  </div>
			</div>
		  </div>
		</div>

		<!-- Modal  3: Sobre nosotros -->
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel3">Sobre nosotros</h4>
					</div>
					<div class="modal-body text-center">
						<img src="image/principal/comp-logo.png" class="img-responsive center-block" id ="logo-comp"><br>
						<p><strong>Electivo III<br>Recuperación de la Información</strong> <br> Ingeniería en Computación<br> Universidad de la Serena</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary center-block" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>

		<div class="page-content">
			<div class="row">
				<div class="col-md-2">
					<div class="sidebar content-box" style="display: block;">
						<ul class="nav">
							<!-- Main menu -->
							<li><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
							<li class="current"><a href="subir_memoria.php"><i class="glyphicon glyphicon-upload"></i> Subir memorias </a></li>
							<li><a href="listar_memorias.php"><i class="glyphicon glyphicon-list-alt"></i> Lista de memorias</a></li>
						</ul>
					</div>
				</div> <!-- col-md32 -->

				<div class="col-md-10">
					<div class="container">
						<div class="row">
			  				<div class="col-md-12">
			  					<div class="content-box-large">
					  				<div class="panel-heading">
							            <legend>Subir memorias</legend>
							        </div>
					  				<div class="panel-body">
					  					<form class="form-horizontal" role="form">
										  <div class="form-group row">
										    <label for="idMemoria" class="col-xs-2 col-form-label text-right">ID Memoria</label>
										    <div class="col-xs-10">
										    	<div class="input-group">
										    		<input class="form-control" id="idMemoria" type="text">
												    <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
										    	</div>
										    	<p class="note"><i><small>Formato ID: cXX_XXXX -> XXXX = año</small></i></p>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="titulo" class="col-sm-2 control-label">Título</label>
										    <div class="col-sm-10">
										    	<div class="input-group">
										    		<input class="form-control" id="titulo">
										      		<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
										    	</div>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="autorMemoria" class="col-sm-2 control-label">Autor(es)</label>
										    <div class="col-sm-10">
										    	<div class="input-group">
										    		<input class="form-control" id="autorMemoria">
										      		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										    	</div>
										      <p class="note"><i><small>Si es más de un autor, separados por coma (,)</small></i></p>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="profesorGuia" class="col-sm-2 control-label">Profesor</label>
										    <div class="col-sm-10">
										    	<div class="input-group">
										    		<input class="form-control" id="profesorGuia">
										    		<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
										    	</div>
										    </div>
										  </div>
										  <div class="form-group">
										  	<label for="anio" class="col-sm-2 control-label">Año</label>
										    <div class="col-sm-3">
										    	<div class="input-group">
										    		<input class="form-control" id="anio" type="number" value="2000">
										    		<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
										    	</div>
										    </div>
										  </div>
										  <div class="form-group">
										    <label class="col-sm-2 control-label">Abstract</label>
										    <div class="col-sm-10">
										      <textarea class="form-control" placeholder="Ingrese el abstract de la memoria" rows="6"></textarea>
										    </div>
										  </div>

										  <legend>Archivo PDF</legend>
											<div class="form-group">
												<label class="col-md-1 control-label"> Ingrese archivo PDF	</label>
												<div class="col-md-11">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-open-file"></i></span>
														<input type="file" class="btn btn-default" id="exampleInputFile1">
													</div>
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

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<script src="js/administrador/custom.js"></script
	  </body>
</html>
