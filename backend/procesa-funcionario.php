<?php
include "conexion.php";

$email = $_POST['email'];
$password = $_POST['password'];
//SENTENCIA SQL
$sql = 'SELECT cuenta.rutrelator, cuenta.nombre, cuenta.apellidos, cuenta.email, cuenta.password, cuenta.genero, cuenta.titulo, cuenta.universidad, cuenta.postgrado, cuenta.estado, cuenta.fecha_nacimiento,
perfil.numerocontacto, perfil.numerocontactoextra, perfil.descripcion, perfil.imagen_perfil, ciudad.idciudad, ciudad.nombre AS nombreciudad
FROM perfil_relator AS perfil
INNER JOIN relator AS cuenta ON perfil.relator_rutrelator = cuenta.rutrelator
INNER JOIN ciudad AS ciudad ON ciudad.idciudad = cuenta.ciudad_idciudad
WHERE cuenta.email = "'.$email.'"
AND cuenta.password = "'.$password.'"';


$content = mysqli_query(Conecta(),$sql);
$totalFilas = mysqli_num_rows($content);
$datos = mysqli_fetch_array($content);

 

if($totalFilas!=0){
    session_start();
    /*
    * ÍNDICE DE VARIABLES DE SESIÓN [FUNCIONARIO]
    */
    $_SESSION['rut'] = $datos['rutrelator'];
    $_SESSION['nombre'] = $datos['nombre'];
    $_SESSION['apellidos'] = $datos['apellidos'];
    $_SESSION['email'] = $datos['email'];
    $_SESSION['password'] = $datos['password'];
    $_SESSION['genero'] = $datos['genero'];
    $_SESSION['titulo'] = $datos['titulo'];
    $_SESSION['universidad'] = $datos['universidad'];
    $_SESSION['postgrado'] = $datos['postgrado'];
    $_SESSION['estado'] = $datos['estado'];
    $_SESSION['fechanacimiento'] = $datos['fecha_nacimiento'];
    $_SESSION['numerocontacto'] = $datos['numerocontacto'];
    $_SESSION['numerocontacto_extra'] = $datos['numerocontactoextra'];
    $_SESSION['descripcion'] = $datos['descripcion'];
    $_SESSION['imagen_perfil'] = $datos['imagen_perfil'];
    $_SESSION['id_ciudad'] = $datos['idciudad'];
    $_SESSION['nombre_ciudad'] = $datos['nombreciudad'];
    /* */
    header("Location: redirect.php");

}else{
    header("Location: ../error-ingreso.html");
}

?>