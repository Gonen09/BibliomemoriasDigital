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
		<!-- Data Tables -->
		<link href="css/administrador/dataTables.bootstrap.css" rel="stylesheet">

		<?php
			require('php/login_nav.php');
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
				<!-- menu lateral -->
				<div class="col-md-2">
					<div class="sidebar content-box">
							<!-- Menú principal -->
	            <ul class="nav">
	                <li><a href="admin_home.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
	                <li><a href="admin_agregar.php"><i class="glyphicon glyphicon-upload"></i> Agregar memorias </a></li>
	                <li class="current"><a href="admin_borrar.php"><i class="glyphicon glyphicon-list-alt"></i> Borrar memorias</a></li>
	                <li><a href="admin_correo.php"><i class="glyphicon glyphicon-envelope"></i> Correo</a></li>
	            </ul>
	        </div>
				</div>

				<!-- lista de las memorias -->
				<div class="col-md-10">
					<div class="content-box-large">
						<div class="panel-heading">
							<div class="panel-title">Lista de memorias</div>
						</div> <!-- panel-heading -->

						<div class="panel-body">
							<table class="table table-hover display" cellpadding="0" cellspacing="0"  width="100%" id="tablaMemoria">
								<thead>
									<tr>
										<th>ID</th>
										<th>Título memoria</th>
										<th>Autor(es)</th>
										<th>Profesor Guía</th>
										<th>Año</th>
										<th class="text-center">Eliminar memoria</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center ask"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>4</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>5</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>6</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>7</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr class="odd gradeX">
										<td>8</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr class="odd gradeX">
										<td>9</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>10</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>11</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>12</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>13</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>14</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr class="odd gradeX">
										<td>15</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr class="odd gradeX">
										<td>16</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>16</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>17</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>18</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>19</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>20</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr class="odd gradeX">
										<td>21</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr class="odd gradeX">
										<td>22</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>
									<tr>
										<td>23</td>
										<td>asdasdasd</td>
										<td>Jorge Campos</td>
										<td>Eric Jeltsch</td>
										<td>2020</td>
										<td class="text-center"><a href="#" data-rel="collapse"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="right" title="Eliminar memoria"></i></a></td>
									</tr>

								</tbody>
							</table>
						</div><!-- panel-body -->
					</div>
				</div>
			</div> <!-- row -->
		</div>

		<!-- Footer -->
		<footer>
			<div class="row">
			  <div align="center" class="col-lg-12">
					<img src="image/principal/footer_uls.png" id="foot" class="img-responsive"/>
				</div>
			</div>
		</footer>
		<!-- jQuery -->
    <script src="js/bootstrap/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- DataTable plugin -->
		<script src="js/administrador/jquery.dataTables.min.js"></script>
		<!-- DataTable Boostrap -->
		<script src="js/administrador/dataTables.bootstrap.js"></script>
		<!-- Cargar Tabla -->
		<script src="js/administrador/cargar_dataTable.js"></script>
		<!-- Tooltip -->
		<script src="js/tooltip.js"></script>
	  </body>
</html>
