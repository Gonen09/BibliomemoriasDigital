<?php
  function modal_cargando($titulo){
    print('
      <!-- Modal cargando-->
      <div class="modal fade" data-keyboard="false" data-backdrop="static" id="modal-cargando" role="dialog">
        <div class="modal-dialog modal-sm">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-body">
              <br><h3 class="text-center" id="title-modal-loading"><b><i>'.$titulo.'</i></b></h3><br>
              <img src="image/cargando.gif" alt="cargando" class="img-responsive">
              <br><p class="text-center">Cargando ...</p><br>
            </div>
          </div>
        </div>
      </div>
    ');
  }
?>
