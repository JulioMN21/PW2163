//DOM = Modelo de objetos del documento
var inicio = function() //main
{
	var dameclic = function()
	{
		alert("Le di clic a un bóton");
	}
	$("#dameClic").on("clic",dameclic);
}



//Inicializar nuestro documento 
$(document).on("ready",inicio);