var fondoActual = 0;
imagenes = ["img/img1.png","img/img2.png"];
var contador = 0;
window.onload = function () {

	 document.body.style.backgroundSize = "100%";
	document.body.style.backgroundImage ="url("+imagenes[0]+")";

	console.log(contador);
 	if(contador == 0){
    	var primero = setInterval(cambiarFondo, 100);
    	 contador += 1;
    	if(contador != 0){
 			clearInterval(primero);
 			setInterval(cambiarFondo,3000);
 			
 		}
 	} 
}

function cambiarFondo() { 
         
    document.body.style.backgroundSize = "100%";
    document.body.style.backgroundImage = "url(" + imagenes[++fondoActual % imagenes.length] + ")";         
}
