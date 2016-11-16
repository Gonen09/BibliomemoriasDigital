var indice_name = 0;

function add_campo(elemento){
	var padre = document.getElementById("formulario");
	var clonado = elemento.parentNode.parentNode.cloneNode(true);
	padre.appendChild(clonado);
}

function delete_campo(elemento){
	var padre = document.getElementById("formulario");
	padre.removeChild(elemento.parentNode.parentNode);

}

function enviar_formulario(){
		
}