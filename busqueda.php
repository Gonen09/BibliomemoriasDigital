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
      <link href="css/reloj.css" rel="stylesheet">
      <link href="css/busqueda.css" rel="stylesheet">
      <link href="css/panal.css" rel="stylesheet">

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
                  <li><a href="index.php">Inicio</a></li>
                  <li  class="active"><a href="busqueda.php">Buscar Memorias</a></li>
                  <li><a href="#">Administrar</a></li>
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

  <!-- Modal Grafico -->
  <div class="modal fade modal-md" id="modal-grafico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <!--Content-->
          <div class="modal-content">

              <div class="modal-header text-center">
                <h3 class="modal-title text-primary" id="myModalLabel3">Grafico tesis</h3>
              </div>
              <!--Body-->
              <div class="modal-body">
                <div id="body-chart">
                  <div id="chart"></div>
                </div>
              </div>

              <!--Footer-->
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger center-block" data-dismiss="modal">Cerrar</button>
              </div>
          </div> <!--Modal content-->
      </div>
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <div class="panel panel-default">
        <div class="panel-heading" id="cabezera-panel">
          <h4 class="text-center">Búsquedas</h4>
        </div>
        <div class="panel-body">
          <div class="container" aling="center">
            <div class="row">
              <div class="col-md-12">
                <form id="formulario">
                    <div class="row">
                      <div class="col-md-8">
                        <h3 class="text-primary"><strong>Búsqueda simple</strong></h3>
                        <br>
                        <div class="input-group">
                          <input type="text" id="busqueda" class="form-control" placeholder="Buscar contenido" name="q">
                          <div class="input-group-btn">
                              <button class="btn btn-default" type="submit" onclick="enviar_formulario()"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" align="center">
                        <img class="img-rounded" src="image/find-simple.png" alt="busqueda-simple"  id="busqueda-simple">
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <hr>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading" id="busqueda-avanzada">
                    <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><a>Búsqueda avanzada</a></h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-8" aling="center">
                          <h3 class="text-primary text-center"><strong>Búsqueda avanzada</strong></h3>
                          <br>
                          <div class="form-group row">
                            <label for="example-text-input" class="col-xs-2 col-form-label text-right">Titulo</label>
                            <div class="col-xs-10">
                              <div class="input-group">
                                <input class="form-control" type="text" placeholder="Titulo memoria" id="example-text-input">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-search-input" class="col-xs-2 col-form-label text-right">Autor</label>
                            <div class="col-xs-10">
                              <div class="input-group">
                                <input class="form-control" type="text" placeholder="Autor(es) memoria" id="example-search-input">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-email-input" class="col-xs-2 col-form-label text-right">Profesor</label>
                            <div class="col-xs-10">
                              <div class="input-group">
                                <input class="form-control" type="text" placeholder="Profesor(es) memoria" id="example-email-input">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-url-input" class="col-xs-2 col-form-label text-right">Año</label>
                            <div class="col-xs-10">
                              <div class="input-group">
                                <input class="form-control" type="number" value="2000" id="example-number-input">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-tel-input" class="col-xs-2 col-form-label text-right">Abstract</label>
                            <div class="col-xs-10">
                              <div class="input-group">
                                <input class="form-control" type="text" placeholder="Resumen memoria" id="example-tel-input">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-xs-6 col-xs-offset-6">
                              <button type="submit" class="btn btn-primary">
                                <i class="glyphicon glyphicon-search"></i>
                                Consultar
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4" align="center">
                            <br><br><br>
                            <img class="img-rounded img-responsive" src="image/find-advanced.png" alt="busqueda-avanzada">
                            <br><br><br>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- col-sm-9 -->

    <div class="col-sm-3">
      <div class="row">
          <div class="col-lg-12">
            <div class="well">
              <!-- Well Reloj  -->
              <div class="well clock-box">
                <!-- Reloj -->
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
                <!-- Reloj -->
              </div>
              <p class="text-center"><i id="date-box">Fecha</i></p>
            </div>
          </div>
      </div>
    </div> <!-- col-sm-3 -->
  </div> <!-- row content -->

  <div class="row">
      <div class="col-sm-6"> <!-- Panal resultados -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading" id="cabezera-panel">
                <h4 class="text-center">Panal</h4>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-12"> <!-- Agregar contenido para agrandar el grafico flotante -->
                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br>
                    <br><br><br><br>
                    <div id="visualization"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- col-sm-6 -->

      <div class="col-sm-6"> <!-- Resultados busqueda -->
          <div class="panel panel-default">
            <div class="panel-heading" id="cabezera-panel">
              <h4 class="text-center">Resultados</h4>
            </div>
            <div class="panel-body">
               <div class="table-responsive">
                 <table class="table table-condensed table-hover table-borderless">
                   <tbody>
                       <div id="resultado" class="row">
                         <tr>
                           <td class="col-sm-1">
                             <img src="image/pdf.png" alt="pdf" class="img-responsive">
                             <br>
                             <p class="text-center"><a href="#" id="archivo">Ver</a></p>
                           </td>
                           <td class="col-sm-1">
                             <img src="image/chart.png" alt="grafico" class="img-responsive">
                             <br>
                             <p data-toggle="modal" data-target="#modal-grafico" class="text-center"><a href="#" id="archivo">Ver</a></p>
                           </td>
                           <td class="col-sm-1">
                             <hr>
                           </td>
                           <td class="col-sm-9">
                             <h4><strong>Titulo: </strong><i id="titulo">Titulo de la tesis</i></h4>
                             <h4><strong>Autor: </strong><i id="autor">Autor de la tesis</i></h4>
                             <h4><strong>Profesor: </strong><i id="profesor">Profesor de la tesis</i></h4>
                             <h4><strong>Año: </strong><i id="ano">2016</i></h4>
                           </td>
                         </tr>
                       </div>
                       <div id="resultado" class="row">
                         <tr>
                           <td class="col-sm-1">
                             <img src="image/pdf.png" alt="pdf" class="img-responsive">
                             <br>
                             <p class="text-center"><a href="#" id="archivo">Ver</a></p>
                           </td>
                           <td class="col-sm-1">
                             <img src="image/chart.png" alt="grafico" class="img-responsive">
                             <br>
                             <p data-toggle="modal" data-target="#modal-grafico" class="text-center"><a href="#" id="archivo">Ver</a></p>
                           </td>
                           <td class="col-sm-1">
                             <hr>
                           </td>
                           <td class="col-sm-9">
                             <h4><strong>Titulo: </strong><i id="titulo">Titulo de la tesis</i></h4>
                             <h4><strong>Autor: </strong><i id="autor">Autor de la tesis</i></h4>
                             <h4><strong>Profesor: </strong><i id="profesor">Profesor de la tesis</i></h4>
                             <h4><strong>Año: </strong><i id="ano">2016</i></h4>
                           </td>
                         </tr>
                       </div>
                       <div id="resultado" class="row">
                         <tr>
                           <td class="col-sm-1">
                             <img src="image/pdf.png" alt="pdf" class="img-responsive">
                             <br>
                             <p class="text-center"><a href="#" id="archivo">Ver</a></p>
                           </td>
                           <td class="col-sm-1">
                             <img src="image/chart.png" alt="grafico" class="img-responsive">
                             <br>
                             <p data-toggle="modal" data-target="#modal-grafico" class="text-center"><a href="#" id="archivo">Ver</a></p>
                           </td>
                           <td class="col-sm-1">
                             <hr>
                           </td>
                           <td class="col-sm-9">
                             <h4><strong>Titulo: </strong><i id="titulo">Titulo de la tesis</i></h4>
                             <h4><strong>Autor: </strong><i id="autor">Autor de la tesis</i></h4>
                             <h4><strong>Profesor: </strong><i id="profesor">Profesor de la tesis</i></h4>
                             <h4><strong>Año: </strong><i id="ano">2016</i></h4>
                           </td>
                         </tr>
                       </div>
                    </tbody>
                  </table>
               </div>
               <hr>
               <div align="center">
                 <nav aria-label="Page navigation">
                   <ul class="pagination" class="search-pagination">
                     <li>
                       <a href="#" aria-label="Previous">
                         <span aria-hidden="true">&laquo;</span>
                       </a>
                     </li>
                     <li class="active"><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li>
                       <a href="#" aria-label="Next">
                         <span aria-hidden="true">&raquo;</span>
                       </a>
                     </li>
                   </ul>
                 </nav>
               </div>
            </div>
          </div>
      </div>
      </div> <!-- col-sm-6 -->
    </div> <!-- row content -->
</div> <!-- container-fluid -->

  <!-- Footer -->
  <footer>
      <div class="row">
        <div align="center" class="col-lg-12">
              <img src="image/principal/footer_uls.png" id="foot" class="img-responsive"/>
        </div> <!-- /.col-lg-12 -->
      </div>  <!-- /.row -->
  </footer>  <!-- Footer -->

  <!-- jQuery -->
  <script src="js/bootstrap/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <!-- Reloj -->
  <script src="js/reloj.js"></script>
  <!-- Grafico panal -->
  <script src="js/panal/carrotsearch.foamtree.js"></script>
  <script src="js/panal/hammer.min.js"></script>
  <script src="js/panal/ejemplo1.js"></script>
  <!-- Grafico araña -->
  <script src="js/D3/d3.v3.min.js"></script>
  <script src="js/grafico-arana/RadarChart.js"></script>
  <script src="js/grafico-arana/webchart.js"></script>
  <script src="js/grafico-arana/createWeb.js"></script>
</body>
</html>
