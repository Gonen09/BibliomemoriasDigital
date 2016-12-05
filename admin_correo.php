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
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		
	  	<!-- Custom CSS -->
		<link href="css/general.css" rel="stylesheet">
		<!-- styles -->
		<link href="css/administrador/styles.css" rel="stylesheet">
		<link href="css/administrador/style_mail.css" rel="stylesheet">
		<link href="css/administrador/AdminLTE.min.css" rel="stylesheet">
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

					<!-- Menu del administrador -->
					<ul class="nav navbar-nav navbar-right">
			        	<li class="dropdown">

			        		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			        			<span class="glyphicon glyphicon-user"></span>
			        			<strong>Usuario</strong>
			        			<!--<img src="image/kathy.PNG" class="user-image img-circle" alt="Imagen usuario">
			        			<b>Kathy</b>-->
			        			<span class="glyphicon glyphicon-chevron-down"></span>
			        		</a>
			        		<ul class="dropdown-menu">
			        			<li>
			        				<div class="navbar-login">
			        					<div class="row">
			        						<div class="col-lg-4">
			        							<p class="text-center">
			        								<!--<img src="image/kathy.PNG" class="img-rounded icon-size">-->
			        								<span class="glyphicon glyphicon-user icon-size"></span>
			        							</p>
			        						</div>
			        						<div class="col-lg-8">
												<p class="text-left"><strong>Nombre del usuario</strong></p>
			        							<!--<p class="text-left"><strong>Katherine Ambler</strong></p>-->
												<p class="text-left small">correo@electronico.com</p>
			        							<!--<p class="text-left small">kambler@userena.cl</p>-->
			        							<!--<p class="text-left">
			        								<a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Perfil</a>
			        							</p>-->
			        						</div>
			        					</div>
			        				</div>
			        			</li>
			        			
			        			<li class="divider"></li>
			        			<li>
			        				<div class="navbar-login navbar-login-session">
			        					<div class="row">
			        						<div class="col-lg-12">
			        							<p>
			        								<a href="#" class="btn btn-danger btn-block">Cerrar sesión</a>
			        							</p>
			        						</div>
			        					</div>
			        				</div>
			        			</li>
			        		</ul>
			        	</li>
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
							<li><a href="administrador.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
							<li><a href="subir_memoria.php"><i class="glyphicon glyphicon-upload"></i> Subir memorias </a></li>
							<li><a href="listar_memorias.php"><i class="glyphicon glyphicon-list-alt"></i> Lista de memorias</a></li>
							<li class="current dropdown">
								<a href="#menu-correo" data-toggle="collapse">
									<i class="glyphicon glyphicon-envelope"></i>Correo
									<span class="glyphicon glyphicon-chevron-down pull-right"></span>
								</a>
								
								<!-- Menú correo -->
								<div id="menu-correo" class="collapse">
									<div class="row">
										<div class="col-lg-12">
											<a href="admin_correo.php">Bandeja de entrada
												<span class="pull-right-container">
													<span class="label label-primary pull-right">13</span>
												</span>
											</a>
										</div>
										<div class="col-lg-12">
											<a href="compose.html">Redactar</a>
										</div>
										<div class="col-lg-12">
											<a href="read-mail.html">Leer</a>
										</div>
									</div>
								</div>
								
							</li>
						</ul>
					</div>
				</div> <!-- col-md-2 -->

				<div class="col-md-10">
					<div class="container">
						<div class="row">
							
			  				<div class="col-md-4">
			  					<h3>Electivo III - Recuperación de la Información</h3>
			  					<a href="compose.html" class="btn btn-primary btn-block margin-bottom">Redactar</a>
			  					</br>
			  					<div class="content-box-large">
			  						<div class="panel-heading">
										<div class="panel-title">Carpetas</div>
										<div class="panel-options">
											<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-minus"></i></a>
										</div>
									</div>

			  						<div class="panel-body">
			  							<ul class="nav nav-pills nav-stacked">
			  								<li class="active"><a href="#"><i class="fa fa-inbox"></i> Bandeja de entrada
												<span class="label label-primary pull-right">12</span></a></li>
											<li><a href="#"><i class="fa fa-envelope-o"></i> Enviados</a></li>
											<li><a href="#"><i class="fa fa-file-text-o"></i> Borradores</a></li>
											<li><a href="#"><i class="fa fa-trash-o"></i> Eliminados <span class="label label-warning pull-right">65</span></a>
											</li>
			  							</ul>
			  						</div>
			  					</div>
			  				</div>
			  				
			  				<div class="col-md-8">
			  					<div class="content-box-large">
					  				<div class="panel-heading">
					  					<div class="panel-title">Bandeja de Entrada</div>
					  					<div class="panel-options">
					  						<div class="input-group">
										    	<input type="text" class="form-control" placeholder="Buscar correo">
										    	<span class="input-group-addon">
										        	<span class="glyphicon glyphicon-search"></span>
										    	</span>
									    	</div><!-- /input-group -->
					  					</div>

					  				</div>
					  				<div class="panel-body">
					  					<!-- Controles de correo -->
					  					<div class="mailbox-controls">
											<!-- Check all button -->
											<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
											</button>
											<div class="btn-group">
											  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
											  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
											  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
											</div>
											<!-- /.btn-group -->
											<button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
											<div class="pull-right">
											  1-50/200
											  <div class="btn-group">
												<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
												<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
											  </div><!-- /.btn-group -->
											</div><!-- /.pull-right -->
										</div><!-- Controles de correo -->
										<div class="table-responsive mailbox-messages">
											<table class="table table-hover table-striped">
											  <tbody>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">5 mins ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">28 mins ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">11 hours ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">15 hours ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">Yesterday</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">2 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">2 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">2 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">2 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">2 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">4 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">12 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">12 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">14 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">15 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">14 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">15 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">14 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">15 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">14 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">15 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">14 days ago</td>
											  </tr>
											  <tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">15 days ago</td>
											  </tr>

											  </tbody>
											</table><!-- /.table -->
										  </div><!-- /.mail-box-messages -->

										  <div class="box-footer no-padding">
											  <div class="mailbox-controls">
												<!-- Check all button -->
												<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
												</button>
												<div class="btn-group">
												  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
												  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
												  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
												</div><!-- /.btn-group -->
												
												<button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
												<div class="pull-right">
												  1-50/200
												  <div class="btn-group">
													<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
													<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
												  </div><!-- /.btn-group -->
												</div><!-- /.pull-right -->
											  </div>
											</div>
					  				</div>
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
				</div><!-- /.col-lg-12 -->
				
			</div><!-- /.row -->
			
		</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/bootstrap/jquery.min.js"></script>
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<script src="js/administrador/custom.js"></script>
		
	</body>
</html>