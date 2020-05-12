window.onload = function() {

    var contenido_entrante = document.getElementById('contenido_entrante');
    var contenido_pasta = document.getElementById('contenido_pasta');
    var contenido_carne = document.getElementById('contenido_carne');
    var contenido_pescado = document.getElementById('contenido_pescado');
    var contenido_postre = document.getElementById('contenido_postre');

    contenido_pasta.style.display = "none";
    contenido_carne.style.display = "none";
    contenido_pescado.style.display = "none";
    contenido_postre.style.display = "none";

    var secciones = document.getElementById('carta_secciones');
    var secciones_titulos = secciones.getElementsByTagName('div');

    console.log(secciones_titulos);

    var i;
    for (i = 0; i < secciones_titulos.length; i++) {
        //console.log(secciones_titulos[i].innerHTML);

        secciones_titulos[i].addEventListener('click', function(e) {
            //console.log(e.target.innerHTML);

            if (e.target.innerHTML == 'ENTRANTES') {
                //alert("Entrante");
                contenido_entrante.style.display = "flex";
                contenido_pasta.style.display = "none";
                contenido_carne.style.display = "none";
                contenido_pescado.style.display = "none";
                contenido_postre.style.display = "none";
            }
            if (e.target.innerHTML == 'PASTAS') {
                //alert("Pasta");
                contenido_entrante.style.display = "none";
                contenido_pasta.style.display = "flex";
                contenido_carne.style.display = "none";
                contenido_pescado.style.display = "none";
                contenido_postre.style.display = "none";
            }
            if (e.target.innerHTML == 'CARNES') {
                //alert("Carne");
                contenido_entrante.style.display = "none";
                contenido_pasta.style.display = "none";
                contenido_carne.style.display = "flex";
                contenido_pescado.style.display = "none";
                contenido_postre.style.display = "none";
            }
            if (e.target.innerHTML == 'PESCADOS') {
                //alert("Pescado");
                contenido_entrante.style.display = "none";
                contenido_pasta.style.display = "none";
                contenido_carne.style.display = "none";
                contenido_pescado.style.display = "flex";
                contenido_postre.style.display = "none";
            }
            if (e.target.innerHTML == 'POSTRES') {
                //alert("Postre");
                contenido_entrante.style.display = "none";
                contenido_pasta.style.display = "none";
                contenido_carne.style.display = "none";
                contenido_pescado.style.display = "none";
                contenido_postre.style.display = "flex";
            }


        });
    }

}