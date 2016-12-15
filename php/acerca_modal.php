<?php

  function modal_uni(){
    print ('
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
    ');
  }

  function modal_docente(){
    print ('
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
    ');
  }

  function modal_curso(){
    print ('
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
    ');
  }

?>
