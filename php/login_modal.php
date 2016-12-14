<?php
  function modal_login(){

    print ('
      <!-- Modal Login -->
      <div class="modal fade modal-ext" data-keyboard="false" data-backdrop="static" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form action="php/login.php" method="post" id="login-modal">
              <!--Content-->
              <div class="modal-content">
                  <!--Body-->
                  <div class="modal-body" align="center">
                        <img class="img-rounded img-responsive" id="img_login" src="image/principal/login.png">
                        <br>
                        <div class="md-form">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="user" placeholder="Usuario: Rut sin puntos y sin guion" required>
                          </div>
                        </div>
                        <br>
                        <div class="md-form">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
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
    ');
  }
?>
