window.onload = function(){

    var telefono = document.getElementById('proveedor_telefono');
    var boton = document.getElementById('boton');
    boton.addEventListener('click',function(){
        if(telefono.value!=""){
            if(!comprobarTelefono(telefono.value)){
                alert("Debe introducir un número de teléfono de nueve (9) dígitos que empiece por 9.");
                telefono.value="";
            }
        }
    })
}
function comprobarTelefono(tlf){

    if(!/^9[0-9]{8}$/.test(tlf)){
        return false;
    }
    return true;
}