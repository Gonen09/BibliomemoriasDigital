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
		<link href="css/administrador/navbar_login.css" rel="stylesheet">
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
									<!-- Menu del administrador -->
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Admin <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li>
													<div class="navbar-login">
														<div class="row">
															<div class="col-lg-4">
																<p class="text-center">
																	<img src="image/principal/uls_logo_hd.png" class="img-responsive">
																</p>
															</div>
															<div class="col-lg-8">
																<p class="text-left"><strong>Administrador</strong></p>
																<p class="text-left small">BiblioMemorias Digital</p>
																<p class="text-left small">Universidad de La Serena</p>
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
			</div>
		</div>

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
					<div class="sidebar content-box">
							<!-- Menú principal -->
	            <ul class="nav">
	                <li><a href="admin_home.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
	                <li><a href="admin_agregar.php"><i class="glyphicon glyphicon-upload"></i> Agregar memorias </a></li>
	                <li><a href="admin_borrar.php"><i class="glyphicon glyphicon-list-alt"></i> Borrar memorias</a></li>
	                <li class="current"><a href="admin_correo.php"><i class="glyphicon glyphicon-envelope"></i> Correo</a></li>
	            </ul>
	        </div>
				</div> <!-- col-md-2 -->

				<div class="col-md-10">
					<div class="row">
						<div class="col-lg-5">
							<div class="content-box-large">
								<div class="panel-heading">
									<h3>Bandeja de entrada</h3>
								</div>
								<!-- Bandeja de Entrada -->
								<div class="panel-body">
									<table class="table table-hover display" cellpadding="0" cellspacing="0"  width="100%">
									<tbody>
										<tr>
											<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
											<td class="mailbox-subject"><b><a href="#">AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</a>
											</td>
											<td class="mailbox-attachment"></td>
											<td class="mailbox-date">5 minutos atrás</td>
											<td></td>
											<td><a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
										</tr>
										<tr>
											<td><a href="read-mail.html">Alexander Pierce</a></td>
											<td class="mailbox-subject"><b><a href="#"> AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...></a>
											</td>
											<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
											<td class="mailbox-date">28 minutos atrás</td>
											<td></td>
											<td><a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
										</tr>
										<tr>
											<td><a href="read-mail.html">Alexander Pierce</a></td>
											<td class="mailbox-subject"><b><a href="#"> AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...></a>
											</td>
											<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
											<td class="mailbox-date">11 horas atrás</td>
											<td></td>
											<td><a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
										</tr>
										<tr>
											<td><a href="read-mail.html">Alexander Pierce</a></td>
											<td class="mailbox-subject"><b><a href="#"> AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...></a>
											</td>
											<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
											<td class="mailbox-date">15 horas atrás</td>
											<td></td>
											<td><a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
										</tr>
										<tr>
											<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
											<td class="mailbox-subject"><b><a href="#">AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</a>
											</td>
											<td class="mailbox-attachment"></td>
											<td class="mailbox-date">Ayer</td>
											<td></td>
											<td><a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
										</tr>
										<tr>
											<td><a href="read-mail.html">Alexander Pierce</a></td>
											<td class="mailbox-subject"><b><a href="#"> AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...></a>
											</td>
											<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
											<td class="mailbox-date">2 días atrás</td>
											<td></td>
											<td><a href="#" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar correo"></a></td>
										</tr>
									</tbody>
								</table>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="box box-primary">
								<div class="box-body no-padding">
								  <div class="mailbox-read-info">
									<h3>Asunto del correo</h3>
									<h5>De: help@example.com
									  <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
								  </div>

								  <!-- /.mailbox-read-info -->
								  <div class="mailbox-read-message">
									<p>Hello John,</p>

									<p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird
									  on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical
									  master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack
									  gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon
									  asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu
									  blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American
									  Apparel.</p>

									<p>Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale chips vegan PBR&amp;B
									  literally Thundercats +1. Forage tilde four dollar toast, banjo health goth paleo butcher. Four dollar
									  toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle gluten-free health goth
									  umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi sriracha dreamcatcher PBR&amp;B
									  flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next level. Cold-pressed
									  slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation lumbersexual crucifix.
									  Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit irony mumblecore
									  whatever viral Truffaut.</p>

									<p>Post-ironic shabby chic VHS, Marfa keytar flannel lomo try-hard keffiyeh cray. Actually fap fanny
									  pack yr artisan trust fund. High Life dreamcatcher church-key gentrify. Tumblr stumptown four dollar
									  toast vinyl, cold-pressed try-hard blog authentic keffiyeh Helvetica lo-fi tilde Intelligentsia. Lomo
									  locavore salvia bespoke, twee fixie paleo cliche brunch Schlitz blog McSweeney's messenger bag swag
									  slow-carb. Odd Future photo booth pork belly, you probably haven't heard of them actually tofu ennui
									  keffiyeh lo-fi Truffaut health goth. Narwhal sustainable retro disrupt.</p>

									<p>Skateboard artisan letterpress before they sold out High Life messenger bag. Bitters chambray
									  leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American Apparel twee. American
									  Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic synth Tumblr viral
									  plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof party tousled squid
									  vinyl. Readymade next level literally trust fund. Distillery master cleanse migas, Vice sriracha
									  flannel chambray chia cronut.</p>

									<p>Thanks,<br>Jane</p>
								  </div>
								  <!-- /.mailbox-read-message -->
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
								  <ul class="mailbox-attachments clearfix">
									<li>
									  <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

									  <div class="mailbox-attachment-info">
										<a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Sep2014-report.pdf</a>
											<span class="mailbox-attachment-size">
											  1,245 KB
											  <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
											</span>
									  </div>
									</li>
									<li>
									  <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>

									  <div class="mailbox-attachment-info">
										<a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> App Description.docx</a>
											<span class="mailbox-attachment-size">
											  1,245 KB
											  <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
											</span>
									  </div>
									</li>
									<li>
									  <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png" alt="Attachment"></span>

									  <div class="mailbox-attachment-info">
										<a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
											<span class="mailbox-attachment-size">
											  2.67 MB
											  <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
											</span>
									  </div>
									</li>
									<li>
									  <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png" alt="Attachment"></span>

									  <div class="mailbox-attachment-info">
										<a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
											<span class="mailbox-attachment-size">
											  1.9 MB
											  <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
											</span>
									  </div>
									</li>
								  </ul>
								</div><!-- /.box-footer -->
							  </div><!-- /. box -->
							</div><!-- /.col -->
						  </div><!-- /.row -->
						</div>
					</div>
				</div><!--col-md-9-->
			</div> <!-- row -->

		</div>
		<!-- Footer -->
		<footer>
			<div class="row">
			  <div align="center" class="col-lg-12">
					<img src="image/principal/footer_uls.png" id="foot" class="img-responsive"/>
				</div><!-- /.col-lg-12 -->
			</div><!-- /.row -->
		</footer>

		<!-- jQuery -->
    <script src="js/bootstrap/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- Tooltip -->
		<script src="js/tooltip.js"></script>
	</body>
</html>
