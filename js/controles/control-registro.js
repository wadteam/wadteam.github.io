import * as validador from '/js/controles/validadores.js';
////elementos del DOM: Controles del primer formulario de registro
const ctlNombre = document.getElementById("ctlNombre");
const ctlEmail = document.getElementById("ctlEmail");
const ctlPass = document.getElementById("ctlPassword");
const sender = document.getElementById("btn-sender");
////elementos del DOM: feedback del primer formulario de registro
const feedNombre = document.getElementById("feed-nombre");
const feedEmail = document.getElementById("feed-email");
const feedPass = document.getElementById("feed-password");


sender.onclick = function () {
    //capturando valores
    var nombre = document.getElementById("ctlNombre").value;
    var email = document.getElementById("ctlEmail").value;
    var password = document.getElementById("ctlPassword").value;

    
    //validaciones disponibles en archivo validadores.js
    
    validador.ValidarEmail(ctlEmail, feedEmail, email);
    validador.ValidarPassword(ctlPass, feedPass, password);
    validador.ValidarNombre(ctlNombre, feedNombre, nombre);
    
    //confirmar que todos los campos han sido llenados correctamente
   
    if (validador.ValidarEmail(ctlEmail, feedEmail, email) && validador.ValidarPassword(ctlPass, feedPass, password) && validador.ValidarNombre(ctlNombre, feedNombre, nombre)){
        location.href = "/confirmar-registro.html";
    }
    

};



