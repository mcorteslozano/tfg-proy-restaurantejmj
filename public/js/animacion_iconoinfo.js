window.onload = function(){

    var icono_informacion = document.getElementById('icono_informacion');
    icono_informacion.addEventListener('click', function() {
        window.open('/resources/ManualDeUsuario.pdf');
    });

}