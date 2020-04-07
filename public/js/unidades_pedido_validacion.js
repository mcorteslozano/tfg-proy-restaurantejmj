window.onload = function(){

    var linea_pedidos = document.getElementById('linea_pedido_unidades');

    linea_pedidos.addEventListener('blur', function(){
        if(linea_pedidos.value != ""){
            if(linea_pedidos.value < 1){
                alert('No se puede introducir menos de una (1) unidad.');
                linea_pedidos.value = "";  
            }
        }
    })
}