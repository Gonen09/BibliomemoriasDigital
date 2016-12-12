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
    <!-- Estilo pagina CSS -->
    <link href="css/general.css" rel="stylesheet">
    <!-- Reloj -->
    <link href="css/reloj.css" rel="stylesheet">

</head>

<body onload="cargarReloj()">
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
                  <li class="active"><a href="index.php">Inicio</a></li>
                  <li><a href="busqueda.php">Buscar Memorias</a></li>
                  <li><a href="admin_home.php">Administrar</a></li>
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
                <ul class="nav navbar-nav navbar-right">
                  <li data-toggle="modal" data-target="#modal-login"><a href="#"><span class="glyphicon glyphicon-user"></span> Iniciar sesión</a></li>
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
                <div class="col-xs-8 col-xs-offset-4 center-block">
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
  				<img src="image/principal/comp-logo.png" class="img-responsive center-block" id ="logo-comp"><br>
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
        <!-- <form action="JavaScript:enviar_consulta('login-modal','respuesta')" method="post" id="login-modal"> -->
        <form action="php/consulta_login.php" method="post" id="login-modal">
          <!--Content-->
          <div class="modal-content">
              <!--Body-->
              <div class="modal-body" align="center">
                    <img class="img-rounded img-responsive" id="img_login" src="image/principal/login.png">
                    <br>
                    <div class="md-form">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="user" placeholder="Usuario">
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
                          <button type="submit" class="btn btn-primary">Ingresar</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
              </div>
          </div> <!--Modal content-->
        </form>
      </div>
  </div>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row content" id="canvas">
            <div class="container-fluid">
              <h1 class="page-header text-primary">
                  Recuperación de la Información
                  <small> Electivo III</small>
              </h1>
            </div>
            <div class="col-sm-9">
                <div class="row" id="inicio">
                  <div class="col-sm-12">
                    <div class="panel panel-default">
                      <div class="panel-heading" id="cabezera-panel">
                        <h4 class="text-center">BiblioMemorias Digital Universidad de La Serena</h4>
                      </div>
                      <div class="panel-body">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="well col-sm-8">
                              <h3>El Electivo III <strong class="text-primary" data-toggle="tooltip" data-placement="right" title="vivo!!!">esta vivo !!!</strong></h3>
                              <br>
                              <p>
                                Bienvenido a nuestro repositorio de <strong>Memorias de Titulo</strong> de la carrera <strong>Ingeniería en
                                Computación e Informática</strong> de la <strong>Universidad de La Serena</strong>.
                              </p>
                              <p>
                                El proposito de este repositorio es administrar de manera eficiente las <strong>memorias de titulo</strong>
                                de la carrera, subiendo de forma digital las memorias de titulo,
                                con un <strong>formato definido</strong> por la escuela de ingeniería en computación, para que los estudiantes,
                                academicos u persona interesada en trabajos en el area de <strong>Redes y telecominicaciones</strong>, <strong>Base de Datos</strong>
                                <strong>Ingeniería de Software</strong> e <strong>Inteligencia Artificial</strong> puedan obtener información para su uso personal.
                              </p>
                            </div>
                            <div class="col-sm-4">
                                <img class="img-responsive img-rounded" src="image/biblio.png" alt="biblio-digital">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>
                <div class="row" id="worldcloud">
                  <div class="col-sm-6">
                    <div class="panel panel-default">
                      <div class="panel-heading" id="cabezera-panel">
                        <h4 class="text-center">BiblioMemorias Digital WorldCloud</h4>
                      </div>
                      <div class="panel-body">
                          <div id="cloud">

                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="panel panel-default">
                      <div class="panel-heading" id="cabezera-panel">
                        <h4 class="text-center">BiblioMemorias Digital Estadisticas</h4>
                      </div>
                      <div class="panel-body">
                        <br>
                        <h2 class="text-center text-primary">Memorias subidas al sitio</h2>
                        <br>
                        <img class="img-responsive" src="image/web-graph.png" alt="grafico-web">
                        <br>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">
                <div class="row">
                  <div class="col-md-12">
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
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <!-- Well Reloj  -->
                    <div class="well">
                      <div class="well clock-box">
                        <article class="clock">
                          <div class="hours-container">
                            <div class="hours"></div>
                          </div>
                          <div class="minutes-container">
                            <div class="minutes"></div>
                          </div>
                          <div class="seconds-container">
                            <div class="seconds"></div>
                          </div>
                        </article>
                      </div>
                      <p class="text-center"><i id="date-box">Fecha</i></p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <!-- Side Widget Well -->
                    <div class="well">
                        <h4>Sitios de interes</h4>
                        <ul class="list-unstyled">
                            <li><a href="https//www.userena.cl">Universidad de La Serena</a></li>
                            <li><a href="http://www.dmatuls.cl/portal/">Departamento de Matemáticas</a></li>
                            <li><a href="http://dns.uls.cl/~ej/">Docente</a><li>
                            <li><a href="http://www.ingecompuls.cl/">Ingenieria en Computación</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
            </div> <!-- col-md-3 -->
        </div>   <!-- /.row -->
    </div> <!-- /.container -->

    <!-- Footer -->
    <footer>
        <div class="row">
          <div align="center" class="col-lg-12">
                <img src="image/principal/footer_uls.png" id="foot" class="img-responsive"/>
          </div> <!-- /.col-lg-12 -->
        </div> <!-- /.row -->
    </footer>

    <!-- jQuery -->
    <script src="js/bootstrap/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- Login -->
    <script src="js/iniciar_sesion.js"></script>
    <!-- Tooltip -->
    <script src="js/tooltip.js"></script>
    <script src="js/fireworks.js"></script>
    <!-- Reloj -->
    <script src="js/reloj.js"></script>
    <!-- Graficos -->
    <script src="js/D3/d3.v3.min.js"></script>
    <!-- worldcloud-->
    <script src="js/worldcloud/d3.layout.cloud.js"></script>
    <script src="js/worldcloud/worldcloud.js"></script>
    <script src="js/worldcloud/createCloud.js"></script>

</body>
</html>
