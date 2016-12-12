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
			  	<div class="sidebar content-box" style="display: block;">
							<!-- Menú principal -->
	            <ul class="nav">
	                <li class="current"><a href="admin_home.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
	                <li><a href="admin_agregar.php"><i class="glyphicon glyphicon-upload"></i> Agregar memorias </a></li>
	                <li><a href="admin_borrar.php"><i class="glyphicon glyphicon-list-alt"></i> Borrar memorias</a></li>
	                <li><a href="admin_correo.php"><i class="glyphicon glyphicon-envelope"></i> Correo</a></li>
	            </ul>
	        </div>
			  </div>
			  <div class="col-md-10">
			  	<div class="row">
			  		<div class="col-md-6">
			  			<div class="content-box-large">
			  				<div class="panel-heading">
								<div class="panel-title">New vs Returning Visitors</div>

								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
							</div> <!-- panel-heading -->
			  				<div class="panel-body">
			  					Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et,
					  			<br /><br />
					  			Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
								<br /><br />
			  				</div> <!-- panel-body -->
			  			</div> <!-- content-box-large -->
			  		</div> <!-- col-md-6 -->

			  		<div class="col-md-6">
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="content-box-header">
				  					<div class="panel-title">New vs Returning Visitors</div>

									<div class="panel-options">
										<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
										<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
									</div>
					  			</div>
					  			<div class="content-box-large box-with-header">

						  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
									<br /><br />
								</div>
			  				</div> <!-- col-md-12 -->
			  			</div> <!-- row -->
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="content-box-header">
				  					<div class="panel-title">New vs Returning Visitors</div>

									<div class="panel-options">
										<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
										<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
									</div>
					  			</div>
					  			<div class="content-box-large box-with-header">

						  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
									<br /><br />
								</div>
			  				</div> <!-- col-md-12 -->
			  			</div> <!-- row -->
			  		</div> <!-- col-md-6 -->
			  	</div><!-- row -->

			  	<div class="row">
			  		<div class="col-md-12 panel-warning">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">New vs Returning Visitors</div>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
							<br /><br />
						</div>
			  		</div>
			  	</div>

			  	<div class="content-box-large">
					Vivamus suscipit dui id tristique venenatis. Integer vitae dui egestas, ultrices augue et, luctus arcu. Sed pharetra lectus eget velit consequat, in dictum felis fringilla. Suspendisse vitae rutrum urna, quis malesuada tellus. Praesent consectetur gravida feugiat. In mi orci, malesuada sit amet lectus quis, tempor sollicitudin nibh. Nam ut nibh sit amet lorem facilisis adipiscing. Mauris condimentum ornare enim ut aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus molestie massa at accumsan luctus. Aenean ultricies elementum posuere. Praesent ut felis id metus auctor egestas at id augue.
					<br /><br />
					Sed gravida augue risus, in lacinia augue euismod at. Vestibulum pharetra sem nibh. Mauris a enim vel sapien dignissim commodo. Ut tristique fringilla diam, vel pulvinar ligula laoreet euismod. Curabitur sit amet pretium tortor. Nullam tincidunt ultrices metus, a cursus nulla mattis in. Ut risus lorem, fringilla vitae risus quis, ullamcorper elementum nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut lobortis risus at convallis dictum. Cras luctus, leo ac vestibulum ultrices, justo mi iaculis libero, non gravida arcu erat ut augue. Ut facilisis mollis quam, ut vestibulum magna placerat eu. Integer vulputate odio a lectus tincidunt placerat viverra vel est.
					<br /><br />
					Ut non tincidunt felis. Aliquam urna lacus, dictum vitae dignissim id, molestie vel urna. Quisque et auctor eros, a vulputate nibh. Praesent et dictum risus, vitae congue arcu. In convallis urna non convallis suscipit. Etiam auctor erat nec felis laoreet fringilla. In quis tortor sit amet arcu tempus elementum. In urna tellus, accumsan eget feugiat quis, commodo sit amet dolor. Sed pharetra leo id dignissim tincidunt. Phasellus ac consectetur massa, eu feugiat enim. Phasellus a porta ipsum. Nullam sit amet erat ornare, interdum orci non, ullamcorper magna. Aenean dictum, mi vel tempus mattis, neque sem tincidunt turpis, vitae sollicitudin felis nulla in purus. Nunc vitae erat vitae nibh pellentesque adipiscing. In dignissim dolor vitae metus eleifend, at tincidunt massa luctus. Suspendisse id ligula non leo tincidunt tempor.
					<br /><br />
					Nullam vel ligula arcu. Vivamus convallis libero auctor ante imperdiet, eget adipiscing nunc egestas. Quisque suscipit egestas mi tempor ornare. Fusce a tincidunt erat. Quisque quis risus adipiscing, eleifend dolor vel, ornare risus. Curabitur leo tortor, tempor at iaculis id, elementum sed tellus. Vestibulum sagittis quis mi ut lobortis. Nullam quis mattis diam, feugiat pulvinar sem.
					<br /><br />
					Duis iaculis enim eu massa rhoncus, a aliquam lorem sollicitudin. Sed elementum, dolor sit amet interdum euismod, orci diam vestibulum leo, vel mattis justo sapien in justo. Aenean gravida dolor eu rutrum porta. Quisque mattis, justo quis lacinia pharetra, tortor eros aliquet dolor, et consectetur felis massa eget mi. Aenean dapibus leo erat, ac molestie nibh rhoncus sed. Nam pretium purus et elit convallis facilisis. Vivamus vitae dolor sit amet ante faucibus ornare eu non diam. Donec felis leo, malesuada eu lectus ac, facilisis posuere lorem.
					<br /><br />
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur porta eu justo non tempor. Pellentesque auctor ultrices rhoncus. Nullam ac aliquam purus. Ut eros elit, malesuada eu purus sed, lacinia imperdiet nibh. Ut vitae pretium nisl, a suscipit elit. Duis quis ornare quam, sed aliquam diam. Nulla condimentum ligula quis dolor tempus, et dictum leo mollis. Suspendisse non cursus lorem. Cras quis cursus tellus. Fusce tincidunt nisl id odio tempor placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum arcu sed metus faucibus rhoncus. Vivamus porta lacinia nisl. Curabitur nec ornare est. Ut congue ullamcorper tortor, sit amet pulvinar lectus.
					<br /><br />
					Curabitur bibendum accumsan felis, in cursus lectus porttitor sed. Aliquam quis est sit amet libero pretium suscipit a vitae velit. Cras sollicitudin suscipit justo ac consectetur. Nam vel iaculis enim. Quisque ut tristique sem. Suspendisse feugiat dignissim nisi nec luctus. Etiam tincidunt id nulla vel mollis. Pellentesque convallis velit at luctus vulputate. Suspendisse potenti. Nam eu elementum tellus, sit amet varius tortor. Aliquam erat volutpat. In mi magna, mattis id bibendum id, viverra quis mauris.
					<br /><br />
					Nulla sed sem quis odio hendrerit rutrum ac sed nisl. Nulla sit amet nibh orci. Donec ornare mollis elit quis egestas. Sed euismod mollis accumsan. In dapibus arcu arcu, id condimentum lacus accumsan eget. Vivamus in sapien non nulla ultricies molestie. Fusce volutpat tellus quis mi laoreet accumsan. Nulla nec neque aliquet lorem scelerisque eleifend eu et leo.
					<br /><br />
					Pellentesque id arcu et odio imperdiet laoreet. Nulla sed eros risus. Sed tellus odio, faucibus et odio eu, eleifend aliquet nisl. In porttitor odio pulvinar ligula tempor, bibendum lacinia metus mattis. Donec venenatis, tellus non aliquet lobortis, magna lorem ullamcorper urna, nec posuere metus lacus non tellus. Aenean condimentum, velit ac tincidunt volutpat, dolor metus pulvinar lacus, a commodo massa dolor eget magna. Ut hendrerit lectus sit amet malesuada tincidunt.
					<br /><br />
					Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt imperdiet luctus. Fusce lobortis metus id leo pellentesque, iaculis consequat lacus posuere.
				  	<br /><br />
					Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
					<br /><br />
					Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus non ante iaculis tempor. Etiam ac gravida erat. Sed interdum elit a libero tincidunt placerat. Quisque molestie blandit sem vitae tincidunt. Aliquam feugiat, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus, id tincidunt erat tempor nec. Praesent interdum, lectus vel dictum convallis, velit est fringilla arcu, eget sollicitudin nibh sem ut magna.
					<br /><br />
					Vivamus suscipit dui id tristique venenatis. Integer vitae dui egestas, ultrices augue et, luctus arcu. Sed pharetra lectus eget velit consequat, in dictum felis fringilla. Suspendisse vitae rutrum urna, quis malesuada tellus. Praesent consectetur gravida feugiat. In mi orci, malesuada sit amet lectus quis, tempor sollicitudin nibh. Nam ut nibh sit amet lorem facilisis adipiscing. Mauris condimentum ornare enim ut aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus molestie massa at accumsan luctus. Aenean ultricies elementum posuere. Praesent ut felis id metus auctor egestas at id augue.
					<br /><br />
					Sed gravida augue risus, in lacinia augue euismod at. Vestibulum pharetra sem nibh. Mauris a enim vel sapien dignissim commodo. Ut tristique fringilla diam, vel pulvinar ligula laoreet euismod. Curabitur sit amet pretium tortor. Nullam tincidunt ultrices metus, a cursus nulla mattis in. Ut risus lorem, fringilla vitae risus quis, ullamcorper elementum nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut lobortis risus at convallis dictum. Cras luctus, leo ac vestibulum ultrices, justo mi iaculis libero, non gravida arcu erat ut augue. Ut facilisis mollis quam, ut vestibulum magna placerat eu. Integer vulputate odio a lectus tincidunt placerat viverra vel est.
					<br /><br />
					Ut non tincidunt felis. Aliquam urna lacus, dictum vitae dignissim id, molestie vel urna. Quisque et auctor eros, a vulputate nibh. Praesent et dictum risus, vitae congue arcu. In convallis urna non convallis suscipit. Etiam auctor erat nec felis laoreet fringilla. In quis tortor sit amet arcu tempus elementum. In urna tellus, accumsan eget feugiat quis, commodo sit amet dolor. Sed pharetra leo id dignissim tincidunt. Phasellus ac consectetur massa, eu feugiat enim. Phasellus a porta ipsum. Nullam sit amet erat ornare, interdum orci non, ullamcorper magna. Aenean dictum, mi vel tempus mattis, neque sem tincidunt turpis, vitae sollicitudin felis nulla in purus. Nunc vitae erat vitae nibh pellentesque adipiscing. In dignissim dolor vitae metus eleifend, at tincidunt massa luctus. Suspendisse id ligula non leo tincidunt tempor.
					<br /><br />
					Nullam vel ligula arcu. Vivamus convallis libero auctor ante imperdiet, eget adipiscing nunc egestas. Quisque suscipit egestas mi tempor ornare. Fusce a tincidunt erat. Quisque quis risus adipiscing, eleifend dolor vel, ornare risus. Curabitur leo tortor, tempor at iaculis id, elementum sed tellus. Vestibulum sagittis quis mi ut lobortis. Nullam quis mattis diam, feugiat pulvinar sem.
					<br /><br />
					Duis iaculis enim eu massa rhoncus, a aliquam lorem sollicitudin. Sed elementum, dolor sit amet interdum euismod, orci diam vestibulum leo, vel mattis justo sapien in justo. Aenean gravida dolor eu rutrum porta. Quisque mattis, justo quis lacinia pharetra, tortor eros aliquet dolor, et consectetur felis massa eget mi. Aenean dapibus leo erat, ac molestie nibh rhoncus sed. Nam pretium purus et elit convallis facilisis. Vivamus vitae dolor sit amet ante faucibus ornare eu non diam. Donec felis leo, malesuada eu lectus ac, facilisis posuere lorem.
					<br /><br />
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur porta eu justo non tempor. Pellentesque auctor ultrices rhoncus. Nullam ac aliquam purus. Ut eros elit, malesuada eu purus sed, lacinia imperdiet nibh. Ut vitae pretium nisl, a suscipit elit. Duis quis ornare quam, sed aliquam diam. Nulla condimentum ligula quis dolor tempus, et dictum leo mollis. Suspendisse non cursus lorem. Cras quis cursus tellus. Fusce tincidunt nisl id odio tempor placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum arcu sed metus faucibus rhoncus. Vivamus porta lacinia nisl. Curabitur nec ornare est. Ut congue ullamcorper tortor, sit amet pulvinar lectus.
					<br /><br />
					Curabitur bibendum accumsan felis, in cursus lectus porttitor sed. Aliquam quis est sit amet libero pretium suscipit a vitae velit. Cras sollicitudin suscipit justo ac consectetur. Nam vel iaculis enim. Quisque ut tristique sem. Suspendisse feugiat dignissim nisi nec luctus. Etiam tincidunt id nulla vel mollis. Pellentesque convallis velit at luctus vulputate. Suspendisse potenti. Nam eu elementum tellus, sit amet varius tortor. Aliquam erat volutpat. In mi magna, mattis id bibendum id, viverra quis mauris.
					<br /><br />
					Nulla sed sem quis odio hendrerit rutrum ac sed nisl. Nulla sit amet nibh orci. Donec ornare mollis elit quis egestas. Sed euismod mollis accumsan. In dapibus arcu arcu, id condimentum lacus accumsan eget. Vivamus in sapien non nulla ultricies molestie. Fusce volutpat tellus quis mi laoreet accumsan. Nulla nec neque aliquet lorem scelerisque eleifend eu et leo.
					<br /><br />
					Pellentesque id arcu et odio imperdiet laoreet. Nulla sed eros risus. Sed tellus odio, faucibus et odio eu, eleifend aliquet nisl. In porttitor odio pulvinar ligula tempor, bibendum lacinia metus mattis. Donec venenatis, tellus non aliquet lobortis, magna lorem ullamcorper urna, nec posuere metus lacus non tellus. Aenean condimentum, velit ac tincidunt volutpat, dolor metus pulvinar lacus, a commodo massa dolor eget magna. Ut hendrerit lectus sit amet malesuada tincidunt.
					<br /><br />
					Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt imperdiet luctus. Fusce lobortis metus id leo pellentesque, iaculis consequat lacus posuere.
				  	<br /><br />
					Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
					<br /><br />
					Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus non ante iaculis tempor. Etiam ac gravida erat. Sed interdum elit a libero tincidunt placerat. Quisque molestie blandit sem vitae tincidunt. Aliquam feugiat, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus, id tincidunt erat tempor nec. Praesent interdum, lectus vel dictum convallis, velit est fringilla arcu, eget sollicitudin nibh sem ut magna.
					<br /><br />
					Vivamus suscipit dui id tristique venenatis. Integer vitae dui egestas, ultrices augue et, luctus arcu. Sed pharetra lectus eget velit consequat, in dictum felis fringilla. Suspendisse vitae rutrum urna, quis malesuada tellus. Praesent consectetur gravida feugiat. In mi orci, malesuada sit amet lectus quis, tempor sollicitudin nibh. Nam ut nibh sit amet lorem facilisis adipiscing. Mauris condimentum ornare enim ut aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus molestie massa at accumsan luctus. Aenean ultricies elementum posuere. Praesent ut felis id metus auctor egestas at id augue.
					<br /><br />
					Sed gravida augue risus, in lacinia augue euismod at. Vestibulum pharetra sem nibh. Mauris a enim vel sapien dignissim commodo. Ut tristique fringilla diam, vel pulvinar ligula laoreet euismod. Curabitur sit amet pretium tortor. Nullam tincidunt ultrices metus, a cursus nulla mattis in. Ut risus lorem, fringilla vitae risus quis, ullamcorper elementum nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut lobortis risus at convallis dictum. Cras luctus, leo ac vestibulum ultrices, justo mi iaculis libero, non gravida arcu erat ut augue. Ut facilisis mollis quam, ut vestibulum magna placerat eu. Integer vulputate odio a lectus tincidunt placerat viverra vel est.
					<br /><br />
					Ut non tincidunt felis. Aliquam urna lacus, dictum vitae dignissim id, molestie vel urna. Quisque et auctor eros, a vulputate nibh. Praesent et dictum risus, vitae congue arcu. In convallis urna non convallis suscipit. Etiam auctor erat nec felis laoreet fringilla. In quis tortor sit amet arcu tempus elementum. In urna tellus, accumsan eget feugiat quis, commodo sit amet dolor. Sed pharetra leo id dignissim tincidunt. Phasellus ac consectetur massa, eu feugiat enim. Phasellus a porta ipsum. Nullam sit amet erat ornare, interdum orci non, ullamcorper magna. Aenean dictum, mi vel tempus mattis, neque sem tincidunt turpis, vitae sollicitudin felis nulla in purus. Nunc vitae erat vitae nibh pellentesque adipiscing. In dignissim dolor vitae metus eleifend, at tincidunt massa luctus. Suspendisse id ligula non leo tincidunt tempor.
					<br /><br />
					Nullam vel ligula arcu. Vivamus convallis libero auctor ante imperdiet, eget adipiscing nunc egestas. Quisque suscipit egestas mi tempor ornare. Fusce a tincidunt erat. Quisque quis risus adipiscing, eleifend dolor vel, ornare risus. Curabitur leo tortor, tempor at iaculis id, elementum sed tellus. Vestibulum sagittis quis mi ut lobortis. Nullam quis mattis diam, feugiat pulvinar sem.
					<br /><br />
					Duis iaculis enim eu massa rhoncus, a aliquam lorem sollicitudin. Sed elementum, dolor sit amet interdum euismod, orci diam vestibulum leo, vel mattis justo sapien in justo. Aenean gravida dolor eu rutrum porta. Quisque mattis, justo quis lacinia pharetra, tortor eros aliquet dolor, et consectetur felis massa eget mi. Aenean dapibus leo erat, ac molestie nibh rhoncus sed. Nam pretium purus et elit convallis facilisis. Vivamus vitae dolor sit amet ante faucibus ornare eu non diam. Donec felis leo, malesuada eu lectus ac, facilisis posuere lorem.
					<br /><br />
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur porta eu justo non tempor. Pellentesque auctor ultrices rhoncus. Nullam ac aliquam purus. Ut eros elit, malesuada eu purus sed, lacinia imperdiet nibh. Ut vitae pretium nisl, a suscipit elit. Duis quis ornare quam, sed aliquam diam. Nulla condimentum ligula quis dolor tempus, et dictum leo mollis. Suspendisse non cursus lorem. Cras quis cursus tellus. Fusce tincidunt nisl id odio tempor placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum arcu sed metus faucibus rhoncus. Vivamus porta lacinia nisl. Curabitur nec ornare est. Ut congue ullamcorper tortor, sit amet pulvinar lectus.
					<br /><br />
					Curabitur bibendum accumsan felis, in cursus lectus porttitor sed. Aliquam quis est sit amet libero pretium suscipit a vitae velit. Cras sollicitudin suscipit justo ac consectetur. Nam vel iaculis enim. Quisque ut tristique sem. Suspendisse feugiat dignissim nisi nec luctus. Etiam tincidunt id nulla vel mollis. Pellentesque convallis velit at luctus vulputate. Suspendisse potenti. Nam eu elementum tellus, sit amet varius tortor. Aliquam erat volutpat. In mi magna, mattis id bibendum id, viverra quis mauris.
					<br /><br />
					Nulla sed sem quis odio hendrerit rutrum ac sed nisl. Nulla sit amet nibh orci. Donec ornare mollis elit quis egestas. Sed euismod mollis accumsan. In dapibus arcu arcu, id condimentum lacus accumsan eget. Vivamus in sapien non nulla ultricies molestie. Fusce volutpat tellus quis mi laoreet accumsan. Nulla nec neque aliquet lorem scelerisque eleifend eu et leo.
					<br /><br />
					Pellentesque id arcu et odio imperdiet laoreet. Nulla sed eros risus. Sed tellus odio, faucibus et odio eu, eleifend aliquet nisl. In porttitor odio pulvinar ligula tempor, bibendum lacinia metus mattis. Donec venenatis, tellus non aliquet lobortis, magna lorem ullamcorper urna, nec posuere metus lacus non tellus. Aenean condimentum, velit ac tincidunt volutpat, dolor metus pulvinar lacus, a commodo massa dolor eget magna. Ut hendrerit lectus sit amet malesuada tincidunt.
					<br /><br />
			  	</div>
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
