window.onload = function(){

    var fecha_entrega = document.getElementById('pedido_fecha_entrega').value;
    var boton = document.getElementById('boton');
   
    boton.addEventListener('click',function(){
        validarFechaMenorActual(fecha_entrega);
    });

}

function validarFechaMenorActual(date){
   alert(date);
}