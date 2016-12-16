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
    <link href="css/navbar_login.css" rel="stylesheet">
    <!-- Reloj -->
    <link href="css/reloj.css" rel="stylesheet">

    <?php
      require('php/login/login_nav.php');
      require('php/contacto/contacto_modal.php');
      require('php/acerca_modal.php');
      require('php/login/login_modal.php');

      session_start();
    ?>

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
                <?php
                  vista_login();
                ?>
            </div> <!-- /.navbar-collapse -->
          </div> <!-- /.container -->
        </nav>
    </div>
  </div>

  <?php
    modal_contacto();
    modal_uni();
    modal_docente();
    modal_curso();
    modal_login();
  ?>

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
                        <form action="busqueda.php" method="post">
                          <div class="input-group">
                              <input class="form-control" type="text" name="busqueda-index" placeholder="Ingrese contenido" required>
                              <span class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                      <span class="glyphicon glyphicon-search"></span>
                                  </button>
                              </span>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>

                <!-- Blog Categories Well -->
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="well">
                             <h4>Categorias</h4>
                             <ul class="list-unstyled">
                                 <li><a href="#">Ingeniería de Software</a></li>
                                 <li><a href="#">Inteligencia Artificial</a></li>
                                 <li><a href="#">Base de datos</a></li>
                                 <li><a href="#">Telecomunicaciones</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                   <div class="col-md-12">
                     <!-- Side Widget Well -->
                     <div class="well">
                         <h4>Sitios de interes</h4>
                         <ul class="list-unstyled">
                             <li><a href="http://www.userena.cl">Universidad de La Serena</a></li>
                             <li><a href="http://www.dmatuls.cl/portal/">Departamento de Matemáticas</a></li>
                             <li><a href="http://dns.uls.cl/~ej/">Docente</a><li>
                             <li><a href="http://www.ingecompuls.cl/">Ingenieria en Computación</a></li>
                         </ul>
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
