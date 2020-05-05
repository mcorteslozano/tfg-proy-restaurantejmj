window.onload = function(){

    var icono_informacion = document.getElementById('icono_informacion');
    icono_informacion.addEventListener('click', function() {
        alert('¡Ops! Todavía no hay manual de uso de la aplicación disponible.');
        window.open('/resources/ManualDeUsuario.pdf');
    });

}