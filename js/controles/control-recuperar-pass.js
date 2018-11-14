//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';
////elementos del DOM: Controles de Ingreso
const ctlPass = document.getElementById("ctlPassword");
const recoverySender = document.getElementById("btn-recoverySender");
////elementos del DOM: Feedback de Ingreso
const feedPass = document.getElementById("feed-password");
recoverySender.onclick = function () {
    //capturando valores desde los controles
    var password = document.getElementById("ctlPassword").value;

    //validaciones disponibles en el documento validadores.js
    validador.ValidarPasswordRecovery(ctlPass, feedPass, password);
};
