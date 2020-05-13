window.onload = function() {

    var form_tipo = document.getElementById('form_tipo');

    var contact_form = document.getElementById('contact-form');
    var contact_form_reserva = document.getElementById('contact-form-reserva');
    var contact_form_evento = document.getElementById('contact-form-evento');


    contact_form_reserva.style.display = 'none';
    contact_form_evento.style.display = 'none';

    form_tipo.addEventListener('change', function() {
        if (form_tipo.selectedIndex == 0) {
            contact_form.style.display = 'initial';
            contact_form_reserva.style.display = 'none';
            contact_form_evento.style.display = 'none';
        } else if (form_tipo.selectedIndex == 1) {
            contact_form.style.display = 'none';
            contact_form_reserva.style.display = 'initial';
            contact_form_evento.style.display = 'none';
        } else if (form_tipo.selectedIndex == 2) {
            contact_form.style.display = 'none';
            contact_form_reserva.style.display = 'none';
            contact_form_evento.style.display = 'initial';
        }
    });

}