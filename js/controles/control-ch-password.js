//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';
////elementos del DOM: Controles de Ingreso
const ctlOldPass = document.getElementById("ctlPassword");
const ctlNewPass = document.getElementById("ctlNewPassword");
const ctlNewPassConfirm = document.getElementById("ctlNewPasswordConfirm");
const sender = document.getElementById("btn-sender");
////elementos del DOM: Feedback de Ingreso
const feedPass = document.getElementById("feed-password");
const feedNewPass = document.getElementById("feed-newPassword");
const feedNewPassConfirm = document.getElementById("feed-newPasswordConfirm");

sender.onclick = function (e) {
    e.preventDefault();
    //rescatando valores de los controles 
    var password = document.getElementById("ctlPassword").value;
    var nuevaPassword = document.getElementById("ctlNewPassword").value;
    var nuevaPasswordConfirm = document.getElementById("ctlNewPasswordConfirm").value;
    //validadores
    validador.ValidarPassword(ctlOldPass, feedPass, password);
    validador.ValidarPassword(ctlNewPass, feedNewPass, nuevaPassword);
    validador.ValidarPassword(ctlNewPassConfirm, feedNewPassConfirm, nuevaPasswordConfirm);

    if (validador.ValidarPassword(ctlOldPass, feedPass, password) && validador.ValidarPassword(ctlNewPass, feedNewPass, nuevaPassword) && validador.ValidarPassword(ctlNewPassConfirm, feedNewPassConfirm, nuevaPasswordConfirm)){

        validador.CompararPasswords();
    }
};