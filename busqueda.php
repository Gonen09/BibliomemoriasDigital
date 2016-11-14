<!DOCTYPE html>
<html lang="en">
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

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
      <img src="image/banner.png" class="img-responsive" id="banner">
  </header>

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
                  <li><a href="index.php">Inicio</a></li>
                  <li class="active"><a href="#">Buscar Tesis</a></li>
                  <li><a href="#">Formulario contacto</a></li>
                  <li data-toggle="modal" onclick="$('#myModal1').modal()"><a href="#">Institución</a></li>
                  <li data-toggle="modal" onclick="$('#myModal2').modal()"><a href="#">Docente</a></li>
                  <li data-toggle="modal" onclick="$('#myModal3').modal()"><a href="#">Sobre nosotros</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Administrar</a></li>
                </ul>
            </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container -->
    </nav>

    <!-- Modal  1 -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    	<div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-header text-center">
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    				<h4 class="modal-title" id="myModalLabel1">Contacto</h4>
    			</div>
    			<div class="modal-body text-center">
    				<img src="image/uls-logo.png" class="img-responsive center-block" id ="logo-uls"><br>
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
            <img src="image/jeltsch.jpg" class="img-responsive center-block img-rounded" id ="jeltsh"><br>
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
    				<img src="image/comp-logo.jpg" class="img-responsive center-block" id ="logo-comp"><br>
    				<p><strong>Electivo III<br>Recuperación de la Información</strong> <br> Ingeniería en Computación<br> Universidad de la Serena</p>
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-primary center-block" data-dismiss="modal">Cerrar</button>
    			</div>
    		</div>
    	</div>
    </div>

<div class="container-fluid">
  <div class="row content">

    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p>
            <p>Text</p>
            <p>Text</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p>
            <p>Text</p>
            <p>Text</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p>
            <p>Text</p>
            <p>Text</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p>
          </div>
        </div>
      </div>
    </div> <!-- col-sm-9 -->

    <div class="col-sm-3" style="heigth = 100%;">

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
                <div class="col-lg-12">
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

    </div> <!-- col-sm-3 -->

  </div> <!-- row content -->

  <div class="row content"> <!-- yo -->
      <div class="col-sm-6">
          <h2>Side</h2>
          <div class="panel panel-default">
              <div class="panel-heading">Title</div>
              <div class="panel-body">Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
              Aliquam in felis sit amet augue.</div>
          </div>
      </div> <!-- col-sm-6 -->

      <div class="col-sm-6">
          <h2>Article Heading</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
            Aliquam in felis sit amet augue.</p>
          <p class="lead"><button class="btn btn-default">Read More</button></p>
          <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
          <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul>

      </div> <!-- col-sm-6 -->
  </div>
</div> <!-- row content -->
  <!-- Footer -->
  <footer>
      <div class="row">
        <div align="center" class="col-lg-12">
              <img src="image/footer_uls.png" id="foot" class="img-responsive"/>
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
