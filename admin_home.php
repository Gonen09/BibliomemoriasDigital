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
								<div class="panel-title">Administrador BiblioMemorias Digital</div>
							</div>
							<div class="content-box-large box-with-header">
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
				  					<div class="panel-title">Información servidor solr</div>
					  			</div>
					  			<div class="content-box-large box-with-header">
										
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
