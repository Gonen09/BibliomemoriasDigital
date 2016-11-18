<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sitio para subir y buscar memorias de titulo de ingenieria en computacion">
    <meta name="author" content="Electivo III">

    <title>BiblioMemorias Digital ULS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                <a class="navbar-brand" href="#">BiblioMemorias Digital</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php">Inicio</a></li>
                  <li><a href="busqueda.php">Buscar Tesis</a></li>
                  <li data-toggle="modal" data-target="#modal-contact"><a href="#">Formulario contacto</a></li>
                  <li data-toggle="modal" data-target="#myModal1"><a href="#">Institución</a></li>
                  <li data-toggle="modal" data-target="#myModal2"><a href="#">Docente</a></li>
                  <li data-toggle="modal" data-target="#myModal3"><a href="#">Sobre nosotros</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li data-toggle="modal" data-target="#modal-login"><a href="#"><span class="glyphicon glyphicon-cog"></span> Administrar</a></li>
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

    <!-- Modal  1 -->
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

    <!-- Modal  2 -->
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

    <!-- Modal  3 -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    	<div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-header text-center">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    				<h4 class="modal-title" id="myModalLabel3">Sobre nosotros</h4>
    			</div>
    			<div class="modal-body text-center">
    				<img src="image/principal/comp-logo.jpg" class="img-responsive center-block" id ="logo-comp"><br>
    				<p><strong>Electivo III<br>Recuperación de la Información</strong> <br> Ingeniería en Computación<br> Universidad de la Serena</p>
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-primary center-block" data-dismiss="modal">Cerrar</button>
    			</div>
    		</div>
    	</div>
    </div>

    <!-- Modal Login -->
    <div class="modal fade modal-ext" data-keyboard="false" data-backdrop="static" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Body-->
                <div class="modal-body" align="center">
                      <img class="img-rounded img-responsive" id="img_login" src="image/principal/login.png">
                      <br>
                      <div class="md-form">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Usuario">
                        </div>
                      </div>
                      <br>
                      <div class="md-form">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña">
                        </div>
                      </div>
                </div>

                <!--Footer-->
                <div class="modal-footer">
                      <div class="pull-left">
                          <p><a href="#">¿Olvidó la contraseña?</a></p>
                      </div>
                      <div class="pull-right">
                            <button type="button" class="btn btn-primary">Ingresar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                </div>
            </div> <!--Modal content-->
        </div>
    </div>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row content">

            <!-- Blog Entries Column -->
            <div class="col-sm-9">

                <h1 class="page-header">
                    Recuperación de la Información
                    <small> Electivo III</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="image/900x300.png" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="image/900x300.png" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="image/900x300.png" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Anteriores</a>
                    </li>
                    <li class="next">
                        <a href="#">Nuevos &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Búsqueda</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Categorias</h4>
                    <div class="row">
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Ingeniería de Software</a>
                                </li>
                                <li><a href="#">Inteligencia Artificial</a>
                                </li>
                                <li><a href="#">Base de datos</a>
                                </li>
                                <li><a href="#">Telecomunicaciones</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <hr>
    </div>     <!-- /.container -->

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
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
