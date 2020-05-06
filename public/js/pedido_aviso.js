window.onload = function(){
    var tabla = document.getElementById('tabla_linea');
    var celda = tabla.getElementsByTagName('td');
    var boton = document.getElementById('boton');
    var aviso = document.getElementById('pedido_aviso');

    if(celda[0].innerHTML != "No hay líneas de pedido registradas"){
        boton.disabled = false;
        aviso.style.visibility = "hidden";
    }else{
        boton.disabled = true;
        aviso.style.visibility = "visible";
    }
}