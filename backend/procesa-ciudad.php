<?php

$query = 'SELECT idciudad, nombre, region FROM ciudad';

function ObtenerCiudades(){
    $content = mysqli_query(Conecta(),$query);
    $datos = mysqli_fetch_array($content);
    return $datos;
}

?>