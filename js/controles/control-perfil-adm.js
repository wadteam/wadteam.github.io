//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';
////elementos del DOM: Controles de Ingreso
const ctlNombre = document.getElementById("ctlNombre");
const ctlEmail = document.getElementById("ctlEmail");
const ctlNumSt = document.getElementById("ctlNumberSt");
const ctlNumNd = document.getElementById("ctlNumberNd");

const ctlPass = document.getElementById("ctlPassword");
const profileSender = document.getElementById("btn-profileSender");
////elementos del DOM: Feedback de Ingreso
const feedEmail = document.getElementById("feed-email");
const feedPass = document.getElementById("feed-password");


sender.onclick = function () {
    //capturando valores desde los controles
    var nombre = document.getElementById("ctlNombre").value;
    var email = document.getElementById("ctlEmail").value;
    var email = document.getElementById("ctlEmail").value;
    var email = document.getElementById("ctlEmail").value;
    var password = document.getElementById("ctlPassword").value;
    
    //validaciones disponibles en el documento validadores.js
    validador.ValidarEmail(ctlEmail, feedEmail, email);
    validador.ValidarPassword(ctlPass, feedPass, password);
};

