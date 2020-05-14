window.onload = function() {

    var contenido_entrante = document.getElementById('contenido_entrante');
    var contenido_pasta = document.getElementById('contenido_pasta');
    var contenido_carne = document.getElementById('contenido_carne');
    var contenido_pescado = document.getElementById('contenido_pescado');
    var contenido_postre = document.getElementById('contenido_postre');
    alert('hola');
    contenido_pasta.style.display = "none";
    contenido_carne.style.display = "none";
    contenido_pescado.style.display = "none";
    contenido_postre.style.display = "none";

    var secciones = document.getElementById('carta_secciones');
    var secciones_titulos = secciones.getElementsByTagName('div');

    var i;
    for (i = 0; i < secciones_titulos.length; i++) {

        secciones_titulos[i].addEventListener('click', function(e) {

            if (e.target.innerHTML == 'ENTRANTES') {
                contenido_entrante.style.display = "flex";
                contenido_pasta.style.display = "none";
                contenido_carne.style.display = "none";
                contenido_pescado.style.display = "none";
                contenido_postre.style.display = "none";
            }
            if (e.target.innerHTML == 'PASTAS') {
                contenido_entrante.style.display = "none";
                contenido_pasta.style.display = "flex";
                contenido_carne.style.display = "none";
                contenido_pescado.style.display = "none";
                contenido_postre.style.display = "none";
            }
            if (e.target.innerHTML == 'CARNES') {
                contenido_entrante.style.display = "none";
                contenido_pasta.style.display = "none";
                contenido_carne.style.display = "flex";
                contenido_pescado.style.display = "none";
                contenido_postre.style.display = "none";
            }
            if (e.target.innerHTML == 'PESCADOS') {
                contenido_entrante.style.display = "none";
                contenido_pasta.style.display = "none";
                contenido_carne.style.display = "none";
                contenido_pescado.style.display = "flex";
                contenido_postre.style.display = "none";
            }
            if (e.target.innerHTML == 'POSTRES') {
                contenido_entrante.style.display = "none";
                contenido_pasta.style.display = "none";
                contenido_carne.style.display = "none";
                contenido_pescado.style.display = "none";
                contenido_postre.style.display = "flex";
            }

        });
    }

}