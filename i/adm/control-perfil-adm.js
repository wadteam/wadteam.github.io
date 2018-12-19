//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';
////Elementos del DOM: Formulario
let formulario = document.getElementById("form-perfil-admin");

////
formulario.action = "/backend/adm/procesa-admin-request.php";
formulario.method = "POST";


////Elementos del DOM: Controles de Ingreso
const ctlNombre = document.getElementById("ctlNombre");
const ctlApellidos = document.getElementById("ctlApellidos");
const ctlEmail = document.getElementById("ctlEmail");
const pwSender = document.getElementById("btn-pwSender");
const profileSender = document.getElementById("btn-profileSender");
////Elementos del DOM: Feedback de Ingreso
const feedNombre = document.getElementById("feed-nombre");
const feedApellidos = document.getElementById("feed-apellidos");
const feedEmail = document.getElementById("feed-email");

profileSender.onclick = function (e) {
    e.preventDefault();
    //capturando valores desde los controles
    var nombre = ctlNombre.value;
    var apellidos = ctlApellidos.value;
    var email = ctlEmail.value;

    if (validador.ValidarNombre(ctlNombre, feedNombre, nombre) &&
        validador.ValidarNombre(ctlApellidos, feedApellidos, apellidos) &&
        validador.ValidarEmail(ctlEmail, feedEmail, email)) {
        formulario.submit();
    } 

};

pwSender.onclick = function (e) {
    e.preventDefault();
    window.location.href = "/i/adm/perfil-password.php";
}