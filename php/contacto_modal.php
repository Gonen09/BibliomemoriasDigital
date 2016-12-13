<?php

  function modal_contacto(){

    print '
        <!-- Modal Contact -->
        <div class="modal fade modal-ext" data-keyboard="false" data-backdrop="static" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                  <form action="php/contacto.php" method="post">
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
                           <select class="form-control" id="sel1" name="motivo">
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
                             <textarea type="text" class="form-control md-textarea" name="comentario" style="resize: none;" rows="2" id="comment" placeholder="Ingrese su mensaje aquí"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                      <div class="col-xs-8 col-xs-offset-4 center-block">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    ';
  }
?>
