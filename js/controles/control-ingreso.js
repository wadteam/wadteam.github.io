//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';

////elementos del DOM: Controles de Ingreso
let formulario =  document.getElementById("form-ing-usr");
formulario.action = "/backend/procesa-ingreso.php";
formulario.method = "POST";

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
    var email = ctlEmail.value;
    var password = ctlPass.value;

    if(validador.ValidarEmail(ctlEmail, feedEmail, email) &&
    validador.ValidarPassword(ctlPass, feedPass, password)){
        formulario.submit();
    }
    //validaciones disponibles en el documento validadores.js
    
};

