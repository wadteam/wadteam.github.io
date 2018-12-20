const emRegx = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
//FIXME:
const fechaRegx = /^(?:(?:(?:0?[1-9]|1\d|2[0-8])[/](?:0?[1-9]|1[0-2])|(?:29|30)[/](?:0?[13-9]|1[0-2])|31[/](?:0?[13578]|1[02]))[/](?:0{2,3}[1-9]|0{1,2}[1-9]\d|0?[1-9]\d{2}|[1-9]\d{3})|29[/]0?2[/](?:\d{1,2}(?:0[48]|[2468][048]|[13579][26])|(?:0?[48]|[13579][26]|[2468][048])00))$/;
//FIXME:
const fechaRegxx = "";
const pasRegx = /^.{6,40}$/;
const pasRecoRegx = /^.{3,10}$/;
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

//funciones internas
function AddControlError(controlInput) {
    controlInput.classList.remove("form-control-exito");
    controlInput.classList.add("form-control-error");
}

function AddControlExito(controlInput) {
    controlInput.classList.remove("form-control-error");
    controlInput.classList.add("form-control-exito");
}