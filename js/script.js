//Ejecutar funcion en el evento click
document.getElementById("btn-open").addEventListener("click", open_close_menu);

//Declaramos variables
var menu_side = document.getElementById("menu-side");
var btn_open = document.getElementById("btn-open");
var body = document.getElementById("body");


//Evento para mostrar y ocultar menu
	function open_close_menu(){
		body.classList.toggle("body-move");
		menu_side.classList.toggle("menu-side-move");
	}

//si el ancho de la pagina es menor a 760px, ocultara el menu al recargar la pagina
if(window.innerWidth < 760){
	body.classList.add("body-move");
	menu_side.classList.add("menu-side-move");
}

//haciendo el menu responsive (adaptable)
window.addEventListener("resize", function(){

	if(window.innerWidth>760){
		body.classList.remove("body-move");
		menu_side.classList.remove("menu-side-move");
	}

	if(window.innerWidth < 760){
		body.classList.add("body-move");
		menu_side.classList.add("menu-side-move");
	}

});