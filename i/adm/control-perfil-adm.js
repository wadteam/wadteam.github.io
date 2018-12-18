//importando las funciones del documento validadores. js dentro de un objeto "validador":
import * as validador from '/js/controles/validadores.js';
////Elementos del DOM: Formulario
let formulario = document.getElementById("form-perfil-admin");
formulario.action = "backend/adm/procesa-admin-request.php";
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
    //e.preventDefault();
    //capturando valores desde los controles
    var nombre = ctlNombre.value;
    var apellidos = ctlApellidos.value;
    var email = ctlEmail.value;

    
    //validaciones disponibles en el documento validadores.js
/*
    validador.ValidarNombre(ctlNombre, feedNombre, nombre);
    validador.ValidarNombre(ctlApellidos, feedApellidos, apellidos);
    validador.ValidarEmail(ctlEmail, feedEmail, email);
*/

    if(validador.ValidarNombre(ctlNombre, feedNombre,nombre) &&
    validador.ValidarNombre(ctlApellidos, feedApellidos, apellidos) &&
    validador.ValidarEmail(ctlEmail, feedEmail, email)){
        formulario.submit();
    }

    /*
    if (validador.ValidarNombre(ctlNombre, feedNombre, nombre) && validador.ValidarEmail(ctlEmail, feedEmail, email) && validador.ValidarNumeroContacto(ctlContactoSt, feedContactoSt, contactoSt) && validador.ValidarNumeroContacto(ctlContactoNd, feedContactoNd, contactoNd)){
        toastr.success('Sus datos personales han sido modificados.');
        console.log("Petición efectuada con éxito");
    }else{
        toastr.warning('No se han podido modificar sus datos personales.');
        console.log("Error al realizar la petición");
    }
    */
    
  //alert("nombre: "+nombre+" apellidos:"+apellidos+" email: "+email);
};

pwSender.onclick = function (e){
    e.preventDefault();
    window.location.href = "/i/adm/perfil-password.html";
}
