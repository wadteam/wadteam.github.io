//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/i/usr/controles/validadores.js';
////elementos del DOM: Controles de Ingreso
const ctlnombre = document.getElementById("ctlnombre");
const ctlemail = document.getElementById("ctlemail");

////elementos del DOM: Feedback de Ingreso
const feednombre = document.getElementById("feed-nombre");
const feedemail = document.getElementById("feed-email");
const profile = document.getElementById("btn-profile");


//------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------

profile.onclick = function () {
    //capturando valores desde los controles
    var nombre = document.getElementById("ctlnombre").value;
    var email = document.getElementById("ctlemail").value;
    
    //validaciones disponibles en el documento validadores.js
    validador.ValidarNombre(ctlNombre, feednombre, nombre);
    validador.ValidarEmail(ctlEmail, feedemail, email);

    if (validador.ValidarNombre(ctlnombre, feednombre, nombre) && validador.ValidarEmail(ctlemail, feedemail, email)){
        toastr.success('Sus datos personales han sido modificados.');
        console.log("Petición efectuada con éxito");
    }else{
        toastr.warning('No se han podido modificar sus datos personales.');
        console.log("Error al realizar la petición");
    }
};

pwSender.onclick = function (e){
    e.preventDefault();
    window.location.href = "/i/usr/perfil.html";
}
