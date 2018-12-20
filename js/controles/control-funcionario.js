//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';

//Obtencion DOM formulario y configuracion
let formulario = document.getElementById("form-ing-func");
formulario.action = '/backend/procesa-funcionario.php';
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
    var email = ctlEmail.value;
    var password = ctlPass.value;
    
    //validaciones disponibles en el documento validadores.js
    
    if(validador.ValidarEmail(ctlEmail, feedEmail, email) &&
    validador.ValidarPassword(ctlPass, feedPass, password)){

    formulario.submit();

    }
};

