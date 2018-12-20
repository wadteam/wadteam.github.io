<?php
include 'conexion.php';
//include 'procesa-ciudad.php';

$email = $_POST['email'];
$password = $_POST['password'];
//SENTENCIA SQL
$sql = 'SELECT cuenta.idalumno, cuenta.rut, cuenta.nombre, cuenta.apellidos, cuenta.email, cuenta.password, cuenta.genero, cuenta.ciudad_idciudad, cuenta.estado,
perfil.fechanacimiento, perfil.numerocontacto, perfil.numerocontacto_extra, perfil.descripcion, perfil.imagen_perfil, ciudad.nombre AS nombreciudad
FROM perfil_alumno AS perfil
INNER JOIN alumno AS cuenta ON perfil.alumno_idalumno = cuenta.idalumno
INNER JOIN ciudad AS ciudad ON ciudad.idciudad = cuenta.ciudad_idciudad
WHERE cuenta.email = "'.$email.'"
AND cuenta.password = "'.$password.'"';

//
$content = mysqli_query(Conecta(),$sql);
$totalFilas = mysqli_num_rows($content);
$datos = mysqli_fetch_array($content);






if($totalFilas!=0){
    session_start();
    /*OBTENIENDO VARIABLES DE SESIÓN */
    $_SESSION['id'] = $datos['idalumno'];
    $_SESSION['rut'] = $datos['rut'];
    $_SESSION['nombre'] = $datos['nombre'];
    $_SESSION['apellidos'] = $datos['apellidos'];
    $_SESSION['genero'] = $datos['genero'];
    $_SESSION['email'] = $datos['email'];
    $_SESSION['password'] = $datos['password'];
    $_SESSION['estado'] = $datos['estado'];
    $_SESSION['id_ciudad'] = $datos['ciudad_idciudad'];
    $_SESSION['nombre_ciudad'] = $datos['nombreciudad'];
    $_SESSION['fecha_nacimiento'] = $datos['fechanacimiento'];
    $_SESSION['n_contacto'] = $datos['numerocontacto'];
    $_SESSION['n_contactoe'] = $datos['numerocontacto_extra'];
    $_SESSION['descripcion'] = $datos['descripcion'];
    $_SESSION['imagen_perfil'] = $datos['imagen_perfil'];
    $_SESSION['listaCiudades'] = "";

    header("Location: redirect.php");

}else{

    header("Location: error.html");
}

?>