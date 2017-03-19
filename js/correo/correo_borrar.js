function borrar_correo(id_correo){

    //alert("Eliminando correo numero:"+id_correo);
    confirmar = confirm("¿ Está seguro de eliminar el correo ?");

    if (confirmar){

      var xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
              alert('Correo eliminado');
              window.location='admin_correo.php';
          }
      };

      xhttp.open("GET","php/contacto/contacto_borrar.php?id="+id_correo,true);
      xhttp.send();
    }
}
