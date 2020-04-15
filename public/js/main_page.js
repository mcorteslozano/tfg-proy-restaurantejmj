imagenes = ["img/img1.png","img/img2.png","img/img3.png","img/img4.png","img/img5.png"];
var caja, contacto, contador = 0, fondoActual = 0;

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

 	document.getElementById("cajaContacto").style.visibility = "hidden";
 	contacto = document.getElementById("contacto");
	contacto.addEventListener('click',function(){
 		document.getElementById("cajaContacto").style.visibility = "initial";
 	});
}

function cambiarFondo() {      
    document.body.style.backgroundSize = "100%";
    document.body.style.backgroundImage = "url(" + imagenes[++fondoActual % imagenes.length] + ")";         
}
