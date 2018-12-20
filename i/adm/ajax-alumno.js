$(document).ready(function () {
    $("#inputAl").keyup(function () //se crea la funcion keyup
        {
            var texto = $(this).val(); //se recupera el valor del input de texto y se guarda en la variable texto
            var cadenaBuscar = 'palabra=' + texto; //se guarda en una variable nueva para posteriormente pasarla a buscarUsuario.php
            if (texto == '') //si no tiene ningun valor el input de texto no realiza ninguna accion
            {} else {
                $.ajax({ //metodo ajax
                    type: "POST", //aqui puede  ser get o post
                    url: "/backend/buscarAlumno.php", //la url adonde se va a mandar la cadena a buscar
                    data: {palabra: texto},
                    cache: false,
                    success: function (html) //funcion que se activa al recibir un dato
                    {
                        $("#mostrar").html(html).show(); // funcion jquery que muestra el div con identificador mostrar, como formato html
                    }
                });
            }
            return false;
        });
});