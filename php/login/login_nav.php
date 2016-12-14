<?php

  function vista_login(){

    if(isset($_SESSION["user"])){

      print ('
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
                        <a href="php/login/logout.php" class="btn btn-danger btn-block">Cerrar sesión</a>
                      </p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      ');

    }else{

      print ('
        <!-- Iniciar sesion -->
        <ul class="nav navbar-nav navbar-right">
          <li data-toggle="modal" data-target="#modal-login"><a href="#"><span class="glyphicon glyphicon-user"></span> Iniciar sesión</a></li>
        </ul>
      ');
    }
  }
 ?>
