import * as validador from '/js/controles/validadores.js';
////Elementos del DOM: Controles del segundo formulario de registro
const ctlConfirmaPassword = document.getElementById("ctlRePassword");
const ctlFecha = document.getElementById("ctlFecha");
const ctlCheck = document.getElementById("ctlCheck");
const resender = document.getElementById("btn-reSender");
////elementos del DOM: feedback del primer formulario de registro
const feedConfirmaPassword = document.getElementById("feed-rePassword");
const feedFecha = document.getElementById("feed-fecha");
const feedCheck = document.getElementById("feed-check");

resender.onclick = function () {
    var confirmaPassword = document.getElementById("ctlRePassword").value;
    var fecha = document.getElementById("ctlFecha").value;
    var genero = document.getElementById("ctlGenero").value;

    //validaciones disponibles en archivos validadores.js
    validador.ValidarPassword(ctlConfirmaPassword, feedConfirmaPassword, confirmaPassword);
    validador.ValidarFecha(ctlFecha, feedFecha, fecha);
    

    validador.ValidarCheckRegistro(ctlCheck, feedCheck);
    /*
    if (validador.ValidarPassword(ctlConfirmaPassword, feedConfirmaPassword, confirmaPassword) && validador.ValidarFecha(ctlFecha, feedFecha, fecha)) {
        location.href = "/confirmar-registro.html";
    }
    */
};