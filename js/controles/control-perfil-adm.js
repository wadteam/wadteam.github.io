//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';
////elementos del DOM: Controles de Ingreso
const ctlNombre = document.getElementById("ctlNombre");
const ctlEmail = document.getElementById("ctlEmail");
const ctlContactoSt = document.getElementById("ctlContactoSt");
const ctlContactoNd = document.getElementById("ctlContactoNd");
const ctlGenero = document.getElementById("ctlGenero");
const ctlNacimiento = document.getElementById("ctlNacimiento");
const profileSender = document.getElementById("btn-profileSender");
const pwSender = document.getElementById("btn-pwSender");
////elementos del DOM: Feedback de Ingreso
const feedNombre = document.getElementById("feed-nombre");
const feedEmail = document.getElementById("feed-email");
const feedContactoSt = document.getElementById("feed-contactoSt");
const feedContactoNd = document.getElementById("feed-contactoNd");
const feedNacimiento = document.getElementById("feed-nacimiento");



profileSender.onclick = function () {
    //capturando valores desde los controles
    var nombre = document.getElementById("ctlNombre").value;
    var email = document.getElementById("ctlEmail").value;
    var contactoSt = document.getElementById("ctlContactoSt").value;
    var contactoNd = document.getElementById("ctlContactoNd").value;
    var genero = document.getElementById("ctlGenero").value;
    var genero = document.getElementById("ctlNacimiento").value;
    
    //validaciones disponibles en el documento validadores.js
    validador.ValidarNombre(ctlNombre, feedNombre, nombre);
    validador.ValidarEmail(ctlEmail, feedEmail, email);
    validador.ValidarNumeroContacto(ctlContactoSt, feedContactoSt, contactoSt);
    validador.ValidarNumeroContacto(ctlContactoNd,feedContactoNd,contactoNd);

    if (validador.ValidarNombre(ctlNombre, feedNombre, nombre) && validador.ValidarEmail(ctlEmail, feedEmail, email) && validador.ValidarNumeroContacto(ctlContactoSt, feedContactoSt, contactoSt) && validador.ValidarNumeroContacto(ctlContactoNd, feedContactoNd, contactoNd)){
        toastr.success('Sus datos personales han sido modificados.');
        console.log("Petición efectuada con éxito");
    }else{
        toastr.warning('No se han podido modificar sus datos personales.');
        console.log("Error al realizar la petición");
    }
};

pwSender.onclick = function (e){
    e.preventDefault();
    window.location.href = "/i/adm/perfil-password.html";
}
