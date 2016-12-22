function listar_correo(pagina){

  alert("Cargando pagina numero:"+pagina);

  document.getElementById("panel-correo-lista").innerHTML="";

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     document.getElementById("panel-correo-lista").innerHTML = xhttp.responseText;
    }
  };

  xhttp.open("GET","php/contacto/contacto_lista.php?pagina="+pagina,true);
  xhttp.send();

}
