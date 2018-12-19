import * as validador from '/js/controles/validadores.js';

/********************************************** */
/*              Tratando Objetos DOM           */
/**********************************************/
////Elementos del DOM: Formulario
let formularioPass = document.getElementById("form-password-admin");
////
formularioPass.action = "/backend/adm/procesa-admin-request.php";
formularioPass.method = "POST";

////Elementos del DOM: Controles de Ingreso
const ctlPassword = document.getElementById("ctlPassword");
const ctlNewPassword = document.getElementById("ctlNewPassword");
const ctlNewPasswordConfirm = document.getElementById("ctlNewPasswordConfirm");

////Elementos del DOM: Botones (Triggers)
const sender = document.getElementById("btn-sender");
const cancelarSender = document.getElementById("btn-cancelarSender");

////elementos del DOM: Feedback de Ingreso
const feedPassword = document.getElementById("feed-password");
const feedNewPassword = document.getElementById("feed-newPassword");
const feedNewPasswordConfirm = document.getElementById("feed-newPasswordConfirm");


/********************************************** */
/*           Funciones de validación           */
/**********************************************/

sender.onclick = function (e) {
    e.preventDefault();
    //rescatando valores de los controles 
    var password = ctlPassword.value;
    var nuevaPassword = ctlNewPassword.value;
    var nuevaPasswordConfirm = ctlNewPasswordConfirm.value;

    //validadores

    if (validador.ValidarPassword(ctlPassword, feedPassword, password) &&
        validador.ValidarPassword(ctlNewPassword, feedNewPassword, nuevaPassword) &&
        validador.ValidarPassword(ctlNewPasswordConfirm, feedNewPasswordConfirm, nuevaPasswordConfirm) &&
        validador.CompararPasswords(ctlNewPasswordConfirm, feedNewPasswordConfirm, nuevaPassword, nuevaPasswordConfirm)) {

        formularioPass.submit();
    }
}