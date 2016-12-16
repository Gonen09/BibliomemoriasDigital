function abre_modal(){
  alert('La ventana se cierra en 5 segundos');
  $("#modal-cargando").modal("show");
  setInterval(cierra_modal(), 5000);
}


function cierra_modal(){
  $("#modal-cargando").modal("hide");
}
