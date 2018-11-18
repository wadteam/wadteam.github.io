//Lista de validadores para ser reutilizados en todos los formularios:
// - Email
// - Fecha
// - Nombre
// - Password
// - Password Recovery
// - Comparar Passwords
// - Número de Contacto
// - Check Registro
/*************Expresiones regulares ***************/
//Expresión regular para direcciones de correo electrónico, sin estándares de la W3C
const emRegx = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
//Expresión regular para fechas, incluidos días de febrero en años bisiestos
//FIXME:
const fechaRegx = /^(?:(?:(?:0?[1-9]|1\d|2[0-8])[/](?:0?[1-9]|1[0-2])|(?:29|30)[/](?:0?[13-9]|1[0-2])|31[/](?:0?[13578]|1[02]))[/](?:0{2,3}[1-9]|0{1,2}[1-9]\d|0?[1-9]\d{2}|[1-9]\d{3})|29[/]0?2[/](?:\d{1,2}(?:0[48]|[2468][048]|[13579][26])|(?:0?[48]|[13579][26]|[2468][048])00))$/;
//FIXME:
const fechaRegxx = "";
//Expresión regular que admite entre 6 y 40 carácteres
const pasRegx = /^.{6,40}$/;
//Expresión regular que admite entre 6 y 40 carácteres para la recuperación de constraseñas mediante código especial
const pasRecoRegx = /^.{3,10}$/;
//Expresión regular que admite entre 3 y 50 caracteres
const nomRegx = /^.{3,50}$/;





export function ValidarEmail(controlInput, controlFeed, valor) {

    if (!emRegx.test(valor)) {
        controlFeed.innerHTML = "Antes de continuar debe ingresar un email válido.";
        AddControlError(controlInput);
        return false;
    } else {
        controlFeed.innerHTML = "";
        AddControlExito(controlInput);
        return true;
    }

}

export function ValidarFecha(controlInput, controlFeed, valor) {

    if (valor === fechaRegxx) {
        controlFeed.innerHTML = "La fecha ingresada no es válida.";
        AddControlError(controlInput);
        return false;
    } else {
        controlFeed.innerHTML = "";
        AddControlExito(controlInput);
        return true;
    }

}
export function ValidarNombre(controlInput, controlFeed, valor) {
    valor = $.trim(valor);
    if (!nomRegx.test(valor)) {
        controlFeed.innerHTML = "Es necesario que ingrese su nombre, entre 3 y 50 caracteres.";
        AddControlError(controlInput);
        return false;
    } else {
        controlFeed.innerHTML = "";
        AddControlExito(controlInput);
        return true;
    }
}

export function ValidarPassword(controlInput, controlFeed, valor) {
    valor = $.trim(valor);
    if (!pasRegx.test(valor)) {
        controlFeed.innerHTML = "Debe ingresar una contraseña válida, entre 6 y 50 caracteres.";
        AddControlError(controlInput);
        return false;
    } else {
        controlFeed.innerHTML = "";
        AddControlExito(controlInput);
        return true;
    }

}

export function ValidarPasswordRecovery(controlInput, controlFeed, valor) {
    valor = $.trim(valor);
    if (!pasRegx.test(valor)) {
        controlFeed.innerHTML = "Debe ingresar un código de recuperación válido.";
        AddControlError(controlInput);
        return false;
    } else {
        controlFeed.innerHTML = "";
        AddControlExito(controlInput);
        return true;
    }

}

export function CompararPasswords(controlInput, controlFeed, primerValor, segundoValor) {
    if (!primerValor === segundoValor) {
        controlFeed.innerHTML = "Las contraseñas no coinciden.";
        return false;
    } else {
        controlFeed.innerHTML = "";
        return true;
    }
}

export function ValidarCheckRegistro(controlInput, controlFeed) {

    if (!controlInput.checked) {
        controlFeed.innerHTML = "Para crear una cuenta debe aceptar los términos y condiciones.";
        return false;
    } else {
        controlFeed.innerHTML = "";
        return true;
    }
}

export function ValidarNumeroContacto(controlInput, controlFeed, valor) {
    valor = $.trim(valor);
    if (valor.length >= 1) {

        if (valor.length < 5 || valor.length > 14) {
            controlFeed.innerHTML = "Debe ingresar un número entre 6 y 15 dígitos.";
            AddControlError(controlInput);
            return false;
        } else {
            controlFeed.innerHTML = "";
            AddControlExito(controlInput);
            return true;
        }

    } else if (valor.length === 0) {
        controlFeed.innerHTML = "";
        AddControlExito(controlInput);
        return true;
    }
}



//funciones internas
function AddControlError(controlInput) {
    controlInput.classList.remove("form-control-exito");
    controlInput.classList.add("form-control-error");
}

function AddControlExito(controlInput) {
    controlInput.classList.remove("form-control-error");
    controlInput.classList.add("form-control-exito");
}