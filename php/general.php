<?php

  	require('login/login_nav.php');

  	function encabezado(){

		print('
	  		<header>
				<div class="row">
		  			<div class="col-lg-12" align="center">
						<img src="image/principal/banner.png" class="img-responsive" id="banner">
		  			</div> <!-- /.col-lg-12 -->
				</div><!-- /.row -->
	  		</header>
		');
  	}

	function navegacion($pagina){

		print ('
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
						</div><!-- navbar-header -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
		');

							if($pagina == 1){
								print('<li class="active"><a href="index.php">Inicio</a></li>');
							}else{
								print('<li><a href="index.php">Inicio</a></li>');
							}

							if($pagina == 2){
								print('<li class="active"><a href="busqueda.php">Buscar Memorias</a></li>');
							}else{
								print('<li><a href="busqueda.php">Buscar Memorias</a></li>');
							}

							if($pagina == 3){
								print('<li class="active"><a href="admin_home.php">Administrar</a></li>');
							}else{
								print('<li><a href="admin_home.php">Administrar</a></li>');
							}

							if($pagina != 3){
							print('<li data-toggle="modal" data-target="#modal-contact"><a href="#">Formulario contacto</a></li>');
							}

		print('
						  	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Acerca <span class="caret"></span></a>
								<ul class="dropdown-menu">
							  		<li data-toggle="modal" data-target="#myModal1"><a href="#">Institución</a></li>
							  		<li data-toggle="modal" data-target="#myModal2"><a href="#">Docente</a></li>
							  		<li data-toggle="modal" data-target="#myModal3"><a href="#">Sobre nosotros</a></li>
								</ul>
						  	</li>
						</ul>
		');
						  vista_login();
		print('
					</div> <!-- /.navbar-collapse -->
				  </div> <!-- /.container -->
				</nav>
			</div>
		  </div>
		');
  	}

  	function piePagina(){

		print ('
	  		<!-- Footer -->
	  		<footer>
		  		<div class="row">
					<div align="center" class="col-lg-12">
				  		<img src="image/principal/footer_uls.png" id="foot" class="img-responsive"/>
					</div> <!-- /.col-lg-12 -->
		  		</div> <!-- /.row -->
	  		</footer>
		');
  	}
?>
