//$(buscar_dato());

function buscar_dato(consulta) {
    $.ajax({
        url: '/backend/usr/busca-usr.php',
        type: 'POST',
        dataType: 'html',
        data: { palabra: consulta },
    }).done(function (respuesta) {
        $("#mostrar").html(respuesta);
        //console.log("petición exitosa");
    }).fail(function () {
        //console.log("petición fallida");
    });
}



const busquedaAjax = document.getElementById('inputAl');

busquedaAjax.onkeyup = function (event) {
    var consulta = event.target.value;
    //console.log(consulta);
    
    if (consulta != "") {
        buscar_dato(consulta);
    }else{
        buscar_dato();
    }
    
}