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
