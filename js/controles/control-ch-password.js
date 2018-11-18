//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';
////elementos del DOM: Controles de Ingreso
const ctlOldPass = document.getElementById("ctlPassword");
const ctlNewPass = document.getElementById("ctlNewPassword");
const ctlNewPassConfirm = document.getElementById("ctlNewPasswordConfirm");
const sender = document.getElementById("btn-sender");
const cancelarSender = document.getElementById("btn-cancelarSender");

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

    if (validador.ValidarPassword(ctlOldPass, feedPass, password) && validador.ValidarPassword(ctlNewPass, feedNewPass, nuevaPassword) && validador.ValidarPassword(ctlNewPassConfirm, feedNewPassConfirm, nuevaPasswordConfirm)) {
        toastr.success('Sus credenciales han sido modificadas con éxito!');
        console.log("Petición efectuada con éxito");
        //FIXME:
        /*
        validador.CompararPasswords(ctlNewPassConfirm, feedNewPassConfirm, nuevaPassword, nuevaPasswordConfirm);
        if (validador.CompararPasswords(ctlNewPassConfirm, feedNewPassConfirm, nuevaPassword, nuevaPasswordConfirm)) {
            toastr.success('Sus datos personales han sido modificados.');
            console.log("Petición efectuada con éxito");
        }else{
            toastr.warning('No se han podido modificar sus datos personales.');
            console.log("Error al realizar la petición");
        }
        */
        ctlOldPass.value = "";
        ctlNewPass.value = "";
        ctlNewPassConfirm.value = "";
    } else {
        toastr.warning('No se han podido modificar sus credenciales');
        console.log("Error al realizar la petición");
    }
};

cancelarSender.onclick = function (e) {
    e.preventDefault();
    window.location.href = "/i/adm/perfil.html";
}