//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';
//Obtencion DOM formulario y configuracion
let formulario = document.getElementById("form-pan-admin");
formulario.action = '/backend/procesa-admin.php';
formulario.method = 'POST';

////elementos del DOM: Controles de Ingreso
const ctlEmail = document.getElementById("ctlEmail");
const ctlPass = document.getElementById("ctlPassword");
const sender = document.getElementById("btn-sender");
////elementos del DOM: Feedback de Ingreso
const feedEmail = document.getElementById("feed-email");
const feedPass = document.getElementById("feed-password");

sender.onclick = function (e) {
    e.preventDefault();
    //capturando valores desde los controles
    var email = document.getElementById("ctlEmail").value;
    var password = document.getElementById("ctlPassword").value;

    //validaciones disponibles en el documento validadores.js

    if (validador.ValidarEmail(ctlEmail, feedEmail, email) &&
        validador.ValidarPassword(ctlPass, feedPass, password)) {
            formulario.submit();
    }
}